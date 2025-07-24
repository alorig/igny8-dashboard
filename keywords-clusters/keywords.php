<!-- KEYWORDS MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<div class="page-main-container">
  <section class="keywords-filters-analytics-row">
    <div class="igny8-filter-bar">
      <div class="ts-wrapper">
        <select id="industry" class="dropdown tom-select">
          <option value="" disabled selected hidden>Industry</option>
          <option>Automotive</option>
          <option>Home</option>
          <option>Fitness</option>
        </select>
      </div>
      <div class="ts-wrapper">
        <select id="status" class="dropdown tom-select">
          <option value="" disabled selected hidden>Status</option>
          <option>New</option>
          <option>Clustered</option>
          <option>In-Use</option>
          <option>Orphaned</option>
          <option>Archived</option>
        </select>
      </div>
      <div class="ts-wrapper">
        <select id="persona" class="dropdown tom-select">
          <option value="" disabled selected hidden>Persona</option>
          <option>Marketer</option>
          <option>Engineer</option>
        </select>
      </div>
      <div class="ts-wrapper">
        <select id="buyer-stage" class="dropdown tom-select">
          <option value="" disabled selected hidden>Buyer Stage</option>
          <option>Awareness</option>
          <option>Consideration</option>
          <option>Decision</option>
          <option>Action</option>
        </select>
      </div>
      <div class="ts-wrapper">
        <select id="intent" class="dropdown tom-select">
          <option value="" disabled selected hidden>Intent</option>
          <option>Informational</option>
          <option>Transactional</option>
          <option>Navigational</option>
          <option>Commercial</option>
        </select>
      </div>
      <div class="ts-wrapper">
        <select id="country" class="dropdown tom-select">
          <option value="" disabled selected hidden>Country</option>
          <option>US</option>
          <option>UK</option>
          <option>EU</option>
        </select>
      </div>
      <div class="ts-wrapper" style="max-width: 180px;">
        <label for="volume" style="font-size: 0.95em; color: #888; margin-bottom: 2px;">Volume</label>
        <input id="volume" type="range" min="0" max="50000">
      </div>
      <div class="ts-wrapper search-wrapper">
        <input id="search" type="search" placeholder="Search keywords...">
        <button id="search-btn" type="button">Search</button>
      </div>
    </div>
    <aside class="keywords-analytics-panel">
      <!-- Analytics Visuals: Bar/Line Graph and Donut/Pie Chart -->
      <div class="analytics-visuals">
        <!-- Bar/Line Graph Placeholder -->
        <div class="analytics-graph-card">
          <div class="analytics-graph-placeholder">
            <span class="analytics-graph-title">Keyword Volume Trend</span>
            <div class="analytics-bar-graph"></div>
          </div>
        </div>
        <!-- Donut/Pie Chart Placeholder -->
        <div class="analytics-donut-card">
          <div class="analytics-donut-placeholder">
            <span class="analytics-donut-title">Status Breakdown</span>
            <div class="analytics-donut-chart"></div>
          </div>
        </div>
      </div>
    </aside>
  </section>

  <section class="keywords-metrics-row">
    <div class="keywords-metrics__card">
      <div class="keywords-metrics__value">12,450</div>
      <div class="keywords-metrics__label">Total Keywords</div>
    </div>
    <div class="keywords-metrics__card">
      <div class="keywords-metrics__value">1,200</div>
      <div class="keywords-metrics__label">Orphaned</div>
    </div>
    <div class="keywords-metrics__card">
      <div class="keywords-metrics__value">87%</div>
      <div class="keywords-metrics__label">Clustered</div>
    </div>
    <div class="keywords-metrics__card">
      <div class="keywords-metrics__value">450</div>
      <div class="keywords-metrics__label">Avg Volume</div>
    </div>
  </section>

  <div class="keywords-actions-row">
    <div>
      <button class="btn btn-primary keywords-actions__add">Add New Keyword</button>
      <button class="btn btn-black keywords-actions__import">Import Keywords</button>
    </div>
    <div>
      <button class="btn btn-outline keywords-actions__export">Export Keywords</button>
    </div>
  </div>

  <div class="keywords-main-content">
    <div class="keywords-table-wrap">
      <table class="keywords-table modern-table">
        <thead>
          <tr>
            <th><input type="checkbox" class="keywords-table__select-all" /></th>
            <th>Keyword</th>
            <th class="right">Volume</th>
            <th class="right">CPC</th>
            <th class="right">CPS</th>
            <th class="right">KD</th>
            <th>Intent</th>
            <th>Persona</th>
            <th>Status</th>
            <th>Cluster Assoc.</th>
            <th>Country</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example rows here -->
        </tbody>
      </table>
      <div class="keywords-pagination">
        <button class="btn btn-tertiary">&laquo; Prev</button>
        <span class="pagination-info">1</span>
        <span class="pagination-info">2</span>
        <span class="pagination-info active">3</span>
        <button class="btn btn-tertiary">Next &raquo;</button>
      </div>
    </div>
    <aside class="keywords-analytics-panel">
      <!-- Analytics Visuals: Bar/Line Graph and Donut/Pie Chart -->
      <div class="analytics-visuals">
        <!-- Bar/Line Graph Placeholder -->
        <div class="analytics-graph-card">
          <div class="analytics-graph-placeholder">
            <span class="analytics-graph-title">Keyword Volume Trend</span>
            <div class="analytics-bar-graph"></div>
          </div>
        </div>
        <!-- Donut/Pie Chart Placeholder -->
        <div class="analytics-donut-card">
          <div class="analytics-donut-placeholder">
            <span class="analytics-donut-title">Status Breakdown</span>
            <div class="analytics-donut-chart"></div>
          </div>
        </div>
      </div>
    </aside>
  </div>
</div>
<script>
// Dropdown label/value behavior
const dropdowns = document.querySelectorAll('.dropdown.tom-select');
dropdowns.forEach(function(select) {
  const wrapper = select.closest('.ts-wrapper');
  select.addEventListener('focus', function() {
    wrapper.classList.add('active');
  });
  select.addEventListener('blur', function() {
    wrapper.classList.remove('active');
  });
  select.addEventListener('change', function() {
    if (select.value) {
      select.classList.add('has-value');
      // Remove any floating label logic if it was present
      // The label is now inside the select, so no need for floating label logic here
    } else {
      select.classList.remove('has-value');
      // Remove any floating label logic if it was present
      // The label is now inside the select, so no need for floating label logic here
    }
  });
  // Initial state
  if (!select.value) {
    select.classList.remove('has-value');
    // Remove any floating label logic if it was present
    // The label is now inside the select, so no need for floating label logic here
  } else {
    select.classList.add('has-value');
    // Remove any floating label logic if it was present
    // The label is now inside the select, so no need for floating label logic here
  }
});
</script> 