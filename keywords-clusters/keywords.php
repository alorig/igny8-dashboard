<!-- KEYWORDS MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<!-- 1️⃣ Page Title -->
<header class="keywords-header">
  <h1 class="page-title">Keywords Management</h1>
</header>

<!-- 2️⃣ Sticky Top Filters Bar -->
<nav class="keywords-filters sticky">
  <form class="keywords-filters__form">
    <label>Industry
      <select class="keywords-filters__dropdown tom-select small-select">
        <option>Automotive</option>
        <option>Home</option>
        <option>Fitness</option>
      </select>
    </label>
    <label>Status
      <select class="keywords-filters__dropdown tom-select small-select">
        <option>New</option>
        <option>Clustered</option>
        <option>In-Use</option>
        <option>Orphaned</option>
        <option>Archived</option>
      </select>
    </label>
    <label>Volume
      <input type="range" min="0" max="50000" class="keywords-filters__slider" />
    </label>
    <label>Intent
      <select class="keywords-filters__dropdown tom-select small-select">
        <option>Informational</option>
        <option>Transactional</option>
        <option>Navigational</option>
        <option>Commercial</option>
      </select>
    </label>
    <label>Persona
      <select class="keywords-filters__dropdown tom-select small-select">
        <option>Marketer</option>
        <option>Engineer</option>
      </select>
    </label>
    <label>Buyer Stage
      <select class="keywords-filters__dropdown tom-select small-select">
        <option>Awareness</option>
        <option>Consideration</option>
        <option>Decision</option>
        <option>Action</option>
      </select>
    </label>
    <label>Country
      <select class="keywords-filters__dropdown tom-select small-select">
        <option>US</option>
        <option>UK</option>
        <option>EU</option>
      </select>
    </label>
    <!-- Search Bar -->
    <input type="search" class="keywords-filters__search" placeholder="Search keywords..." />
  </form>
</nav>

<!-- 1️⃣ Action Buttons Row (Right-Aligned) -->
<div class="keywords-actions sticky-top-right">
  <button class="btn btn-primary keywords-actions__add">Add New Keyword</button>
  <button class="btn btn-secondary keywords-actions__import">Import Keywords</button>
  <button class="btn btn-tertiary keywords-actions__export">Export Keywords</button>
</div>

<!-- 3️⃣ Metrics Summary (Inline Cards) -->
<section class="keywords-metrics">
  <div class="keywords-metrics__card">
    <div class="keywords-metrics__value">12,450</div>
    <div class="keywords-metrics__label">Total Keywords</div>
  </div>
  <div class="keywords-metrics__card">
    <div class="keywords-metrics__value">1,200</div>
    <div class="keywords-metrics__label">Orphaned Keywords</div>
  </div>
  <div class="keywords-metrics__card">
    <div class="keywords-metrics__value">87%</div>
    <div class="keywords-metrics__label">Clustered %</div>
  </div>
  <div class="keywords-metrics__card">
    <div class="keywords-metrics__value">450</div>
    <div class="keywords-metrics__label">Avg Search Volume</div>
  </div>
</section>

<!-- 5️⃣ Bulk Actions Bar (Above Table) -->
<div class="keywords-bulk-actions">
  <button class="btn btn-secondary">Assign to Cluster</button>
  <button class="btn btn-secondary">Change Status</button>
  <button class="btn btn-secondary">Archive</button>
  <button class="btn btn-tertiary">Export Selected</button>
</div>

<!-- 4️⃣ Main Table Structure (Keywords Data Table) -->
<main class="keywords-table-wrap">
  <table class="keywords-table modern-table">
    <thead>
      <tr>
        <th><input type="checkbox" class="keywords-table__select-all" /></th>
        <th>Keyword</th>
        <th>Volume</th>
        <th>CPC</th>
        <th>CPS</th>
        <th>KD</th>
        <th>Intent</th>
        <th>Persona</th>
        <th>Status</th>
        <th>Cluster Assoc.</th>
        <th>Country</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Example Row 1 -->
      <tr>
        <td><input type="checkbox" /></td>
        <td>best car seat covers</td>
        <td>2,400</td>
        <td>$1.20</td>
        <td>0.45</td>
        <td>32</td>
        <td><span class="chip info">Informational</span></td>
        <td><span class="chip">Marketer</span></td>
        <td><span class="chip status-new">New</span></td>
        <td>Automotive Interior</td>
        <td>US</td>
        <td class="keywords-table__actions">
          <button class="icon-btn" title="Edit"><span class="dashicons dashicons-edit light-pencil"></span></button>
        </td>
      </tr>
      <!-- Example Row 2 -->
      <tr>
        <td><input type="checkbox" /></td>
        <td>leather steering wheel cover</td>
        <td>1,800</td>
        <td>$0.95</td>
        <td>0.38</td>
        <td>28</td>
        <td><span class="chip info">Commercial</span></td>
        <td><span class="chip">Engineer</span></td>
        <td><span class="chip status-clustered">Clustered</span></td>
        <td>Luxury Interiors</td>
        <td>UK</td>
        <td class="keywords-table__actions">
          <button class="icon-btn" title="Edit"><span class="dashicons dashicons-edit light-pencil"></span></button>
        </td>
      </tr>
      <!-- Example Row 3 -->
      <tr>
        <td><input type="checkbox" /></td>
        <td>universal car mats</td>
        <td>3,100</td>
        <td>$0.80</td>
        <td>0.29</td>
        <td>22</td>
        <td><span class="chip info">Navigational</span></td>
        <td><span class="chip">Marketer</span></td>
        <td><span class="chip status-orphaned">Orphaned</span></td>
        <td>-</td>
        <td>EU</td>
        <td class="keywords-table__actions">
          <button class="icon-btn" title="Edit"><span class="dashicons dashicons-edit light-pencil"></span></button>
        </td>
      </tr>
    </tbody>
  </table>
  <!-- Pagination Controls -->
  <div class="keywords-pagination">
    <button class="btn btn-tertiary">&laquo; Prev</button>
    <span class="pagination-info">Page 1 of 24</span>
    <button class="btn btn-tertiary">Next &raquo;</button>
  </div>
</main>

<!-- UX Comments:
- Filters update results live.
- Bulk actions apply to selected rows, with confirmation modals for Archive/Delete.
- Table supports sorting, search, and pagination.
- Status chips use color: New (Blue), Clustered (Green), Orphaned (Red), Archived (Gray).
- Niche context persists visually.
- All dropdowns use Tom Select.
- Table rows are selectable for bulk actions.
- Actions are icon buttons for Edit only (light pencil).
--> 