<!-- KEYWORDS MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<div class="page-main-container">
  <section class="keywords-filters-analytics-row w-100 m-0">
    <div class="igny8-filter-bar w-100">
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
          <option>Active</option>
          <option>Archived</option>
        </select>
      </div>
      <div class="ts-wrapper max-w-180">
        <label for="volume" class="text-small text-muted mb-10">Volume</label>
        <input id="volume" type="range" min="0" max="100000">
      </div>
      <div class="ts-wrapper">
        <select id="intent" class="dropdown tom-select">
          <option value="" disabled selected hidden>Intent</option>
          <option>Informational</option>
          <option>Transactional</option>
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
    </div>
  </section>

  <!-- 3-column layout: metrics (2x2), graph, donut, all equal height -->
  <div class="keywords-analytics-row" style="display: flex; gap: 32px; margin-bottom: 32px; width: 100%; align-items: stretch;">
    <div class="column-box-height" style="flex: 1 1 0; display: flex; flex-direction: column; gap: 16px; height: 420px;">
      <div class="keywords-metrics__card flex-col align-center justify-center h-100 w-100">
        <div class="keywords-metrics__value">12,450</div>
        <div class="keywords-metrics__label">Total Keywords</div>
      </div>
      <div class="keywords-metrics__card flex-col align-center justify-center h-100 w-100">
        <div class="keywords-metrics__value">1,200</div>
        <div class="keywords-metrics__label">Orphaned</div>
      </div>
      <div class="keywords-metrics__card flex-col align-center justify-center h-100 w-100">
        <div class="keywords-metrics__value">87%</div>
        <div class="keywords-metrics__label">Clustered</div>
      </div>
      <div class="keywords-metrics__card flex-col align-center justify-center h-100 w-100">
        <div class="keywords-metrics__value">450</div>
        <div class="keywords-metrics__label">Avg Volume</div>
      </div>
    </div>
    <div class="column-box-height" style="flex: 1 1 0; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 420px;">
      <div class="analytics-graph-card w-100 h-100 flex-col justify-center align-center">
        <span class="analytics-graph-title mb-18">Keyword Volume Trend</span>
        <div class="w-90 flex-col gap-18">
          <div class="flex align-center gap-12">
            <span class="w-110 fs-98 color-blue">Branded</span>
            <div class="flex-1 bg-blue rounded-8 h-16 pos-rel">
              <div class="w-60p bg-blue h-100 rounded-8"></div>
            </div>
            <span class="w-40 text-right color-blue font-600">60%</span>
          </div>
          <div class="flex align-center gap-12">
            <span class="w-110 fs-98 color-green">Informational</span>
            <div class="flex-1 bg-green rounded-8 h-16 pos-rel">
              <div class="w-80p bg-green h-100 rounded-8"></div>
            </div>
            <span class="w-40 text-right color-green font-600">80%</span>
          </div>
          <div class="flex align-center gap-12">
            <span class="w-110 fs-98 color-orange">Commercial</span>
            <div class="flex-1 bg-orange rounded-8 h-16 pos-rel">
              <div class="w-40p bg-orange h-100 rounded-8"></div>
            </div>
            <span class="w-40 text-right color-orange font-600">40%</span>
          </div>
          <div class="flex align-center gap-12">
            <span class="w-110 fs-98 color-lime">Navigational</span>
            <div class="flex-1 bg-lime rounded-8 h-16 pos-rel">
              <div class="w-30p bg-lime h-100 rounded-8"></div>
            </div>
            <span class="w-40 text-right color-lime font-600">30%</span>
          </div>
          <div class="flex align-center gap-12">
            <span class="w-110 fs-98 color-pink">Transactional</span>
            <div class="flex-1 bg-pink rounded-8 h-16 pos-rel">
              <div class="w-20p bg-pink h-100 rounded-8"></div>
            </div>
            <span class="w-40 text-right color-pink font-600">20%</span>
          </div>
        </div>
      </div>
    </div>
    <div class="column-box-height" style="flex: 1 1 0; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 420px;">
      <div class="analytics-donut-card w-100 h-100 flex-col justify-center align-center">
        <span class="analytics-donut-title mb-18">Status Breakdown</span>
        <div class="analytics-donut-chart w-320 h-320 max-w-80p max-h-80p min-w-180 min-h-180 bg-conic rounded-50"></div>
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

  <div class="keywords-main-content" style="width: 100%;">
    <div class="keywords-table-wrap" style="width: 100%;">
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