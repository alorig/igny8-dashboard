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

  <!-- 3-column layout: metrics (2x2), graph, donut, all equal height -->
  <div style="display: flex; gap: 32px; margin-bottom: 32px; width: 100%; align-items: stretch;">
    <div class="metrics-row" style="flex: 1 1 0; display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 18px 18px; height: 420px; align-items: stretch; justify-items: stretch;">
      <div class="metric-card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%;">
        <div class="metric-value">12,450</div>
        <div class="metric-label">Total Keywords</div>
      </div>
      <div class="metric-card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%;">
        <div class="metric-value">1,200</div>
        <div class="metric-label">Orphaned</div>
      </div>
      <div class="metric-card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%;">
        <div class="metric-value">87%</div>
        <div class="metric-label">Clustered</div>
      </div>
      <div class="metric-card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%;">
        <div class="metric-value">450</div>
        <div class="metric-label">Avg Volume</div>
      </div>
    </div>
    <div class="column-box-height" style="flex: 1 1 0; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 420px;">
      <div class="analytics-graph-card" style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <span class="analytics-graph-title" style="margin-bottom: 18px;">Keyword Volume Trend</span>
        <div style="width: 90%; display: flex; flex-direction: column; gap: 18px;">
          <div style="display: flex; align-items: center; gap: 12px;">
            <span style="width: 110px; font-size: 0.98em; color: #3498db;">Branded</span>
            <div style="flex: 1; background: #eaf3fa; border-radius: 8px; height: 16px; position: relative;">
              <div style="width: 60%; background: #3498db; height: 100%; border-radius: 8px;"></div>
            </div>
            <span style="width: 40px; text-align: right; color: #3498db; font-weight: 600;">60%</span>
          </div>
          <div style="display: flex; align-items: center; gap: 12px;">
            <span style="width: 110px; font-size: 0.98em; color: #27ae60;">Informational</span>
            <div style="flex: 1; background: #eafaf1; border-radius: 8px; height: 16px; position: relative;">
              <div style="width: 80%; background: #27ae60; height: 100%; border-radius: 8px;"></div>
            </div>
            <span style="width: 40px; text-align: right; color: #27ae60; font-weight: 600;">80%</span>
          </div>
          <div style="display: flex; align-items: center; gap: 12px;">
            <span style="width: 110px; font-size: 0.98em; color: #e67e22;">Commercial</span>
            <div style="flex: 1; background: #fff6ea; border-radius: 8px; height: 16px; position: relative;">
              <div style="width: 40%; background: #e67e22; height: 100%; border-radius: 8px;"></div>
            </div>
            <span style="width: 40px; text-align: right; color: #e67e22; font-weight: 600;">40%</span>
          </div>
          <div style="display: flex; align-items: center; gap: 12px;">
            <span style="width: 110px; font-size: 0.98em; color: #8e44ad;">Navigational</span>
            <div style="flex: 1; background: #f3e8fb; border-radius: 8px; height: 16px; position: relative;">
              <div style="width: 30%; background: #8e44ad; height: 100%; border-radius: 8px;"></div>
            </div>
            <span style="width: 40px; text-align: right; color: #8e44ad; font-weight: 600;">30%</span>
          </div>
          <div style="display: flex; align-items: center; gap: 12px;">
            <span style="width: 110px; font-size: 0.98em; color: #db3498;">Transactional</span>
            <div style="flex: 1; background: #fbeaf7; border-radius: 8px; height: 16px; position: relative;">
              <div style="width: 20%; background: #db3498; height: 100%; border-radius: 8px;"></div>
            </div>
            <span style="width: 40px; text-align: right; color: #db3498; font-weight: 600;">20%</span>
          </div>
        </div>
      </div>
    </div>
    <div class="column-box-height" style="flex: 1 1 0; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 420px;">
      <div class="analytics-donut-card" style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <span class="analytics-donut-title" style="margin-bottom: 18px;">Status Breakdown</span>
        <div class="analytics-donut-chart" style="width: 320px; height: 320px; max-width: 80%; max-height: 80%; min-width: 180px; min-height: 180px; background: conic-gradient(#3498db 0% 30%, #27ae60 30% 55%, #e67e22 55% 75%, #db3498 75% 90%, #8e44ad 90% 100%); border-radius: 50%;"></div>
      </div>
    </div>
  </div>

  <div class="actions-row">
    <div>
      <button class="btn btn-primary btn-add">Add New Keyword</button>
      <button class="btn btn-black btn-import">Import Keywords</button>
    </div>
    <div>
      <button class="btn btn-outline btn-export">Export Keywords</button>
    </div>
  </div>

  <div class="keywords-main-content" style="width: 100%;">
    <div class="table-wrap" style="width: 100%;">
      <table class="data-table modern-table">
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
            <td class="table-actions">
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
            <td class="table-actions">
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
            <td class="table-actions">
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
            <td class="table-actions">
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
            <td class="table-actions">
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
            <td class="table-actions">
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
            <td class="table-actions">
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