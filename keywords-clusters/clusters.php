<!-- CLUSTERS MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<div class="page-main-container">
  <section class="igny8-filter-bar">
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
        <option>In Progress</option>
        <option>Finalized</option>
        <option>Archived</option>
      </select>
    </div>
    <div class="ts-wrapper">
      <span class="ts-label">Cluster Type</span>
      <select id="cluster-type" class="dropdown tom-select">
        <option value="" selected hidden></option>
        <option>Page</option>
        <option>Blog-Only</option>
        <option>Category</option>
        <option>Other</option>
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
      <span class="ts-label">Volume</span>
      <input id="volume" type="range" min="0" max="100000">
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
      <span class="ts-label">Country</span>
      <select id="country" class="dropdown tom-select">
        <option value="" selected hidden></option>
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
          <!-- Example rows here -->
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