<?php
// Prompt Library Page (Igny8 Admin Theme)
// Static markup only, uses theme classes from style.css
?>
<div class="main-content">
  <div class="igny8-section">
    <div class='igny8-page-content'>
      <!-- 1. FILTER BAR -->
      <div class="card card-gray mb-10">
        <div class="keywords-filters-panel">
          <div class="filter-row" style="display: flex; gap: 18px; align-items: flex-end;">
            <div class="mr-10">
              <label class="text-small" for="filter-usecase">Use-Case</label>
              <select id="filter-usecase" class="small-select tom-select">
                <option value="">All Use-Cases</option>
                <option>Blog</option>
                <option>Rewrite</option>
                <option>Product Description</option>
              </select>
            </div>
            <div class="mr-10">
              <label class="text-small" for="filter-persona">Persona</label>
              <select id="filter-persona" class="small-select tom-select">
                <option value="">All Personas</option>
                <option>Marketer</option>
                <option>Engineer</option>
              </select>
            </div>
            <div class="mr-10">
              <label class="text-small" for="filter-cluster-type">Cluster Type</label>
              <select id="filter-cluster-type" class="small-select tom-select">
                <option value="">All Types</option>
                <option>Page</option>
                <option>Blog</option>
                <option>Category</option>
              </select>
            </div>
            <div class="mr-10">
              <label class="text-small" for="filter-tone">Tone</label>
              <select id="filter-tone" class="small-select tom-select">
                <option value="">All Tones</option>
                <option>Formal</option>
                <option>Conversational</option>
                <option>Playful</option>
              </select>
            </div>
            <div class="mr-10">
              <label class="text-small" for="filter-tags">Tags</label>
              <select id="filter-tags" class="small-select tom-select">
                <option value="">All Tags</option>
                <option>SEO</option>
                <option>Product</option>
                <option>How-To</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!-- 2. QUICK STATS METRICS -->
      <div class="metrics-row mb-10" style="display: flex; gap: 24px;">
        <div class="card card-info">
          <div class="text-small text-bold mb-10">Total Prompts</div>
          <div class="h4">42</div>
        </div>
        <div class="card card-success">
          <div class="text-small text-bold mb-10">Custom Prompts</div>
          <div class="h4">18</div>
        </div>
        <div class="card card-warning">
          <div class="text-small text-bold mb-10">System Templates</div>
          <div class="h4">24</div>
        </div>
      </div>
      <!-- 4. NEW PROMPT BUTTON (Top Right) -->
      <div class="mb-20" style="display: flex; justify-content: flex-end; align-items: center;">
        <button class="btn btn-primary float-right">+ New Prompt</button>
      </div>
      <!-- 3. PROMPT LIBRARY GRID -->
      <div class="card-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
        <div class="card card-small">
          <div class="text-bold mb-10">Transactional Blog (Product Cluster)</div>
          <div class="mb-10 text-small">For product launches and transactional blog posts.</div>
          <div class="mb-10">
            <span class="chip chip-blue">Blog</span>
            <span class="chip chip-green">Product</span>
            <span class="chip chip-pink">Transactional</span>
          </div>
          <div class="mb-10 text-small" style="color:#888;">Used In: 12 schedules</div>
          <div>
            <button class="btn-sm btn-outline">Preview</button>
            <button class="btn-sm btn-outline">Edit</button>
            <button class="btn-sm btn-outline">Clone</button>
          </div>
        </div>
        <div class="card card-small">
          <div class="text-bold mb-10">Conversational Rewrite (Category)</div>
          <div class="mb-10 text-small">Rewrite for category pages in a conversational tone.</div>
          <div class="mb-10">
            <span class="chip chip-blue">Rewrite</span>
            <span class="chip chip-gray">Category</span>
            <span class="chip chip-pink">Conversational</span>
          </div>
          <div class="mb-10 text-small" style="color:#888;">Used In: 7 schedules</div>
          <div>
            <button class="btn-sm btn-outline">Preview</button>
            <button class="btn-sm btn-outline">Edit</button>
            <button class="btn-sm btn-outline">Clone</button>
          </div>
        </div>
        <div class="card card-small">
          <div class="text-bold mb-10">Product Description (Formal)</div>
          <div class="mb-10 text-small">Formal product description for e-commerce.</div>
          <div class="mb-10">
            <span class="chip chip-green">Product</span>
            <span class="chip chip-blue">Formal</span>
            <span class="chip chip-gray">SEO</span>
          </div>
          <div class="mb-10 text-small" style="color:#888;">Used In: 5 schedules</div>
          <div>
            <button class="btn-sm btn-outline">Preview</button>
            <button class="btn-sm btn-outline">Edit</button>
            <button class="btn-sm btn-outline">Clone</button>
          </div>
        </div>
        <div class="card card-small">
          <div class="text-bold mb-10">How-To Blog (Playful)</div>
          <div class="mb-10 text-small">Playful how-to blog prompt for tutorials.</div>
          <div class="mb-10">
            <span class="chip chip-blue">Blog</span>
            <span class="chip chip-pink">Playful</span>
            <span class="chip chip-gray">How-To</span>
          </div>
          <div class="mb-10 text-small" style="color:#888;">Used In: 3 schedules</div>
          <div>
            <button class="btn-sm btn-outline">Preview</button>
            <button class="btn-sm btn-outline">Edit</button>
            <button class="btn-sm btn-outline">Clone</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 