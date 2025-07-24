<!-- KEYWORDS MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<style>
/* Layout and grid fixes */
.keywords-main-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 24px;
}
.keywords-filters-analytics-row {
  display: flex;
  gap: 32px;
  margin-bottom: 32px;
}
.igny8-filter-bar {
  display: flex;
  flex-wrap: wrap;
  gap: 16px;
  align-items: flex-end;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(34,34,34,0.04);
  padding: 24px;
  min-width: 0;
}
.ts-wrapper {
  position: relative;
  min-width: 140px;
  flex: 1 1 140px;
  max-width: 180px;
}
.ts-label {
  position: absolute;
  left: 16px;
  top: 50%;
  transform: translateY(-50%);
  color: #888;
  font-size: 0.95rem;
  pointer-events: none;
  transition: opacity 0.2s;
}
.dropdown.tom-select {
  width: 100%;
  height: 36px;
  padding: 0 32px 0 16px;
  border-radius: 8px;
  border: 1px solid #e0e0e0;
  background: #f7f7f7;
  font-size: 1rem;
  appearance: none;
  z-index: 1;
}
.ts-wrapper.active {
  z-index: 10;
}
.ts-wrapper .dropdown-value {
  color: #222;
  font-weight: 500;
  padding-left: 16px;
}
.ts-wrapper .dropdown-value:not(:empty) + .ts-label {
  opacity: 0;
}
/* Volume slider alignment */
.ts-wrapper input[type=range] {
  width: 100%;
  margin-top: 0;
  vertical-align: middle;
}
/* Search field and button */
.ts-wrapper.search-wrapper {
  display: flex;
  align-items: center;
  min-width: 220px;
  max-width: 260px;
}
#search {
  flex: 1;
  height: 36px;
  border-radius: 8px 0 0 8px;
  border: 1px solid #e0e0e0;
  padding: 0 12px;
  font-size: 1rem;
  background: #f7f7f7;
}
#search-btn {
  height: 36px;
  border-radius: 0 8px 8px 0;
  border: none;
  background: #4DABF7;
  color: #fff;
  font-weight: 600;
  padding: 0 18px;
  margin-left: -1px;
  cursor: pointer;
}
/* Stats cards grid */
.keywords-metrics-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
  margin: 32px 0;
}
.keywords-metrics__card {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(34,34,34,0.04);
  padding: 24px 0;
  text-align: center;
  min-height: 90px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
/* Button row */
.keywords-actions-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 32px;
  gap: 16px;
}
.keywords-actions-row .btn {
  min-width: 140px;
}
/* Main content split */
.keywords-main-content {
  display: flex;
  gap: 32px;
}
.keywords-table-wrap {
  flex: 2 1 0;
  min-width: 0;
}
.keywords-analytics-panel {
  flex: 1 1 0;
  min-width: 260px;
  max-width: 340px;
}
</style>

<div class="keywords-main-container">
  <section class="keywords-filters-analytics-row">
    <div class="igny8-filter-bar">
      <div class="ts-wrapper">
        <span class="ts-label">Industry</span>
        <select id="industry" class="dropdown tom-select">
          <option value="" selected hidden></option>
          <option>Automotive</option>
          <option>Home</option>
          <option>Fitness</option>
        </select>
      </div>
      <div class="ts-wrapper">
        <span class="ts-label">Status</span>
        <select id="status" class="dropdown tom-select">
          <option value="" selected hidden></option>
          <option>New</option>
          <option>Clustered</option>
          <option>In-Use</option>
          <option>Orphaned</option>
          <option>Archived</option>
        </select>
      </div>
      <div class="ts-wrapper">
        <span class="ts-label">Persona</span>
        <select id="persona" class="dropdown tom-select">
          <option value="" selected hidden></option>
          <option>Marketer</option>
          <option>Engineer</option>
        </select>
      </div>
      <div class="ts-wrapper">
        <span class="ts-label">Buyer Stage</span>
        <select id="buyer-stage" class="dropdown tom-select">
          <option value="" selected hidden></option>
          <option>Awareness</option>
          <option>Consideration</option>
          <option>Decision</option>
          <option>Action</option>
        </select>
      </div>
      <div class="ts-wrapper">
        <span class="ts-label">Volume</span>
        <input id="volume" type="range" min="0" max="50000">
      </div>
      <div class="ts-wrapper">
        <span class="ts-label">Intent</span>
        <select id="intent" class="dropdown tom-select">
          <option value="" selected hidden></option>
          <option>Informational</option>
          <option>Transactional</option>
          <option>Navigational</option>
          <option>Commercial</option>
        </select>
      </div>
      <div class="ts-wrapper">
        <span class="ts-label">Country</span>
        <select id="country" class="dropdown tom-select">
          <option value="" selected hidden></option>
          <option>US</option>
          <option>UK</option>
          <option>EU</option>
        </select>
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
      wrapper.querySelector('.ts-label').style.opacity = 0;
    } else {
      select.classList.remove('has-value');
      wrapper.querySelector('.ts-label').style.opacity = 1;
    }
  });
  // Initial state
  if (!select.value) {
    select.classList.remove('has-value');
    wrapper.querySelector('.ts-label').style.opacity = 1;
  } else {
    select.classList.add('has-value');
    wrapper.querySelector('.ts-label').style.opacity = 0;
  }
});
</script> 