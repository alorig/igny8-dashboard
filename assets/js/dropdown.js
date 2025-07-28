// igny8-dropdown.js - Shared JavaScript for all pages

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
    } else if (dropdownId === 'industry-filter' || dropdown.classList.contains('industry-filter')) {
      filterByIndustry(value);
    } else if (dropdownId === 'intent-filter' || dropdown.classList.contains('intent-filter')) {
      filterByIntent(value);
    } else if (dropdownId === 'persona-filter' || dropdown.classList.contains('persona-filter')) {
      filterByPersona(value);
    } else if (dropdownId === 'buyer-stage-filter' || dropdown.classList.contains('buyer-stage-filter')) {
      filterByBuyerStage(value);
    } else if (dropdownId === 'active-niche') {
      handleNicheSelection(value);
    }
    
    // Update metrics after any filter change
    updateMetrics();
  }

  // Filter functions - reusable for any page with tables
  function filterByStatus(status) {
    const tableRows = document.querySelectorAll('.data-table tbody tr');
    tableRows.forEach(row => {
      const statusCell = row.querySelector('td:nth-child(3) .badge');
      if (statusCell) {
        const rowStatus = statusCell.textContent.trim().toLowerCase();
        const showRow = !status || rowStatus.includes(status.toLowerCase());
        row.style.display = showRow ? '' : 'none';
      }
    });
  }

  function filterByIndustry(industry) {
    const tableRows = document.querySelectorAll('.data-table tbody tr');
    tableRows.forEach(row => {
      const sectorCell = row.querySelector('td:nth-child(4)');
      if (sectorCell) {
        const rowSector = sectorCell.textContent.trim().toLowerCase();
        const showRow = !industry || rowSector.includes(industry.toLowerCase());
        row.style.display = showRow ? '' : 'none';
      }
    });
  }

  function filterByIntent(intent) {
    const tableRows = document.querySelectorAll('.data-table tbody tr');
    tableRows.forEach(row => {
      const intentCell = row.querySelector('td:nth-child(6) .badge');
      if (intentCell) {
        const rowIntent = intentCell.textContent.trim().toLowerCase();
        const showRow = !intent || rowIntent.includes(intent.toLowerCase());
        row.style.display = showRow ? '' : 'none';
      }
    });
  }

  function filterByPersona(persona) {
    const tableRows = document.querySelectorAll('.data-table tbody tr');
    tableRows.forEach(row => {
      const personaCell = row.querySelector('td:nth-child(7)');
      if (personaCell) {
        const rowPersona = personaCell.textContent.trim().toLowerCase();
        const showRow = !persona || rowPersona.includes(persona.toLowerCase());
        row.style.display = showRow ? '' : 'none';
      }
    });
  }

  function filterByBuyerStage(stage) {
    // This would be implemented when buyer stage data is available
    console.log("Filtering by buyer stage:", stage);
  }

  function handleNicheSelection(nicheId) {
    if (nicheId) {
      // Update the badge with real data for selected niche
      updateNicheBadge(nicheId);
      
      // Filter table to show only this niche
      const tableRows = document.querySelectorAll('.data-table tbody tr');
      tableRows.forEach(row => {
        // This would need data attributes or other way to identify niche
        row.style.display = ''; // Show all for now
      });
    }
  }

  function updateNicheBadge(nicheId) {
    // This would fetch real data for the selected niche
    console.log("Selected niche ID:", nicheId);
    // Update badge with real cluster and keyword counts
  }

  // Update metrics based on filtered results - reusable for any page
  function updateMetrics() {
    const visibleRows = Array.from(document.querySelectorAll('.data-table tbody tr')).filter(row => row.style.display !== 'none');
    
    // Update Total Keywords metric
    const totalKeywordsMetric = document.querySelector('.metric-blue .metric-value');
    if (totalKeywordsMetric) {
      let totalKeywords = 0;
      visibleRows.forEach(row => {
        const keywordCell = row.querySelector('td:nth-child(5)');
        if (keywordCell) {
          const keywordCount = parseInt(keywordCell.textContent) || 0;
          totalKeywords += keywordCount;
        }
      });
      totalKeywordsMetric.textContent = totalKeywords.toLocaleString();
    }
    
    // Update Total Clusters metric
    const totalClustersMetric = document.querySelector('.metric-green .metric-value');
    if (totalClustersMetric) {
      totalClustersMetric.textContent = visibleRows.length;
    }
    
    // Update % Clustered metric
    const clusteredMetric = document.querySelector('.metric-pink .metric-value');
    if (clusteredMetric) {
      const clusteredPercentage = visibleRows.length > 0 ? Math.round((visibleRows.length / visibleRows.length) * 100) : 0;
      clusteredMetric.textContent = clusteredPercentage + '%';
    }
    
    // Update Orphaned Keywords metric
    const orphanedMetric = document.querySelector('.metric-orange .metric-value');
    if (orphanedMetric) {
      const orphanedCount = Math.max(0, 1200 - (visibleRows.length * 50)); // Example calculation
      const orphanedPercentage = 100 - (parseInt(clusteredMetric.textContent) || 87);
      orphanedMetric.textContent = orphanedCount.toLocaleString() + ' (' + orphanedPercentage + '%)';
    }

    // Update progress bars
    updateProgressBars(visibleRows);
  }

  // Update progress bars (for cluster status section) - reusable
  function updateProgressBars(visibleRows) {
    const totalRows = visibleRows.length;
    if (totalRows === 0) return;

    const finalized = visibleRows.filter(row => {
      const statusCell = row.querySelector('td:nth-child(3) .badge');
      return statusCell && statusCell.textContent.toLowerCase().includes('final');
    }).length;

    const active = visibleRows.filter(row => {
      const statusCell = row.querySelector('td:nth-child(3) .badge');
      return statusCell && statusCell.textContent.toLowerCase().includes('active');
    }).length;

    const inactive = totalRows - finalized - active;

    // Update progress bars
    updateProgressBar('finalized', finalized, totalRows);
    updateProgressBar('in-progress', active, totalRows);
    updateProgressBar('new', inactive, totalRows);
  }

  function updateProgressBar(className, count, total) {
    const progressBar = document.querySelector(`.progress-row:nth-child(${getProgressRowIndex(className)}) .progress-fill`);
    const percentElement = document.querySelector(`.progress-row:nth-child(${getProgressRowIndex(className)}) .progress-percent`);
    
    if (progressBar && percentElement) {
      const percentage = total > 0 ? Math.round((count / total) * 100) : 0;
      progressBar.style.width = percentage + '%';
      percentElement.textContent = percentage + '%';
    }
  }

  function getProgressRowIndex(className) {
    const indices = {
      'finalized': 1,
      'in-progress': 2,
      'new': 3
    };
    return indices[className] || 1;
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

  // Action button handlers - reusable for any page
  document.addEventListener('click', function(e) {
    if (e.target.classList.contains('btn-edit')) {
      // Handle edit button click
      console.log('Edit button clicked');
    } else if (e.target.classList.contains('btn-view')) {
      // Handle view button click
      console.log('View button clicked');
    }
  });

  // Initialize filtering on page load
  updateMetrics();
  
  // Add search functionality - reusable for any page
  const searchInput = document.getElementById('search');
  if (searchInput) {
    searchInput.addEventListener('input', function(e) {
      const searchTerm = e.target.value.toLowerCase();
      const tableRows = document.querySelectorAll('.data-table tbody tr');
      
      tableRows.forEach(row => {
        const text = row.textContent.toLowerCase();
        const showRow = text.includes(searchTerm);
        row.style.display = showRow ? '' : 'none';
      });
      
      updateMetrics();
    });
  }
}); 