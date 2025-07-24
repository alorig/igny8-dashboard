<!-- NICHE MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<div class="page-main-container">
  <nav class="niche-selector sticky">
    <div class="niche-selector__active">
      <select id="active-niche" class="dropdown tom-select">
        <option value="" disabled selected hidden>Active Niche</option>
        <option>Automotive Interior</option>
        <option>Home Automation</option>
        <option>Fitness Equipment</option>
      </select>
      <span class="niche-selector__badge">Clusters: 340 | Keywords: 12,450</span>
    </div>
  </nav>

  <div class="niche-actions sticky-top-right">
    <button class="btn btn-primary niche-actions__add">Add New Niche</button>
    <button class="btn btn-black niche-actions__import">Import Keywords</button>
    <button class="btn btn-outline niche-actions__export">Export Reports</button>
  </div>

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
        <option>Active</option>
        <option>Archived</option>
      </select>
    </div>
    <div class="ts-wrapper" style="max-width: 180px;">
      <label for="volume" style="font-size: 0.95em; color: #888; margin-bottom: 2px;">Volume</label>
      <input id="volume" type="range" min="0" max="50000">
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

  <section class="niche-metrics">
    <div class="metric-card metric-blue">
      <div class="metric-value">12,450</div>
      <div class="metric-label">Total Keywords</div>
    </div>
    <div class="metric-card metric-green">
      <div class="metric-value">340</div>
      <div class="metric-label">Total Clusters</div>
    </div>
    <div class="metric-card metric-lime">
      <div class="metric-value">87%</div>
      <div class="metric-label">% Clustered</div>
    </div>
    <div class="metric-card metric-orange">
      <div class="metric-value">1,200</div>
      <div class="metric-label">Orphaned Keywords (13%)</div>
    </div>
  </section>

  <div class="niche-breakdown-panels">
    <section class="niche-opportunity-panel">
      <h2 class="niche-panel__title">Top Opportunity Segments</h2>
      <div class="niche-chips">
        <span class="chip badge-blue">Persona: Marketer</span>
        <span class="chip badge-green">Intent: Informational</span>
        <span class="chip badge-accent">Geo: US</span>
        <span class="chip badge-gray">Persona: Engineer</span>
        <span class="chip badge-warning">Intent: Transactional</span>
        <span class="chip badge-info">Geo: EU</span>
      </div>
    </section>
    <section class="niche-cluster-status-panel">
      <h2 class="niche-panel__title">Cluster Status</h2>
      <div class="niche-progress">
        <div class="niche-progress__bar niche-progress__finalized">
          <span class="niche-progress__label">Finalized</span>
          <div class="niche-progress__track"><div class="niche-progress__fill" style="width: 60%"></div></div>
          <span class="niche-progress__percent">60%</span>
        </div>
        <div class="niche-progress__bar niche-progress__in-progress">
          <span class="niche-progress__label">In Progress</span>
          <div class="niche-progress__track"><div class="niche-progress__fill" style="width: 30%"></div></div>
          <span class="niche-progress__percent">30%</span>
        </div>
        <div class="niche-progress__bar niche-progress__new">
          <span class="niche-progress__label">New</span>
          <div class="niche-progress__track"><div class="niche-progress__fill" style="width: 10%"></div></div>
          <span class="niche-progress__percent">10%</span>
        </div>
      </div>
    </section>
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
      if(wrapper.querySelector('.ts-label')) wrapper.querySelector('.ts-label').style.opacity = 0;
    } else {
      select.classList.remove('has-value');
      if(wrapper.querySelector('.ts-label')) wrapper.querySelector('.ts-label').style.opacity = 1;
    }
  });
  // Initial state
  if (!select.value) {
    select.classList.remove('has-value');
    if(wrapper.querySelector('.ts-label')) wrapper.querySelector('.ts-label').style.opacity = 1;
  } else {
    select.classList.add('has-value');
    if(wrapper.querySelector('.ts-label')) wrapper.querySelector('.ts-label').style.opacity = 0;
  }
});
</script> 