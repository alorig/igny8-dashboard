<?php
/*
Template Name: Igny8 Theme Elements
*/
if (!current_user_can('administrator')) {
  wp_die('You do not have permission to view this page.');
}
get_header();
get_sidebar();
?>
<div class="main-content">
  <div class="igny8-section">
    <div class='igny8-page-content'>
      <h1>Igny8 Theme Elements</h1>
      <section>
        <h2>Typography & Fonts</h2>
        <div class="typography-demo">
          <h1>Heading 1 <span class="chip chip-blue">.h1</span></h1>
          <h2>Heading 2 <span class="chip chip-blue">.h2</span></h2>
          <h3>Heading 3 <span class="chip chip-blue">.h3</span></h3>
          <p>Paragraph text <span class="chip chip-blue">p</span></p>
          <span class="text-small">Small text <span class="chip chip-blue">.text-small</span></span><br>
          <span class="text-large">Large text <span class="chip chip-blue">.text-large</span></span><br>
          <span class="text-bold">Bold text <span class="chip chip-blue">.text-bold</span></span>
        </div>
      </section>
      <section>
        <h2>Global Layout Classes</h2>
        <div class="mb-10">
          <div class="grid grid-4 mb-10">
            <div class="card">.grid .grid-4 (1)</div>
            <div class="card">.grid .grid-4 (2)</div>
            <div class="card">.grid .grid-4 (3)</div>
            <div class="card">.grid .grid-4 (4)</div>
          </div>
          <div class="flex gap-24 mb-10" style="background:#f7f7f7; padding:12px;">
            <div class="card">.flex .gap-24 (A)</div>
            <div class="card">.flex .gap-24 (B)</div>
            <div class="card">.flex .gap-24 (C)</div>
          </div>
          <div class="flex justify-between align-center mb-10" style="background:#f7f7f7; padding:12px;">
            <div class="card">Left (.flex .justify-between .align-center)</div>
            <div class="card">Right</div>
          </div>
        </div>
        <span class="text-small">Above: .grid .grid-4, .flex .gap-24, .flex .justify-between .align-center</span>
      </section>
      <section>
        <h2>Page Container</h2>
        <div class="page-main-container mb-10" style="background:#f7f7f7; border:1px dashed #bfc9d1;">
          <div class="text-small">.page-main-container<br>Use for all main page wrappers. <br>max-width: 100%; margin: 0 auto; padding: 10px 3%;</div>
        </div>
      </section>
      <section>
        <h2>Spacing & Utility Classes (Extended)</h2>
        <div class="flex gap-32 mb-10">
          <div class="card mb-32 p-24 rounded-12 shadow">.mb-32 .p-24 .rounded-12 .shadow</div>
          <div class="card p-10">.p-10</div>
          <div class="card m-0">.m-0</div>
        </div>
      </section>
      <section>
        <h2>Filter Bar & Dropdowns</h2>
        <div class="igny8-filter-bar mb-10" style="max-width:600px;">
          <div class="ts-wrapper single" style="min-width:140px;">
            <select class="dropdown tom-select" placeholder="Industry">
              <option value="" disabled selected>Industry</option>
              <option>Finance</option>
              <option>Healthcare</option>
              <option>Retail</option>
            </select>
          </div>
          <div class="ts-wrapper single" style="min-width:140px;">
            <select class="dropdown tom-select" placeholder="Persona">
              <option value="" disabled selected>Persona</option>
              <option>Marketer</option>
              <option>Engineer</option>
              <option>Manager</option>
            </select>
          </div>
          <div class="search-wrapper">
            <input type="search" id="search" placeholder="Search...">
            <button id="search-btn">Search</button>
          </div>
        </div>
        <div class="mb-10">
          <span class="text-small">Above: .igny8-filter-bar, .ts-wrapper, .dropdown.tom-select, .search-wrapper, #search-btn</span>
        </div>
      </section>
      <section>
        <h2>Colors</h2>
        <div class="color-palette-demo">
          <div class="chip chip-blue">Primary Blue <span>.chip-blue</span></div>
          <div class="chip chip-green">Green <span>.chip-green</span></div>
          <div class="chip chip-pink">Accent Pink <span>.chip-pink</span></div>
          <div class="chip chip-gray">Gray <span>.chip-gray</span></div>
          <div class="chip" style="background:#e67e22;color:#fff;">Orange <span>custom</span></div>
        </div>
      </section>
      <section>
        <h2>Spacing & Utility Classes</h2>
        <div class="spacing-demo">
          <div class="card m-20 p-20">.m-20 .p-20 (margin 20px, padding 20px)</div>
          <div class="card mb-10 mt-10">.mb-10 .mt-10 (margin-bottom/top 10px)</div>
        </div>
      </section>
      <section>
        <h2>Cards & Boxes</h2>
        <div class="grid grid-2">
          <div class="card card-primary">.card .card-primary</div>
          <div class="card card-success">.card .card-success</div>
          <div class="card card-warning">.card .card-warning</div>
          <div class="card card-info">.card .card-info</div>
          <div class="card card-small">.card .card-small</div>
          <div class="card card-large">.card .card-large</div>
        </div>
      </section>
      <section>
        <h2>Buttons</h2>
        <div class="button-demo">
          <button class="btn btn-primary">.btn .btn-primary</button>
          <button class="btn btn-secondary">.btn .btn-secondary</button>
          <button class="btn btn-success">.btn .btn-success</button>
          <button class="btn btn-warning">.btn .btn-warning</button>
          <button class="btn btn-outline">.btn .btn-outline</button>
          <button class="btn btn-small btn-primary">.btn .btn-small .btn-primary</button>
          <button class="btn btn-large btn-primary">.btn .btn-large .btn-primary</button>
        </div>
      </section>
      <section>
        <h2>Pills & Badges</h2>
        <div class="pill-demo">
          <span class="badge badge-blue">.badge .badge-blue</span>
          <span class="badge badge-green">.badge .badge-green</span>
          <span class="badge badge-orange">.badge .badge-orange</span>
          <span class="badge badge-gray">.badge .badge-gray</span>
          <span class="badge badge-purple">.badge .badge-purple</span>
          <span class="badge badge-teal">.badge .badge-teal</span>
          <span class="chip chip-blue">.chip .chip-blue</span>
          <span class="chip chip-green">.chip .chip-green</span>
          <span class="chip chip-pink">.chip .chip-pink</span>
          <span class="chip chip-gray">.chip .chip-gray</span>
        </div>
      </section>
      <section>
        <h2>Tables</h2>
        <div class="table-demo">
          <table class="keywords-table">
            <thead>
              <tr><th>Header 1</th><th>Header 2</th><th>Header 3</th></tr>
            </thead>
            <tbody>
              <tr><td>Row 1 Col 1</td><td>Row 1 Col 2</td><td>Row 1 Col 3</td></tr>
              <tr><td>Row 2 Col 1</td><td>Row 2 Col 2</td><td>Row 2 Col 3</td></tr>
            </tbody>
          </table>
        </div>
      </section>
      <section>
        <h2>Metrics Cards (with Top Border)</h2>
        <div class="keywords-metrics-row">
          <div class="keywords-metrics__card" style="border-top: 4px solid #3498db;">
            <div class="keywords-metrics__value">12,450</div>
            <div class="keywords-metrics__label">Total Keywords</div>
          </div>
          <div class="keywords-metrics__card" style="border-top: 4px solid #27ae60;">
            <div class="keywords-metrics__value">340</div>
            <div class="keywords-metrics__label">Total Clusters</div>
          </div>
          <div class="keywords-metrics__card" style="border-top: 4px solid #2ecc71;">
            <div class="keywords-metrics__value">87%</div>
            <div class="keywords-metrics__label">Clustered %</div>
          </div>
          <div class="keywords-metrics__card" style="border-top: 4px solid #e67e22;">
            <div class="keywords-metrics__value">1,200 <span class="metric-sub">(13%)</span></div>
            <div class="keywords-metrics__label">Orphaned Keywords</div>
          </div>
        </div>
      </section>
      <section>
        <h2>Progress Bars & Graphical Objects</h2>
        <div class="reports-analytics-grid">
          <div class="analytics-card">
            <h4 class="analytics-title">Cluster Performance Overview</h4>
            <div class="progress-group">
              <div class="progress-label">Finalized</div>
              <div class="progress-bar progress-green"><div class="progress-fill" style="width:60%"></div></div>
              <div class="progress-percent">60%</div>
            </div>
            <div class="progress-group">
              <div class="progress-label">Pending</div>
              <div class="progress-bar progress-orange"><div class="progress-fill" style="width:30%"></div></div>
              <div class="progress-percent">30%</div>
            </div>
            <div class="progress-group">
              <div class="progress-label">New</div>
              <div class="progress-bar progress-blue"><div class="progress-fill" style="width:10%"></div></div>
              <div class="progress-percent">10%</div>
            </div>
            <div class="analytics-meta-row">
              <span>Avg Keywords / Cluster: <b>18.4</b></span>
              <span>Multi-Page Clusters: <b>17</b></span>
            </div>
          </div>
          <div class="analytics-card">
            <h4 class="analytics-title">Keyword Opportunity Snapshot</h4>
            <div class="progress-group">
              <div class="progress-label">Informational</div>
              <div class="progress-bar progress-blue"><div class="progress-fill" style="width:52%"></div></div>
              <div class="progress-percent">52%</div>
            </div>
            <div class="progress-group">
              <div class="progress-label">Commercial</div>
              <div class="progress-bar progress-orange"><div class="progress-fill" style="width:35%"></div></div>
              <div class="progress-percent">35%</div>
            </div>
            <div class="progress-group">
              <div class="progress-label">Transactional</div>
              <div class="progress-bar progress-pink"><div class="progress-fill" style="width:13%"></div></div>
              <div class="progress-percent">13%</div>
            </div>
            <div class="analytics-chips-row">
              <span class="chip chip-blue">Persona: Marketer</span>
              <span class="chip chip-blue">Intent: Informational</span>
              <span class="chip chip-green">Geo: US</span>
              <span class="chip chip-pink">Intent: Transactional</span>
              <span class="chip chip-gray">Persona: Engineer</span>
            </div>
            <div class="analytics-meta-row">
              <span>High-Volume Unclustered Keywords: <b>43</b></span>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<?php get_footer(); ?> 