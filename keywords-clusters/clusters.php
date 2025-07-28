<?php
// Fetch all clusters with safety checks
$clusters = get_posts([
    'post_type' => 'cluster',
    'numberposts' => -1,
    'post_status' => 'publish'
]);

// Calculate real metrics
$total_clusters = count($clusters);
$avg_keywords_per_cluster = 0;
$orphaned_clusters = 0;
$finalized_clusters = 0;
$multi_page_clusters = 0;
$total_volume = 0;
$status_counts = [];
$cluster_type_counts = [];
$intent_counts = [];

if (!empty($clusters)) {
    foreach ($clusters as $cluster) {
        // Get ACF fields with safety checks
        $supporting_keywords = get_field('supporting_keywords', $cluster->ID);
        $cluster_status = get_field('cluster_status', $cluster->ID);
        $cluster_type = get_field('cluster_type', $cluster->ID);
        $aggregated_volume = get_field('aggregated_search_volume', $cluster->ID) ?: 0;
        $root_keyword = get_field('root_keyword', $cluster->ID);
        
        // Count keywords
        $keyword_count = is_array($supporting_keywords) ? count($supporting_keywords) : 0;
        $avg_keywords_per_cluster += $keyword_count;
        
        // Count by status
        $status = $cluster_status ?: 'New';
        $status_counts[$status] = ($status_counts[$status] ?? 0) + 1;
        
        // Count by type
        if ($cluster_type) {
            $cluster_type_counts[$cluster_type] = ($cluster_type_counts[$cluster_type] ?? 0) + 1;
        }
        
        // Count finalized
        if ($status === 'Finalized') {
            $finalized_clusters++;
        }
        
        // Count orphaned (no keywords)
        if ($keyword_count === 0) {
            $orphaned_clusters++;
        }
        
        // Count multi-page (more than 1 keyword)
        if ($keyword_count > 1) {
            $multi_page_clusters++;
        }
        
        $total_volume += $aggregated_volume;
    }
    
    $avg_keywords_per_cluster = $total_clusters > 0 ? round($avg_keywords_per_cluster / $total_clusters, 1) : 0;
    $finalized_percentage = $total_clusters > 0 ? round(($finalized_clusters / $total_clusters) * 100) : 0;
    $avg_volume = $total_clusters > 0 ? round($total_volume / $total_clusters) : 0;
}

// Get taxonomy terms for dropdowns
$status_terms = get_terms(['taxonomy' => 'cluster-status', 'hide_empty' => false]);
$cluster_type_terms = get_terms(['taxonomy' => 'cluster-type', 'hide_empty' => false]);
$dimension_terms = get_terms(['taxonomy' => 'dimension-types', 'hide_empty' => false]);
?>

