<!-- CLUSTERS MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<!-- 1️⃣ Page Title -->
<header class="clusters-header">
  <h1 class="page-title">Clusters Management</h1>
</header>

<!-- 2️⃣ Filters Panel (Sticky Top, 2 Columns) -->
<section class="clusters-filters-panel">
  <form class="clusters-filters__form">
    <div class="filters-col">
      <div class="filter-row">
        <label for="industry">Industry</label>
        <select id="industry" class="clusters-filters__dropdown tom-select small-select">
          <option>Automotive</option>
          <option>Home</option>
          <option>Fitness</option>
        </select>
      </div>
      <div class="filter-row">
        <label for="status">Status</label>
        <select id="status" class="clusters-filters__dropdown tom-select small-select">
          <option>New</option>
          <option>In Progress</option>
          <option>Finalized</option>
          <option>Archived</option>
        </select>
      </div>
      <div class="filter-row">
        <label for="cluster-type">Cluster Type</label>
        <select id="cluster-type" class="clusters-filters__dropdown tom-select small-select">
          <option>Page</option>
          <option>Blog-Only</option>
          <option>Category</option>
          <option>Other</option>
        </select>
      </div>
      <div class="filter-row">
        <label for="persona">Persona</label>
        <select id="persona" class="clusters-filters__dropdown tom-select small-select">
          <option>Marketer</option>
          <option>Engineer</option>
        </select>
      </div>
    </div>
    <div class="filters-col">
      <div class="filter-row">
        <label for="volume">Volume</label>
        <input id="volume" type="range" min="0" max="100000" class="clusters-filters__slider" />
      </div>
      <div class="filter-row">
        <label for="intent">Intent</label>
        <select id="intent" class="clusters-filters__dropdown tom-select small-select">
          <option>Informational</option>
          <option>Transactional</option>
          <option>Navigational</option>
          <option>Commercial</option>
        </select>
      </div>
      <div class="filter-row">
        <label for="buyer-stage">Buyer Stage</label>
        <select id="buyer-stage" class="clusters-filters__dropdown tom-select small-select">
          <option>Awareness</option>
          <option>Consideration</option>
          <option>Decision</option>
          <option>Action</option>
        </select>
      </div>
      <div class="filter-row">
        <label for="country">Country</label>
        <select id="country" class="clusters-filters__dropdown tom-select small-select">
          <option>US</option>
          <option>UK</option>
          <option>EU</option>
        </select>
      </div>
      <div class="filter-row">
        <label for="search">Search</label>
        <input id="search" type="search" class="clusters-filters__search" placeholder="Search clusters..." />
      </div>
    </div>
  </form>
</section>

<!-- 3️⃣ Metrics Summary (Inline Cards) -->
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

<!-- 4️⃣ Action Buttons (Right-Aligned) -->
<div class="clusters-actions-row">
  <button class="btn btn-primary clusters-actions__add">Add New Cluster</button>
  <button class="btn btn-black clusters-actions__import">Import Clusters</button>
  <button class="btn btn-outline clusters-actions__export">Export Clusters</button>
</div>

<!-- 5️⃣ Bulk Actions Row (Above Table) -->
<div class="clusters-bulk-actions-row">
  <button class="btn btn-primary">Assign Root Keyword</button>
  <button class="btn btn-secondary">Change Status</button>
  <button class="btn btn-secondary">Archive</button>
  <button class="btn btn-outline">Export Selected</button>
</div>

<!-- 6️⃣ Main Clusters Table -->
<main class="clusters-table-wrap">
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
      <!-- Example Row 1 -->
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
      <!-- Example Row 2 -->
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
      <!-- Example Row 3 -->
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
</main> 