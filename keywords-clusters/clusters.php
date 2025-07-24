<!-- CLUSTERS MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<div class="page-main-container">
  <section class="igny8-filter-bar">
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
        <option>In Progress</option>
        <option>Finalized</option>
        <option>Archived</option>
      </select>
    </div>
    <div class="ts-wrapper">
      <select id="cluster-type" class="dropdown tom-select">
        <option value="" disabled selected hidden>Cluster Type</option>
        <option>Page</option>
        <option>Blog-Only</option>
        <option>Category</option>
        <option>Other</option>
      </select>
    </div>
    <div class="ts-wrapper">
      <select id="persona" class="dropdown tom-select">
        <option value="" disabled selected hidden>Persona</option>
        <option>Marketer</option>
        <option>Engineer</option>
      </select>
    </div>
    <div class="ts-wrapper max-w-180">
      <label for="volume" class="text-small text-muted mb-10">Volume</label>
      <input id="volume" type="range" min="0" max="50000">
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
      <select id="buyer-stage" class="dropdown tom-select">
        <option value="" disabled selected hidden>Buyer Stage</option>
        <option>Awareness</option>
        <option>Consideration</option>
        <option>Decision</option>
        <option>Action</option>
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
    <div class="ts-wrapper search-wrapper">
      <input id="search" type="search" placeholder="Search clusters...">
      <button id="search-btn" type="button">Search</button>
    </div>
  </section>

  <section class="cluster-analytics-overview flex gap-32 mb-32 w-100 align-stretch flex-wrap">
    <!-- Column 1: Cluster Composition -->
    <div class="analytics-card flex-1 min-w-260 bg-white rounded-16 shadow p-28 flex-col justify-start">
      <h4 class="fs-11 font-700 color-blue mb-18">Cluster Composition</h4>
      <div class="mb-14 flex justify-between items-center">
        <span>Total Clusters</span>
        <span class="fs-200 font-700 color-blue">134</span>
      </div>
      <div class="mb-14 flex justify-between items-center">
        <span>Avg Keywords / Cluster</span>
        <span class="fs-150 font-600 color-green">18</span>
      </div>
      <div class="mb-14 flex justify-between items-center">
        <span>Orphaned Clusters</span>
        <span class="fs-150 font-600 color-orange">42</span>
      </div>
      <div class="flex justify-between items-center">
        <span>Multi-Page Clusters</span>
        <span class="fs-150 font-600 color-lime">17</span>
      </div>
    </div>
    <!-- Column 2: Dimension Usage -->
    <div class="analytics-card flex-1 min-w-260 bg-white rounded-16 shadow p-28 flex-col justify-start">
      <h4 class="fs-11 font-700 color-green mb-18">Dimension Usage</h4>
      <div class="mb-14">
        <span class="font-500">Top Dimensions:</span>
        <span class="ml-8 color-blue">Product Type</span>,
        <span class="color-orange">Function</span>,
        <span class="color-pink">Skin Concern</span>
      </div>
      <div class="mb-14">
        <span class="font-500">Underused:</span>
        <span class="ml-8 color-lime">Persona</span>,
        <span class="color-lime">Geography</span>
      </div>
      <div class="mb-14">
        <span class="font-500">Intent Spread:</span>
        <div class="mt-8">
          <div class="flex items-center gap-8 mb-4">
            <span class="w-90 color-blue">Informational</span>
            <div class="flex-1 bg-blue rounded-8 h-12 pos-rel">
              <div class="w-52p bg-blue h-100 rounded-8"></div>
            </div>
            <span class="w-36 text-right color-blue font-600">52%</span>
          </div>
          <div class="flex items-center gap-8 mb-4">
            <span class="w-90 color-orange">Commercial</span>
            <div class="flex-1 bg-orange rounded-8 h-12 pos-rel">
              <div class="w-35p bg-orange h-100 rounded-8"></div>
            </div>
            <span class="w-36 text-right color-orange font-600">35%</span>
          </div>
          <div class="flex items-center gap-8">
            <span class="w-90 color-pink">Transactional</span>
            <div class="flex-1 bg-pink rounded-8 h-12 pos-rel">
              <div class="w-13p bg-pink h-100 rounded-8"></div>
            </div>
            <span class="w-36 text-right color-pink font-600">13%</span>
          </div>
        </div>
      </div>
      <div>
        <span class="font-500">Persona/Geo Coverage:</span>
        <span class="ml-8 color-green">Good</span>
      </div>
    </div>
    <!-- Column 3: Finalization Overview -->
    <div class="analytics-card flex-1 min-w-260 bg-white rounded-16 shadow p-28 flex-col justify-start">
      <h4 class="fs-11 font-700 color-orange mb-18">Finalization Overview</h4>
      <div class="mb-14 flex justify-between items-center">
        <span>Finalized</span>
        <span class="fs-150 font-600 color-green">54%</span>
      </div>
      <div class="mb-14 flex justify-between items-center">
        <span>Orphaned</span>
        <span class="fs-150 font-600 color-orange">31%</span>
      </div>
      <div class="mb-14 flex justify-between items-center">
        <span>Finalized Last 7 Days</span>
        <span class="fs-150 font-600 color-blue">12</span>
      </div>
      <div class="flex justify-between items-center">
        <span>Avg Freshness Score</span>
        <span class="fs-150 font-600 color-pink">68%</span>
      </div>
    </div>
  </section>

  <section class="clusters-metrics-row">
    <div class="clusters-metrics__card">
      <div class="clusters-metrics__value">340</div>
      <div class="clusters-metrics__label">Total Clusters</div>
    </div>
    <div class="clusters-metrics__card">
      <div class="clusters-metrics__value">28</div>
      <div class="clusters-metrics__label">Orphaned Clusters</div>
    </div>
    <div class="clusters-metrics__card">
      <div class="clusters-metrics__value">70%</div>
      <div class="clusters-metrics__label">Finalized</div>
    </div>
    <div class="clusters-metrics__card">
      <div class="clusters-metrics__value">32,000</div>
      <div class="clusters-metrics__label">Avg Search Volume</div>
    </div>
  </section>

  <div class="clusters-actions-row">
    <div>
      <button class="btn btn-primary clusters-actions__add">Add New Cluster</button>
      <button class="btn btn-black clusters-actions__import">Import Clusters</button>
    </div>
    <div>
      <button class="btn btn-outline clusters-actions__export">Export Clusters</button>
    </div>
  </div>

  <div class="clusters-main-content">
    <div class="clusters-table-wrap">
      <table class="clusters-table modern-table">
        <thead>
          <tr>
            <th><input type="checkbox" class="clusters-table__select-all" /></th>
            <th>Cluster Name</th>
            <th>Root Keyword</th>
            <th class="right">Volume</th>
            <th class="right">Difficulty</th>
            <th>Type</th>
            <th>Intent</th>
            <th>Persona</th>
            <th>Status</th>
            <th>Keywords</th>
            <th>Country</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox" /></td>
            <td>Automotive Interior Upgrades</td>
            <td>car seat covers</td>
            <td class="right">12,000</td>
            <td class="right">38</td>
            <td><span class="badge badge-blue">Page</span></td>
            <td><span class="badge badge-green">Informational</span></td>
            <td><span class="badge badge-gray">Marketer</span></td>
            <td><span class="badge badge-blue">New</span></td>
            <td>45</td>
            <td>US</td>
            <td class="clusters-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>Luxury Interiors</td>
            <td>leather steering wheel cover</td>
            <td class="right">8,500</td>
            <td class="right">41</td>
            <td><span class="badge badge-purple">Blogs</span></td>
            <td><span class="badge badge-green">Commercial</span></td>
            <td><span class="badge badge-gray">Engineer</span></td>
            <td><span class="badge badge-orange">Pending</span></td>
            <td>32</td>
            <td>UK</td>
            <td class="clusters-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>Universal Car Mats</td>
            <td>universal car mats</td>
            <td class="right">13,500</td>
            <td class="right">29</td>
            <td><span class="badge badge-teal">Category</span></td>
            <td><span class="badge badge-green">Navigational</span></td>
            <td><span class="badge badge-gray">Marketer</span></td>
            <td><span class="badge badge-green">Finalized</span></td>
            <td>28</td>
            <td>EU</td>
            <td class="clusters-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <!-- Additional example rows -->
          <tr>
            <td><input type="checkbox" /></td>
            <td>Outdoor Living</td>
            <td>patio furniture</td>
            <td class="right">7,200</td>
            <td class="right">35</td>
            <td><span class="badge badge-blue">Page</span></td>
            <td><span class="badge badge-green">Informational</span></td>
            <td><span class="badge badge-gray">Marketer</span></td>
            <td><span class="badge badge-blue">New</span></td>
            <td>38</td>
            <td>US</td>
            <td class="clusters-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>Smart Home Devices</td>
            <td>smart thermostat</td>
            <td class="right">9,800</td>
            <td class="right">44</td>
            <td><span class="badge badge-purple">Blogs</span></td>
            <td><span class="badge badge-green">Commercial</span></td>
            <td><span class="badge badge-gray">Engineer</span></td>
            <td><span class="badge badge-orange">Pending</span></td>
            <td>27</td>
            <td>UK</td>
            <td class="clusters-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>Fitness Accessories</td>
            <td>yoga mat</td>
            <td class="right">5,600</td>
            <td class="right">22</td>
            <td><span class="badge badge-teal">Category</span></td>
            <td><span class="badge badge-green">Navigational</span></td>
            <td><span class="badge badge-gray">Marketer</span></td>
            <td><span class="badge badge-green">Finalized</span></td>
            <td>19</td>
            <td>EU</td>
            <td class="clusters-table__actions">
              <button class="btn btn-square btn-edit">Edit</button>
              <button class="btn btn-square btn-archive">Archive</button>
            </td>
          </tr>
        </tbody>
      </table>
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
      // wrapper.querySelector('.ts-label').style.opacity = 0; // This line is removed
    } else {
      select.classList.remove('has-value');
      // wrapper.querySelector('.ts-label').style.opacity = 1; // This line is removed
    }
  });
  // Initial state
  if (!select.value) {
    select.classList.remove('has-value');
    // wrapper.querySelector('.ts-label').style.opacity = 1; // This line is removed
  } else {
    select.classList.add('has-value');
    // wrapper.querySelector('.ts-label').style.opacity = 0; // This line is removed
  }
});
</script> 