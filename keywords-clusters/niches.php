<!-- NICHE MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<style>
.niches-main-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 24px;
}
.niche-selector.sticky {
  margin-bottom: 32px;
}
.niche-selector__active {
  display: flex;
  align-items: center;
  gap: 16px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(34,34,34,0.04);
  padding: 16px 24px;
}
.niche-selector__label {
  color: #888;
  font-size: 0.95rem;
  margin-right: 8px;
}
.dropdown.tom-select {
  width: 180px;
  height: 36px;
  padding: 0 32px 0 16px;
  border-radius: 8px;
  border: 1px solid #e0e0e0;
  background: #f7f7f7;
  font-size: 1rem;
  appearance: none;
  z-index: 1;
}
.niche-selector__badge {
  margin-left: 16px;
  color: #4DABF7;
  font-weight: 600;
}
.niche-actions.sticky-top-right {
  display: flex;
  gap: 16px;
  margin-bottom: 32px;
  justify-content: flex-end;
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
  margin-bottom: 32px;
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
.ts-wrapper input[type=range] {
  width: 100%;
  margin-top: 0;
  vertical-align: middle;
}
.niche-metrics {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
  margin-bottom: 32px;
}
.niche-metrics__card {
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
.niche-breakdown-panels {
  display: flex;
  gap: 32px;
  margin-top: 32px;
}
.niche-opportunity-panel, .niche-cluster-status-panel {
  flex: 1 1 0;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(34,34,34,0.04);
  padding: 24px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.niche-panel__title {
  font-size: 1.1rem;
  font-weight: 600;
  margin-bottom: 16px;
}
.niche-chips {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}
.niche-progress {
  margin-top: 16px;
}
.niche-progress__bar {
  display: flex;
  align-items: center;
  margin-bottom: 12px;
}
.niche-progress__label {
  min-width: 90px;
  font-weight: 500;
}
.niche-progress__track {
  flex: 1;
  height: 10px;
  background: #e0e0e0;
  border-radius: 5px;
  margin: 0 12px;
  overflow: hidden;
}
.niche-progress__fill {
  height: 100%;
  border-radius: 5px;
}
.niche-progress__finalized .niche-progress__fill { background: #27ae60; }
.niche-progress__in-progress .niche-progress__fill { background: #e67e22; }
.niche-progress__new .niche-progress__fill { background: #2980ef; }
.niche-progress__percent {
  min-width: 40px;
  text-align: right;
  font-weight: 500;
}
</style>

<div class="niches-main-container">
  <nav class="niche-selector sticky">
    <div class="niche-selector__active">
      <label for="active-niche" class="niche-selector__label">Active Niche</label>
      <select id="active-niche" class="dropdown tom-select">
        <option value="" selected hidden></option>
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
        <option>Active</option>
        <option>Archived</option>
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
  </div>

  <section class="niche-metrics">
    <div class="niche-metrics__card">
      <div class="niche-metrics__value">12,450</div>
      <div class="niche-metrics__label">Total Keywords</div>
    </div>
    <div class="niche-metrics__card">
      <div class="niche-metrics__value">340</div>
      <div class="niche-metrics__label">Total Clusters</div>
    </div>
    <div class="niche-metrics__card">
      <div class="niche-metrics__value">87%</div>
      <div class="niche-metrics__label">% Clustered</div>
    </div>
    <div class="niche-metrics__card">
      <div class="niche-metrics__value">1,200</div>
      <div class="niche-metrics__label">Orphaned Keywords (13%)</div>
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