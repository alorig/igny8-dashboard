<!-- CLUSTERS MANAGEMENT PAGE for Igny8 Admin Dashboard -->

<!-- 1️⃣ Horizontal Filter Bar (Top) -->
<section class="igny8-filter-bar">
  <div class="ts-wrapper">
    <span class="ts-label">Industry</span>
    <select id="industry" class="dropdown tom-select">
      <option>Automotive</option>
      <option>Home</option>
      <option>Fitness</option>
    </select>
  </div>
  <div class="ts-wrapper">
    <span class="ts-label">Status</span>
    <select id="status" class="dropdown tom-select">
      <option>New</option>
      <option>In Progress</option>
      <option>Finalized</option>
      <option>Archived</option>
    </select>
  </div>
  <div class="ts-wrapper">
    <span class="ts-label">Cluster Type</span>
    <select id="cluster-type" class="dropdown tom-select">
      <option>Page</option>
      <option>Blog-Only</option>
      <option>Category</option>
      <option>Other</option>
    </select>
  </div>
  <div class="ts-wrapper">
    <span class="ts-label">Persona</span>
    <select id="persona" class="dropdown tom-select">
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
      <option>Informational</option>
      <option>Transactional</option>
      <option>Navigational</option>
      <option>Commercial</option>
    </select>
  </div>
  <div class="ts-wrapper">
    <span class="ts-label">Buyer Stage</span>
    <select id="buyer-stage" class="dropdown tom-select">
      <option>Awareness</option>
      <option>Consideration</option>
      <option>Decision</option>
      <option>Action</option>
    </select>
  </div>
  <div class="ts-wrapper">
    <span class="ts-label">Country</span>
    <select id="country" class="dropdown tom-select">
      <option>US</option>
      <option>UK</option>
      <option>EU</option>
    </select>
  </div>
  <div class="ts-wrapper">
    <span class="ts-label">Search</span>
    <input id="search" type="search" placeholder="Search clusters...">
  </div>
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