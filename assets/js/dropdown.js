/**
 * Dependency-based Dropdown Filtering for Niches
 * Filters table data based on selected dropdown values
 */

document.addEventListener('DOMContentLoaded', function() {
    const statusFilter = document.getElementById('status-filter');
    const sectorFilter = document.getElementById('sector-filter');
    const tableRows = document.querySelectorAll('.data-table tbody tr');
    
    if (!statusFilter || !sectorFilter) return;

    // Function to filter table rows
    function filterTable() {
        const selectedStatus = statusFilter.value;
        const selectedSector = sectorFilter.value;
        
        tableRows.forEach(row => {
            const statusCell = row.querySelector('td:nth-child(3)'); // Status column
            const sectorCell = row.querySelector('td:nth-child(4)'); // Sector column
            
            if (!statusCell || !sectorCell) return;
            
            const rowStatus = statusCell.textContent.trim().toLowerCase();
            const rowSector = sectorCell.textContent.trim().toLowerCase();
            
            let showRow = true;
            
            // Filter by status
            if (selectedStatus && !rowStatus.includes(selectedStatus.toLowerCase())) {
                showRow = false;
            }
            
            // Filter by sector
            if (selectedSector && !rowSector.includes(selectedSector.toLowerCase())) {
                showRow = false;
            }
            
            // Show/hide row
            row.style.display = showRow ? '' : 'none';
        });
        
        // Update metrics based on filtered results
        updateMetrics();
    }
    
    // Function to update metrics based on filtered results
    function updateMetrics() {
        const visibleRows = Array.from(tableRows).filter(row => row.style.display !== 'none');
        
        // Update Total Niches metric
        const totalNichesMetric = document.querySelector('.metric-card:nth-child(1) p');
        if (totalNichesMetric) {
            totalNichesMetric.textContent = visibleRows.length;
        }
        
        // Update Active Niches metric
        const activeNiches = visibleRows.filter(row => {
            const statusCell = row.querySelector('td:nth-child(3)');
            return statusCell && statusCell.textContent.toLowerCase().includes('active');
        }).length;
        
        const activeNichesMetric = document.querySelector('.metric-card:nth-child(2) p');
        if (activeNichesMetric) {
            activeNichesMetric.textContent = activeNiches;
        }
    }
    
    // Add event listeners
    statusFilter.addEventListener('change', filterTable);
    sectorFilter.addEventListener('change', filterTable);
    
    // Initialize filtering
    filterTable();
    
    // Add visual feedback for active filters
    function updateFilterStyles() {
        const filters = [statusFilter, sectorFilter];
        filters.forEach(filter => {
            if (filter.value) {
                filter.style.backgroundColor = '#e3f2fd';
                filter.style.borderColor = '#2196f3';
            } else {
                filter.style.backgroundColor = '';
                filter.style.borderColor = '';
            }
        });
    }
    
    statusFilter.addEventListener('change', updateFilterStyles);
    sectorFilter.addEventListener('change', updateFilterStyles);
    updateFilterStyles();
});

/**
 * AJAX-based filtering for better performance with large datasets
 * Uncomment and modify if you want to use AJAX instead of client-side filtering
 */
/*
function filterTableAjax(status, sector) {
    const data = new FormData();
    data.append('action', 'filter_niches');
    data.append('status', status);
    data.append('sector', sector);
    data.append('nonce', igny8_ajax.nonce);
    
    fetch(igny8_ajax.ajax_url, {
        method: 'POST',
        body: data
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.querySelector('.data-table tbody').innerHTML = data.data.html;
            updateMetrics();
        }
    })
    .catch(error => console.error('Error:', error));
}
*/ 