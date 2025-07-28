<?php
// Keywords Management Page for Igny8 Admin Dashboard
// Fetch real data with safety checks

// Get all keywords with safety checks
$keywords_query = new WP_Query(array(
    'post_type' => 'keyword',
    'posts_per_page' => -1,
    'post_status' => 'publish'
));

$keywords = $keywords_query->posts;
$total_keywords = $keywords_query->found_posts;

// Calculate metrics with safety checks
$orphaned_count = 0;
$clustered_count = 0;
$total_volume = 0;
$volume_count = 0;

$intent_counts = array();
$status_counts = array();
$country_counts = array();

foreach ($keywords as $keyword) {
    // Get status with safety check
    $status_terms = wp_get_post_terms($keyword->ID, 'keyword-status');
    $status = !is_wp_error($status_terms) && !empty($status_terms) ? $status_terms[0]->name : 'New';
    
    if ($status === 'Orphaned') {
        $orphaned_count++;
    } elseif ($status === 'Clustered') {
        $clustered_count++;
    }
    
    // Count statuses
    $status_counts[$status] = isset($status_counts[$status]) ? $status_counts[$status] + 1 : 1;
    
    // Get intent with safety check
    $intent_terms = wp_get_post_terms($keyword->ID, 'intent');
    $intent = !is_wp_error($intent_terms) && !empty($intent_terms) ? $intent_terms[0]->name : 'Informational';
    $intent_counts[$intent] = isset($intent_counts[$intent]) ? $intent_counts[$intent] + 1 : 1;
    
    // Get ACF fields with safety checks
    $search_volume = get_field('search_volume', $keyword->ID);
    if ($search_volume && is_numeric($search_volume)) {
        $total_volume += $search_volume;
        $volume_count++;
    }
    
    $country = get_field('country', $keyword->ID);
    if ($country) {
        $country_counts[$country] = isset($country_counts[$country]) ? $country_counts[$country] + 1 : 1;
    }
}

// Calculate averages with safety checks
$avg_volume = $volume_count > 0 ? round($total_volume / $volume_count) : 0;
$clustered_percentage = $total_keywords > 0 ? round(($clustered_count / $total_keywords) * 100) : 0;

// Get taxonomy terms for dropdowns
$status_terms = get_terms(array('taxonomy' => 'keyword-status', 'hide_empty' => false));
$intent_terms = get_terms(array('taxonomy' => 'intent', 'hide_empty' => false));
$countries = array_unique(array_keys($country_counts));
?>

