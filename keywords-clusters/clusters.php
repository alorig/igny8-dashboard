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
    <div class="ts-wrapper" style="max-width: 180px;">
      <label for="volume" style="font-size: 0.95em; color: #888; margin-bottom: 2px;">Volume</label>
      <input id="volume" type="range" min="0" max="100000">
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

  <section class="cluster-analytics-overview" style="display: flex; gap: 32px; margin-bottom: 32px; width: 100%; align-items: stretch; flex-wrap: wrap;">
    <!-- Column 1: Cluster Composition -->
    <div class="analytics-card" style="flex: 1 1 300px; background: #fff; border-radius: 16px; box-shadow: 0 2px 12px rgba(34,34,34,0.06); padding: 28px 28px 22px 28px; display: flex; flex-direction: column; justify-content: flex-start; min-width: 260px;">
      <h4 style="font-size: 1.1rem; font-weight: 700; color: #3498db; margin-bottom: 18px;">Cluster Composition</h4>
      <div style="margin-bottom: 14px; display: flex; justify-content: space-between; align-items: center;">
        <span>Total Clusters</span>
        <span style="font-size: 2rem; font-weight: 700; color: #3498db;">134</span>
      </div>
      <div style="margin-bottom: 14px; display: flex; justify-content: space-between; align-items: center;">
        <span>Avg Keywords / Cluster</span>
        <span style="font-size: 1.5rem; font-weight: 600; color: #27ae60;">18</span>
      </div>
      <div style="margin-bottom: 14px; display: flex; justify-content: space-between; align-items: center;">
        <span>Orphaned Clusters</span>
        <span style="font-size: 1.5rem; font-weight: 600; color: #e67e22;">42</span>
      </div>
      <div style="display: flex; justify-content: space-between; align-items: center;">
        <span>Multi-Page Clusters</span>
        <span style="font-size: 1.5rem; font-weight: 600; color: #8e44ad;">17</span>
      </div>
    </div>
    <!-- Column 2: Dimension Usage -->
    <div class="analytics-card" style="flex: 1 1 300px; background: #fff; border-radius: 16px; box-shadow: 0 2px 12px rgba(34,34,34,0.06); padding: 28px 28px 22px 28px; display: flex; flex-direction: column; justify-content: flex-start; min-width: 260px;">
      <h4 style="font-size: 1.1rem; font-weight: 700; color: #27ae60; margin-bottom: 18px;">Dimension Usage</h4>
      <div style="margin-bottom: 14px;">
        <span style="font-weight: 500;">Top Dimensions:</span>
        <span style="margin-left: 8px; color: #3498db;">Product Type</span>,
        <span style="color: #e67e22;">Function</span>,
        <span style="color: #db3498;">Skin Concern</span>
      </div>
      <div style="margin-bottom: 14px;">
        <span style="font-weight: 500;">Underused:</span>
        <span style="margin-left: 8px; color: #8e44ad;">Persona</span>,
        <span style="color: #8e44ad;">Geography</span>
      </div>
      <div style="margin-bottom: 14px;">
        <span style="font-weight: 500;">Intent Spread:</span>
        <div style="margin-top: 8px;">
          <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 4px;">
            <span style="width: 90px; color: #3498db;">Informational</span>
            <div style="flex: 1; background: #eaf3fa; border-radius: 8px; height: 12px; position: relative;">
              <div style="width: 52%; background: #3498db; height: 100%; border-radius: 8px;"></div>
            </div>
            <span style="width: 36px; text-align: right; color: #3498db; font-weight: 600;">52%</span>
          </div>
          <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 4px;">
            <span style="width: 90px; color: #e67e22;">Commercial</span>
            <div style="flex: 1; background: #fff6ea; border-radius: 8px; height: 12px; position: relative;">
              <div style="width: 35%; background: #e67e22; height: 100%; border-radius: 8px;"></div>
            </div>
            <span style="width: 36px; text-align: right; color: #e67e22; font-weight: 600;">35%</span>
          </div>
          <div style="display: flex; align-items: center; gap: 8px;">
            <span style="width: 90px; color: #db3498;">Transactional</span>
            <div style="flex: 1; background: #fbeaf7; border-radius: 8px; height: 12px; position: relative;">
              <div style="width: 13%; background: #db3498; height: 100%; border-radius: 8px;"></div>
            </div>
            <span style="width: 36px; text-align: right; color: #db3498; font-weight: 600;">13%</span>
          </div>
        </div>
      </div>
      <div>
        <span style="font-weight: 500;">Persona/Geo Coverage:</span>
        <span style="margin-left: 8px; color: #27ae60;">Good</span>
      </div>
    </div>
    <!-- Column 3: Finalization Overview -->
    <div class="analytics-card" style="flex: 1 1 300px; background: #fff; border-radius: 16px; box-shadow: 0 2px 12px rgba(34,34,34,0.06); padding: 28px 28px 22px 28px; display: flex; flex-direction: column; justify-content: flex-start; min-width: 260px;">
      <h4 style="font-size: 1.1rem; font-weight: 700; color: #e67e22; margin-bottom: 18px;">Finalization Overview</h4>
      <div style="margin-bottom: 14px; display: flex; justify-content: space-between; align-items: center;">
        <span>Finalized</span>
        <span style="font-size: 1.5rem; font-weight: 600; color: #27ae60;">54%</span>
      </div>
      <div style="margin-bottom: 14px; display: flex; justify-content: space-between; align-items: center;">
        <span>Orphaned</span>
        <span style="font-size: 1.5rem; font-weight: 600; color: #e67e22;">31%</span>
      </div>
      <div style="margin-bottom: 14px; display: flex; justify-content: space-between; align-items: center;">
        <span>Finalized Last 7 Days</span>
        <span style="font-size: 1.5rem; font-weight: 600; color: #3498db;">12</span>
      </div>
      <div style="display: flex; justify-content: space-between; align-items: center;">
        <span>Avg Freshness Score</span>
        <span style="font-size: 1.5rem; font-weight: 600; color: #db3498;">68%</span>
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
            <td><span class="badge badge-purple">Blog-Only</span></td>
            <td><span class="badge badge-green">Commercial</span></td>
            <td><span class="badge badge-gray">Engineer</span></td>
            <td><span class="badge badge-orange">In Progress</span></td>
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