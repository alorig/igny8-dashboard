<?php
/**
 * Template Name: Reports Module
 * Template Post Type: page
 * 
 * Reports Module Page
 * Loads the same Reports content as wp-admin but on frontend
 */
?>
<div class="module-content">
  <!-- Section 1: Top KPI Metrics Row -->
  <div class="reports-metrics-row">
    <div class="metric-card metric-blue">
      <div class="metric-value">12,450</div>
      <div class="metric-label">Total Keywords</div>
    </div>
    <div class="metric-card metric-green">
      <div class="metric-value">340</div>
      <div class="metric-label">Total Clusters</div>
    </div>
    <div class="metric-card metric-pink">
      <div class="metric-value">87%</div>
      <div class="metric-label">Clustered %</div>
    </div>
    <div class="metric-card metric-orange">
      <div class="metric-value">1,200 <span class="metric-sub">(13%)</span></div>
      <div class="metric-label">Orphaned Keywords</div>
    </div>
  </div>
  <!-- Section 2: Analytics Grid -->
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
  <!-- Section 3: Footer Export Bar -->
  <div class="reports-footer-bar">
    <span class="reports-last-updated">Last Updated: July 24, 2025 – 11:30 AM</span>
    <div class="reports-export-btns">
      <button class="btn btn-outline">Export CSV</button>
      <button class="btn btn-outline">Export PDF</button>
      <button class="btn btn-outline">Email Report</button>
    </div>
  </div>
</div> 