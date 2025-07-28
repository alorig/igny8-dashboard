// igny8-dropdown.js

document.addEventListener("DOMContentLoaded", function () {
  // Initialize all dropdowns with Tom Select
  const dropdowns = document.querySelectorAll(".igny8-dropdown, .tom-select");
  
  dropdowns.forEach(function (dropdown) {
    // Initialize Tom Select if not already initialized
    if (!dropdown.classList.contains('ts-wrapper')) {
      new TomSelect(dropdown, {
        create: false,
        sortField: {
          field: "text",
          direction: "asc"
        },
        onChange: function(value) {
          console.log("Dropdown changed to:", value);
          handleDropdownChange(dropdown, value);
        }
      });
    }
    
    // Also add regular change event listener for compatibility
    dropdown.addEventListener("change", function (e) {
      const selected = e.target.value;
      console.log("Dropdown changed to:", selected);
      handleDropdownChange(dropdown, selected);
    });
  });

  // Handle dropdown changes
  function handleDropdownChange(dropdown, value) {
    const dropdownId = dropdown.id || dropdown.getAttribute('data-dropdown-id');
    
    // Update visual feedback
    updateFilterStyles(dropdown, value);
    
    // Trigger filtering based on dropdown type
    if (dropdownId === 'status-filter' || dropdown.classList.contains('status-filter')) {
      filterByStatus(value);
    } else if (dropdownId === 'sector-filter' || dropdown.classList.contains('sector-filter')) {
      filterBySector(value);
    } else if (dropdownId === 'industry-filter' || dropdown.classList.contains('industry-filter')) {
      filterByIndustry(value);
    } else if (dropdownId === 'intent-filter' || dropdown.classList.contains('intent-filter')) {
      filterByIntent(value);
    } else if (dropdownId === 'persona-filter' || dropdown.classList.contains('persona-filter')) {
      filterByPersona(value);
    } else if (dropdownId === 'buyer-stage-filter' || dropdown.classList.contains('buyer-stage-filter')) {
      filterByBuyerStage(value);
    }
    
    // Update metrics after any filter change
    updateMetrics();
  }

  // Filter functions
  function filterByStatus(status) {
    const tableRows = document.querySelectorAll('.data-table tbody tr');
    tableRows.forEach(row => {
      const statusCell = row.querySelector('td:nth-child(3)'); // Status column
      if (statusCell) {
        const rowStatus = statusCell.textContent.trim().toLowerCase();
        const showRow = !status || rowStatus.includes(status.toLowerCase());
        row.style.display = showRow ? '' : 'none';
      }
    });
  }

  function filterBySector(sector) {
    const tableRows = document.querySelectorAll('.data-table tbody tr');
    tableRows.forEach(row => {
      const sectorCell = row.querySelector('td:nth-child(4)'); // Sector column
      if (sectorCell) {
        const rowSector = sectorCell.textContent.trim().toLowerCase();
        const showRow = !sector || rowSector.includes(sector.toLowerCase());
        row.style.display = showRow ? '' : 'none';
      }
    });
  }

  function filterByIndustry(industry) {
    // Similar filtering logic for industry
    console.log("Filtering by industry:", industry);
  }

  function filterByIntent(intent) {
    // Similar filtering logic for intent
    console.log("Filtering by intent:", intent);
  }

  function filterByPersona(persona) {
    // Similar filtering logic for persona
    console.log("Filtering by persona:", persona);
  }

  function filterByBuyerStage(stage) {
    // Similar filtering logic for buyer stage
    console.log("Filtering by buyer stage:", stage);
  }

  // Update metrics based on filtered results
  function updateMetrics() {
    const visibleRows = Array.from(document.querySelectorAll('.data-table tbody tr')).filter(row => row.style.display !== 'none');
    
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

    // Update other metrics as needed
    updateProgressBars(visibleRows);
  }

  // Update progress bars (for cluster status section)
  function updateProgressBars(visibleRows) {
    const totalRows = visibleRows.length;
    if (totalRows === 0) return;

    const finalized = visibleRows.filter(row => {
      const statusCell = row.querySelector('td:nth-child(3)');
      return statusCell && statusCell.textContent.toLowerCase().includes('final');
    }).length;

    const inProgress = visibleRows.filter(row => {
      const statusCell = row.querySelector('td:nth-child(3)');
      return statusCell && statusCell.textContent.toLowerCase().includes('progress');
    }).length;

    const newClusters = totalRows - finalized - inProgress;

    // Update progress bars
    updateProgressBar('finalized', finalized, totalRows);
    updateProgressBar('in-progress', inProgress, totalRows);
    updateProgressBar('new', newClusters, totalRows);
  }

  function updateProgressBar(className, count, total) {
    const progressBar = document.querySelector(`.niche-progress__${className} .niche-progress__fill`);
    const percentElement = document.querySelector(`.niche-progress__${className} .niche-progress__percent`);
    
    if (progressBar && percentElement) {
      const percentage = total > 0 ? Math.round((count / total) * 100) : 0;
      progressBar.style.width = percentage + '%';
      percentElement.textContent = percentage + '%';
    }
  }

  // Visual feedback for active filters
  function updateFilterStyles(dropdown, value) {
    if (value && value !== '') {
      dropdown.style.backgroundColor = '#e3f2fd';
      dropdown.style.borderColor = '#2196f3';
    } else {
      dropdown.style.backgroundColor = '';
      dropdown.style.borderColor = '';
    }
  }

  // Initialize filtering on page load
  updateMetrics();
}); 