<div class="page-main-container">
  <!-- Filter Bar -->
  <section class="igny8-filter-bar">
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
        <?php foreach ($status_terms as $term): ?>
          <option value="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="ts-wrapper">
      <select id="cluster-type" class="dropdown tom-select">
        <option value="" disabled selected hidden>Cluster Type</option>
        <?php foreach ($cluster_type_terms as $term): ?>
          <option value="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></option>
        <?php endforeach; ?>
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
      <select id="intent" class="dropdown tom-select">
        <option value="" disabled selected hidden>Intent</option>
        <option>Informational</option>
        <option>Transactional</option>
        <option>Navigational</option>
        <option>Commercial</option>
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
    <div class="ts-wrapper">
      <select id="country" class="dropdown tom-select">
        <option value="" disabled selected hidden>Country</option>
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

  <!-- Analytics Overview -->
  <section class="reports-analytics-grid">
    <!-- Cluster Composition -->
    <div class="analytics-card">
      <h4 class="analytics-title">Cluster Composition</h4>
      <div class="progress-group">
        <div class="progress-label">Total Clusters</div>
        <div class="progress-bar progress-blue"><div class="progress-fill" style="width: 100%"></div></div>
        <div class="progress-percent"><?php echo $total_clusters; ?></div>
      </div>
      <div class="progress-group">
        <div class="progress-label">Avg Keywords / Cluster</div>
        <div class="progress-bar progress-green"><div class="progress-fill" style="width: 100%"></div></div>
        <div class="progress-percent"><?php echo $avg_keywords_per_cluster; ?></div>
      </div>
      <div class="progress-group">
        <div class="progress-label">Orphaned Clusters</div>
        <div class="progress-bar progress-orange"><div class="progress-fill" style="width: 100%"></div></div>
        <div class="progress-percent"><?php echo $orphaned_clusters; ?></div>
      </div>
      <div class="progress-group">
        <div class="progress-label">Multi-Page Clusters</div>
        <div class="progress-bar progress-pink"><div class="progress-fill" style="width: 100%"></div></div>
        <div class="progress-percent"><?php echo $multi_page_clusters; ?></div>
      </div>
    </div>
    
    <!-- Dimension Usage -->
    <div class="analytics-card">
      <h4 class="analytics-title">Dimension Usage</h4>
      <div class="badge-group">
        <?php foreach (array_slice($cluster_type_counts, 0, 3) as $type => $count): ?>
          <span class="badge badge-blue"><?php echo esc_html($type); ?></span>
        <?php endforeach; ?>
      </div>
      <div class="progress-group">
        <div class="progress-label">Finalized</div>
        <div class="progress-bar progress-green"><div class="progress-fill" style="width: <?php echo $finalized_percentage; ?>%"></div></div>
        <div class="progress-percent"><?php echo $finalized_percentage; ?>%</div>
      </div>
      <div class="progress-group">
        <div class="progress-label">In Progress</div>
        <div class="progress-bar progress-orange"><div class="progress-fill" style="width: <?php echo 100 - $finalized_percentage; ?>%"></div></div>
        <div class="progress-percent"><?php echo 100 - $finalized_percentage; ?>%</div>
      </div>
    </div>
    
    <!-- Finalization Overview -->
    <div class="analytics-card">
      <h4 class="analytics-title">Finalization Overview</h4>
      <div class="progress-group">
        <div class="progress-label">Finalized</div>
        <div class="progress-bar progress-green"><div class="progress-fill" style="width: <?php echo $finalized_percentage; ?>%"></div></div>
        <div class="progress-percent"><?php echo $finalized_percentage; ?>%</div>
      </div>
      <div class="progress-group">
        <div class="progress-label">Orphaned</div>
        <div class="progress-bar progress-orange"><div class="progress-fill" style="width: <?php echo $total_clusters > 0 ? round(($orphaned_clusters / $total_clusters) * 100) : 0; ?>%"></div></div>
        <div class="progress-percent"><?php echo $total_clusters > 0 ? round(($orphaned_clusters / $total_clusters) * 100) : 0; ?>%</div>
      </div>
      <div class="progress-group">
        <div class="progress-label">Avg Volume</div>
        <div class="progress-bar progress-blue"><div class="progress-fill" style="width: 100%"></div></div>
        <div class="progress-percent"><?php echo number_format($avg_volume); ?></div>
      </div>
    </div>
  </section>

  <!-- Metrics Row -->
  <section class="metrics-row">
    <div class="metric-card metric-blue">
      <div class="metric-value"><?php echo $total_clusters; ?></div>
      <div class="metric-label">Total Clusters</div>
    </div>
    <div class="metric-card metric-green">
      <div class="metric-value"><?php echo $orphaned_clusters; ?></div>
      <div class="metric-label">Orphaned Clusters</div>
    </div>
    <div class="metric-card metric-pink">
      <div class="metric-value"><?php echo $finalized_percentage; ?>%</div>
      <div class="metric-label">Finalized</div>
    </div>
    <div class="metric-card metric-orange">
      <div class="metric-value"><?php echo number_format($avg_volume); ?></div>
      <div class="metric-label">Avg Search Volume</div>
    </div>
  </section>

  <!-- Action Buttons -->
  <div class="flex-between">
    <div class="flex gap-24">
      <button class="btn btn-primary">Add New Cluster</button>
      <button class="btn btn-secondary">Import Clusters</button>
    </div>
    <div>
      <button class="btn btn-outline">Export Clusters</button>
    </div>
  </div>

  <!-- Clusters Table -->
  <div class="card">
    <table class="modern-table">
      <thead>
        <tr>
          <th><input type="checkbox" /></th>
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
        <?php if (!empty($clusters)): ?>
          <?php foreach ($clusters as $cluster): ?>
            <?php
            // Get ACF fields with safety checks
            $cluster_name = get_field('cluster_name', $cluster->ID) ?: $cluster->post_title;
            $root_keyword = get_field('root_keyword', $cluster->ID);
            $aggregated_volume = get_field('aggregated_search_volume', $cluster->ID) ?: 0;
            $cluster_difficulty = get_field('cluster_difficulty', $cluster->ID) ?: 0;
            $cluster_type = get_field('cluster_type', $cluster->ID);
            $cluster_status = get_field('cluster_status', $cluster->ID) ?: 'New';
            $supporting_keywords = get_field('supporting_keywords', $cluster->ID);
            $country = get_field('country', $cluster->ID) ?: 'US';
            
            // Count keywords
            $keyword_count = is_array($supporting_keywords) ? count($supporting_keywords) : 0;
            
            // Determine badge colors
            $status_badge_class = 'badge-blue';
            if ($cluster_status === 'Finalized') $status_badge_class = 'badge-green';
            elseif ($cluster_status === 'Pending') $status_badge_class = 'badge-orange';
            
            $type_badge_class = 'badge-blue';
            if ($cluster_type === 'Blogs') $type_badge_class = 'badge-purple';
            elseif ($cluster_type === 'Category') $type_badge_class = 'badge-teal';
            ?>
            <tr data-status="<?php echo strtolower($cluster_status); ?>" data-type="<?php echo strtolower($cluster_type); ?>">
              <td><input type="checkbox" /></td>
              <td><strong><?php echo esc_html($cluster_name); ?></strong></td>
              <td><?php echo esc_html($root_keyword ?: '--'); ?></td>
              <td class="right"><?php echo number_format($aggregated_volume); ?></td>
              <td class="right"><?php echo $cluster_difficulty; ?></td>
              <td><span class="badge <?php echo $type_badge_class; ?>"><?php echo esc_html($cluster_type ?: 'Page'); ?></span></td>
              <td><span class="badge badge-green">Informational</span></td>
              <td><span class="badge badge-gray">Marketer</span></td>
              <td><span class="badge <?php echo $status_badge_class; ?>"><?php echo esc_html($cluster_status); ?></span></td>
              <td><?php echo $keyword_count; ?></td>
              <td><?php echo esc_html($country); ?></td>
              <td>
                <button class="btn btn-small btn-primary">Edit</button>
                <button class="btn btn-small btn-outline">Archive</button>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="12" class="text-center">No clusters found. Create your first cluster to get started.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div> 