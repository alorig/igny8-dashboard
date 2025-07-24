<?php
// Content Scheduling Page (Igny8 Admin Theme)
// Static markup only, uses theme classes from style.css
?>
    <div class="page-main-container">
      <!-- 1. FILTER BAR -->
      <div class="card card-gray mb-10">
        <div class="keywords-filters-panel">
          <div class="filter-row" style="display: flex; gap: 18px; align-items: flex-end;">
            <div class="mr-10">
              <label class="text-small" for="filter-cluster">Cluster</label>
              <select id="filter-cluster" class="small-select tom-select">
                <option value="">All Clusters</option>
                <option>Cluster A</option>
                <option>Cluster B</option>
              </select>
            </div>
            <div class="mr-10">
              <label class="text-small" for="filter-type">Content Type</label>
              <select id="filter-type" class="small-select tom-select">
                <option value="">All Types</option>
                <option>Blog</option>
                <option>Product</option>
                <option>Rewrite</option>
              </select>
            </div>
            <div class="mr-10">
              <label class="text-small" for="filter-status">Status</label>
              <select id="filter-status" class="small-select tom-select">
                <option value="">All Statuses</option>
                <option>Scheduled</option>
                <option>Draft</option>
                <option>Approved</option>
                <option>Failed</option>
              </select>
            </div>
            <div class="mr-10">
              <label class="text-small" for="filter-date-from">Date Range</label>
              <div style="display: flex; gap: 6px; align-items: center;">
                <input type="date" id="filter-date-from" class="small-select" />
                <span class="text-small">–</span>
                <input type="date" id="filter-date-to" class="small-select" />
              </div>
            </div>
            <div class="mr-10">
              <label class="text-small" for="filter-user">Scheduled By</label>
              <select id="filter-user" class="small-select tom-select">
                <option value="">All Users</option>
                <option>Admin</option>
                <option>Editor</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!-- 2. METRICS CARDS ROW -->
      <div class="metrics-row mb-10" style="display: flex; gap: 24px;">
        <div class="card card-info">
          <div class="text-small text-bold mb-10">Total Scheduled</div>
          <div class="h3">128</div>
        </div>
        <div class="card card-warning">
          <div class="text-small text-bold mb-10">Drafts Pending</div>
          <div class="h3">14 <span class="badge badge-warning">Pending</span></div>
        </div>
        <div class="card card-success">
          <div class="text-small text-bold mb-10">Approved / Final</div>
          <div class="h3">97 <span class="badge badge-success">Approved</span></div>
        </div>
        <div class="card card-danger">
          <div class="text-small text-bold mb-10">Failed / Skipped</div>
          <div class="h3">3 <span class="badge badge-danger">Failed</span></div>
        </div>
      </div>
      <!-- 3. CONTENT QUEUE TABLE -->
      <div class="card card-primary mb-10">
        <table class="table table-striped-light" style="width:100%;">
          <thead>
            <tr>
              <th class="text-small text-bold">Status</th>
              <th class="text-small text-bold">Cluster</th>
              <th class="text-small text-bold">Content Title</th>
              <th class="text-small text-bold">Content Type</th>
              <th class="text-small text-bold">Scheduled Date</th>
              <th class="text-small text-bold">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="badge badge-success">Scheduled</span></td>
              <td>Cluster A</td>
              <td><a href="#" class="text-bold">How to Optimize Content for SEO</a></td>
              <td>Blog</td>
              <td>2025-07-25</td>
              <td>
                <button class="btn-sm btn-outline">Edit</button>
                <button class="btn-sm btn-outline">Preview</button>
                <button class="btn-sm btn-outline">Reschedule</button>
              </td>
            </tr>
            <tr>
              <td><span class="badge badge-warning">Draft</span></td>
              <td>Cluster B</td>
              <td><a href="#" class="text-bold">Product Launch Checklist</a></td>
              <td>Product</td>
              <td>2025-07-28</td>
              <td>
                <button class="btn-sm btn-outline">Edit</button>
                <button class="btn-sm btn-outline">Preview</button>
                <button class="btn-sm btn-outline">Reschedule</button>
              </td>
            </tr>
            <tr>
              <td><span class="badge badge-danger">Failed</span></td>
              <td>Cluster A</td>
              <td><a href="#" class="text-bold">Rewrite: About Us Page</a></td>
              <td>Rewrite</td>
              <td>2025-07-29</td>
              <td>
                <button class="btn-sm btn-outline">Edit</button>
                <button class="btn-sm btn-outline">Preview</button>
                <button class="btn-sm btn-outline">Reschedule</button>
              </td>
            </tr>
            <tr>
              <td><span class="badge badge-success">Scheduled</span></td>
              <td>Cluster C</td>
              <td><a href="#" class="text-bold">Ultimate Guide to Product Reviews</a></td>
              <td>Blog</td>
              <td>2025-08-01</td>
              <td>
                <button class="btn-sm btn-outline">Edit</button>
                <button class="btn-sm btn-outline">Preview</button>
                <button class="btn-sm btn-outline">Reschedule</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- 4. ACTION BUTTONS -->
      <div class="text-right mb-20">
        <button class="btn btn-primary">+ New Schedule</button>
        <button class="btn btn-outline">Bulk Reschedule</button>
        <button class="btn btn-outline">Export to CSV</button>
      </div>
    </div>
  