<div class="page-main-container">
  <!-- Filter Bar -->
  <section class="igny8-filter-bar">
    <div class="ts-wrapper">
      <select id="industry" class="igny8-dropdown tom-select">
        <option value="" disabled selected hidden>Industry</option>
        <option value="automotive">Automotive</option>
        <option value="home">Home</option>
        <option value="fitness">Fitness</option>
      </select>
    </div>
    <div class="ts-wrapper">
      <select id="status" class="igny8-dropdown tom-select">
        <option value="" disabled selected hidden>Status</option>
        <?php if (!is_wp_error($status_terms)): ?>
          <?php foreach ($status_terms as $term): ?>
            <option value="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></option>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
    </div>
    <div class="ts-wrapper">
      <select id="persona" class="igny8-dropdown tom-select">
        <option value="" disabled selected hidden>Persona</option>
        <option value="marketer">Marketer</option>
        <option value="engineer">Engineer</option>
      </select>
    </div>
    <div class="ts-wrapper">
      <select id="buyer-stage" class="igny8-dropdown tom-select">
        <option value="" disabled selected hidden>Buyer Stage</option>
        <option value="awareness">Awareness</option>
        <option value="consideration">Consideration</option>
        <option value="decision">Decision</option>
        <option value="action">Action</option>
      </select>
    </div>
    <div class="ts-wrapper">
      <select id="intent" class="igny8-dropdown tom-select">
        <option value="" disabled selected hidden>Intent</option>
        <?php if (!is_wp_error($intent_terms)): ?>
          <?php foreach ($intent_terms as $term): ?>
            <option value="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></option>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
    </div>
    <div class="ts-wrapper">
      <select id="country" class="igny8-dropdown tom-select">
        <option value="" disabled selected hidden>Country</option>
        <?php foreach ($countries as $country): ?>
          <option value="<?php echo esc_attr($country); ?>"><?php echo esc_html($country); ?></option>
        <?php endforeach; ?>
      </select>
    </div>
          <div class="ts-wrapper">
        <label for="volume">Volume</label>
        <input id="volume" type="range" min="0" max="50000">
      </div>
      <div class="ts-wrapper search-wrapper">
        <input id="search" type="search" placeholder="Search keywords...">
        <button id="search-btn" type="button">Search</button>
      </div>
  </section>

  <!-- Metrics Row -->
  <div class="metrics-row">
    <div class="metric-card metric-blue">
      <div class="metric-value"><?php echo number_format($total_keywords); ?></div>
      <div class="metric-label">Total Keywords</div>
    </div>
    <div class="metric-card metric-green">
      <div class="metric-value"><?php echo number_format($orphaned_count); ?></div>
      <div class="metric-label">Orphaned</div>
    </div>
    <div class="metric-card metric-pink">
      <div class="metric-value"><?php echo $clustered_percentage; ?>%</div>
      <div class="metric-label">Clustered</div>
    </div>
    <div class="metric-card metric-orange">
      <div class="metric-value"><?php echo number_format($avg_volume); ?></div>
      <div class="metric-label">Avg Volume</div>
    </div>
  </div>

  <!-- Analytics Grid -->
  <div class="reports-analytics-grid">
    <!-- Keyword Volume Trend Chart -->
    <div class="analytics-card">
      <h4 class="analytics-title">Keyword Volume Trend</h4>
      <?php foreach ($intent_counts as $intent_name => $count): 
        $percentage = $total_keywords > 0 ? round(($count / $total_keywords) * 100) : 0;
        // Use existing global CSS classes based on intent type
        $progress_class = 'progress-blue'; // default
        if ($intent_name === 'Commercial') $progress_class = 'progress-green';
        elseif ($intent_name === 'Informational') $progress_class = 'progress-blue';
        elseif ($intent_name === 'Transactional') $progress_class = 'progress-pink';
        elseif ($intent_name === 'Navigational') $progress_class = 'progress-orange';
      ?>
      <div class="progress-group">
        <div class="progress-label"><?php echo esc_html($intent_name); ?></div>
        <div class="progress-bar <?php echo $progress_class; ?>"><div class="progress-fill" style="width: <?php echo $percentage; ?>%"></div></div>
        <div class="progress-percent"><?php echo $percentage; ?>%</div>
      </div>
      <?php endforeach; ?>
    </div>
    
    <!-- Status Breakdown Chart -->
    <div class="analytics-card">
      <h4 class="analytics-title">Status Breakdown</h4>
      <?php foreach ($status_counts as $status_name => $count): 
        $percentage = $total_keywords > 0 ? round(($count / $total_keywords) * 100) : 0;
        // Use existing global CSS classes based on status type
        $progress_class = 'progress-blue'; // default
        if ($status_name === 'Clustered') $progress_class = 'progress-green';
        elseif ($status_name === 'New') $progress_class = 'progress-blue';
        elseif ($status_name === 'Orphaned') $progress_class = 'progress-orange';
        elseif ($status_name === 'In-Use') $progress_class = 'progress-pink';
        elseif ($status_name === 'Archived') $progress_class = 'progress-orange';
      ?>
      <div class="progress-group">
        <div class="progress-label"><?php echo esc_html($status_name); ?></div>
        <div class="progress-bar <?php echo $progress_class; ?>"><div class="progress-fill" style="width: <?php echo $percentage; ?>%"></div></div>
        <div class="progress-percent"><?php echo $percentage; ?>%</div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Action Buttons -->
  <div class="flex-between">
    <div class="flex gap-24">
      <button class="btn btn-primary">Add New Keyword</button>
      <button class="btn btn-secondary">Import Keywords</button>
    </div>
    <div>
      <button class="btn btn-outline">Export Keywords</button>
    </div>
  </div>

  <!-- Keywords Table -->
  <div class="card">
    <table class="modern-table">
        <thead>
          <tr>
            <th><input type="checkbox" /></th>
            <th class="text-left">Keyword</th>
            <th class="right">Volume</th>
            <th class="right">CPC</th>
            <th class="right">CPS</th>
            <th class="right">KD</th>
            <th>Intent</th>
            <th>Status</th>
            <th>Cluster Assoc.</th>
            <th>Country</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($keywords)): ?>
            <?php foreach ($keywords as $keyword): ?>
              <?php
              // Get ACF fields with safety checks
              $keyword_text = get_field('keyword', $keyword->ID);
              $search_volume = get_field('search_volume', $keyword->ID);
              $cpc = get_field('cpc', $keyword->ID);
              $cps = get_field('cps', $keyword->ID);
              $original_kd = get_field('original_kd', $keyword->ID);
              $difficulty_our_scale = get_field('difficulty_our_scale', $keyword->ID);
              $country = get_field('country', $keyword->ID);
              
              // Get taxonomies with safety checks
              $status_terms = wp_get_post_terms($keyword->ID, 'keyword-status');
              $status = !is_wp_error($status_terms) && !empty($status_terms) ? $status_terms[0]->name : 'New';
              
              $intent_terms = wp_get_post_terms($keyword->ID, 'intent');
              $intents = !is_wp_error($intent_terms) && !empty($intent_terms) ? $intent_terms : [];
              
              // Get cluster association (placeholder for now)
              $cluster_assoc = '-';
              
              // Determine badge colors
              $status_badge_class = 'badge-blue';
              if ($status === 'Clustered') $status_badge_class = 'badge-green';
              elseif ($status === 'Orphaned') $status_badge_class = 'badge-red';
              elseif ($status === 'In-Use') $status_badge_class = 'badge-orange';
              ?>
              <tr data-status="<?php echo esc_attr($status); ?>" data-intent="<?php echo esc_attr($intent); ?>" data-country="<?php echo esc_attr($country); ?>">
                <td><input type="checkbox" /></td>
                <td class="text-left"><?php echo esc_html($keyword_text ?: $keyword->post_title); ?></td>
                <td class="right"><?php echo $search_volume ? number_format($search_volume) : '--'; ?></td>
                <td class="right"><?php echo $cpc ? '$' . number_format($cpc, 2) : '--'; ?></td>
                <td class="right"><?php echo $cps ? number_format($cps, 2) : '--'; ?></td>
                <td class="right"><?php echo $original_kd ?: ($difficulty_our_scale ?: '--'); ?></td>
                <td>
                  <?php if (!empty($intents)): ?>
                    <div class="badge-group" style="font-size: 0.75em;">
                      <?php foreach ($intents as $intent_term): ?>
                        <?php
                        $intent_badge_class = 'badge-blue';
                        if ($intent_term->name === 'Commercial') $intent_badge_class = 'badge-green';
                        elseif ($intent_term->name === 'Navigational') $intent_badge_class = 'badge-purple';
                        elseif ($intent_term->name === 'Transactional') $intent_badge_class = 'badge-pink';
                        ?>
                        <span class="badge <?php echo $intent_badge_class; ?>" style="font-size: 0.7em; padding: 2px 6px; margin: 1px;"><?php echo esc_html($intent_term->name); ?></span>
                      <?php endforeach; ?>
                    </div>
                  <?php else: ?>
                    <span class="badge badge-gray" style="font-size: 0.7em; padding: 2px 6px;">Informational</span>
                  <?php endif; ?>
                </td>
                <td><span class="badge <?php echo $status_badge_class; ?>"><?php echo esc_html($status); ?></span></td>
                <td><?php echo esc_html($cluster_assoc); ?></td>
                <td><?php echo esc_html($country ?: '--'); ?></td>
                <td>
                  <button class="btn btn-small btn-primary btn-edit">Edit</button>
                  <button class="btn btn-small btn-outline btn-archive">Archive</button>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="11" style="text-align: center; padding: 40px; color: #888;">
                No keywords found. Add some keywords to get started.
              </td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    
    <!-- Pagination -->
    <div class="flex-between">
      <div></div>
      <div class="flex gap-24">
        <button class="btn btn-tertiary">&laquo; Prev</button>
        <span class="pagination-info">1</span>
        <span class="pagination-info">2</span>
        <span class="pagination-info active">3</span>
        <button class="btn btn-tertiary">Next &raquo;</button>
      </div>
    </div>
  </div>
</div> 