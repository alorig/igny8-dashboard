<!-- KEYWORDS MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<div class="page-main-container">
  <section class="keywords-filters-analytics-row" style="width: 100%; margin-bottom: 0;">
    <div class="igny8-filter-bar" style="width: 100%;">
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
  </section>

  <!-- Metrics section remains as is -->
  <!-- Remove the 3-column layout: only keep the metrics cards column -->
  <div style="margin-bottom: 32px; width: 100%;">
    <div class="column-box-height" style="display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 18px 18px; height: 420px; align-items: stretch; justify-items: stretch;">
      <div class="keywords-metrics__card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%;">
        <div class="keywords-metrics__value">12,450</div>
        <div class="keywords-metrics__label">Total Keywords</div>
      </div>
      <div class="keywords-metrics__card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%;">
        <div class="keywords-metrics__value">1,200</div>
        <div class="keywords-metrics__label">Orphaned</div>
      </div>
      <div class="keywords-metrics__card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%;">
        <div class="keywords-metrics__value">87%</div>
        <div class="keywords-metrics__label">Clustered</div>
      </div>
      <div class="keywords-metrics__card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%;">
        <div class="keywords-metrics__value">450</div>
        <div class="keywords-metrics__label">Avg Volume</div>
      </div>
    </div>
  </div>

  <div class="keywords-actions-row">
    <div>
      <button class="btn btn-primary keywords-actions__add">Add New Keyword</button>
      <button class="btn btn-black keywords-actions__import">Import Keywords</button>
    </div>
    <div>
      <button class="btn btn-outline keywords-actions__export">Export Keywords</button>
    </div>
  </div>

  <!-- Expand the keyword table to full width -->
  <div class="keywords-main-content" style="width: 100%;">
    <div class="keywords-table-wrap" style="width: 100%;">
      <table class="keywords-table" style="width: 100%;">
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
          <tr>
            <td><input type="checkbox" /></td>
            <td>best car seat covers</td>
            <td class="right">2,400</td>
            <td class="right">$1.20</td>
            <td class="right">0.45</td>
            <td class="right">32</td>
            <td><span class="badge badge-blue">Informational</span></td>
            <td><span class="badge badge-gray">Marketer</span></td>
            <td><span class="badge badge-blue">New</span></td>
            <td>Automotive Interior</td>
            <td>US</td>
            <td class="keywords-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>leather steering wheel cover</td>
            <td class="right">1,800</td>
            <td class="right">$0.95</td>
            <td class="right">0.38</td>
            <td class="right">28</td>
            <td><span class="badge badge-green">Commercial</span></td>
            <td><span class="badge badge-gray">Engineer</span></td>
            <td><span class="badge badge-green">Clustered</span></td>
            <td>Luxury Interiors</td>
            <td>UK</td>
            <td class="keywords-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>universal car mats</td>
            <td class="right">3,100</td>
            <td class="right">$0.80</td>
            <td class="right">0.29</td>
            <td class="right">22</td>
            <td><span class="badge badge-blue">Navigational</span></td>
            <td><span class="badge badge-gray">Marketer</span></td>
            <td><span class="badge badge-red">Orphaned</span></td>
            <td>-</td>
            <td>EU</td>
            <td class="keywords-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>car floor mats</td>
            <td class="right">1,200</td>
            <td class="right">$0.70</td>
            <td class="right">0.22</td>
            <td class="right">18</td>
            <td><span class="badge badge-green">Commercial</span></td>
            <td><span class="badge badge-gray">Marketer</span></td>
            <td><span class="badge badge-green">Clustered</span></td>
            <td>Universal Car Mats</td>
            <td>US</td>
            <td class="keywords-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>custom seat covers</td>
            <td class="right">2,800</td>
            <td class="right">$1.10</td>
            <td class="right">0.41</td>
            <td class="right">27</td>
            <td><span class="badge badge-blue">Informational</span></td>
            <td><span class="badge badge-gray">Engineer</span></td>
            <td><span class="badge badge-blue">New</span></td>
            <td>Automotive Interior</td>
            <td>UK</td>
            <td class="keywords-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>leather car mats</td>
            <td class="right">2,100</td>
            <td class="right">$0.90</td>
            <td class="right">0.33</td>
            <td class="right">25</td>
            <td><span class="badge badge-green">Commercial</span></td>
            <td><span class="badge badge-gray">Marketer</span></td>
            <td><span class="badge badge-green">Clustered</span></td>
            <td>Luxury Interiors</td>
            <td>EU</td>
            <td class="keywords-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>universal trunk liner</td>
            <td class="right">1,600</td>
            <td class="right">$0.60</td>
            <td class="right">0.19</td>
            <td class="right">15</td>
            <td><span class="badge badge-blue">Informational</span></td>
            <td><span class="badge badge-gray">Engineer</span></td>
            <td><span class="badge badge-red">Orphaned</span></td>
            <td>-</td>
            <td>US</td>
            <td class="keywords-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
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