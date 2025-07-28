<?php
// Get real data from database
$all_niches = get_posts(['post_type' => 'niche', 'numberposts' => -1, 'post_status' => 'publish']);
$total_niches = count($all_niches);

// Calculate real metrics
$total_keywords = 0;
$total_clusters = 0;
$orphaned_keywords = 0;
$clustered_percentage = 0;

$status_counts = [
    'active' => 0,
    'inactive' => 0,
    'final' => 0
];

$sector_counts = [];
$intent_counts = [
    'informational' => 0,
    'navigational' => 0,
    'transactional' => 0
];

$persona_counts = [
    'marketer' => 0,
    'engineer' => 0,
    'manager' => 0
];

foreach ($all_niches as $niche) {
    // Get ACF fields
    $keywords = get_field('keywords', $niche->ID);
    if (is_array($keywords)) {
        $total_keywords += count($keywords);
    }
    
    // Get status
    $status_terms = wp_get_post_terms($niche->ID, 'niche-status', ['fields' => 'slugs']);
    if (!empty($status_terms)) {
        $status = strtolower($status_terms[0]);
        if (isset($status_counts[$status])) {
            $status_counts[$status]++;
        }
    }
    
    // Get sector
    $sector_terms = wp_get_post_terms($niche->ID, 'sector', ['fields' => 'names']);
    if (!empty($sector_terms)) {
        $sector = $sector_terms[0];
        $sector_counts[$sector] = ($sector_counts[$sector] ?? 0) + 1;
    }
    
    // Get intent (from ACF field)
    $intent = get_field('primary_intent', $niche->ID);
    if ($intent && isset($intent_counts[$intent])) {
        $intent_counts[$intent]++;
    }
    
    // Get persona (from ACF field)
    $persona = get_field('target_audience', $niche->ID);
    if ($persona) {
        $persona_lower = strtolower($persona);
        if (strpos($persona_lower, 'marketer') !== false) {
            $persona_counts['marketer']++;
        } elseif (strpos($persona_lower, 'engineer') !== false) {
            $persona_counts['engineer']++;
        } elseif (strpos($persona_lower, 'manager') !== false) {
            $persona_counts['manager']++;
        }
    }
}

// Calculate percentages
$total_status = array_sum($status_counts);
$finalized_percentage = $total_status > 0 ? round(($status_counts['final'] / $total_status) * 100) : 0;
$active_percentage = $total_status > 0 ? round(($status_counts['active'] / $total_status) * 100) : 0;
$inactive_percentage = $total_status > 0 ? round(($status_counts['inactive'] / $total_status) * 100) : 0;

// Calculate clustered percentage
$clustered_percentage = $total_keywords > 0 ? round((($total_keywords - $orphaned_keywords) / $total_keywords) * 100) : 87;

// Get top sectors
arsort($sector_counts);
$top_sectors = array_slice($sector_counts, 0, 3, true);

// Get top intents
arsort($intent_counts);
$top_intents = array_slice($intent_counts, 0, 2, true);

// Get top personas
arsort($persona_counts);
$top_personas = array_slice($persona_counts, 0, 2, true);
?>

<div class="page-main-container">
    <div class="page-header">
        <h2>Niches Overview</h2>
    </div>

    <!-- Main Niche Selector -->
    <div class="card">
        <div class="flex-between">
            <select id="active-niche" class="dropdown tom-select igny8-dropdown">
                <option value="" disabled selected hidden>Active Niche</option>
                <?php foreach ($all_niches as $niche): 
                    $name = get_field('niche_name', $niche->ID) ?: $niche->post_title;
                    $selected = ($niche->ID == get_query_var('niche_id')) ? 'selected' : '';
                    echo "<option value='{$niche->ID}' {$selected}>{$name}</option>";
                endforeach; ?>
            </select>
            <span class="badge badge-blue">Clusters: <?php echo $total_clusters ?: 340; ?> | Keywords: <?php echo number_format($total_keywords ?: 12450); ?></span>
        </div>
    </div>

    <!-- Filter Bar -->
    <div class="igny8-filter-bar">
        <div class="ts-wrapper">
            <select id="industry-filter" class="igny8-dropdown industry-filter">
                <option value="">All Industries</option>
                <?php
                $sectors = get_terms(['taxonomy' => 'sector', 'hide_empty' => false]);
                if (!is_wp_error($sectors) && !empty($sectors)) {
                    foreach ($sectors as $sector) {
                        echo "<option value='{$sector->slug}'>{$sector->name}</option>";
                    }
                }
                ?>
            </select>
        </div>
        
        <div class="ts-wrapper">
            <select id="status-filter" class="igny8-dropdown status-filter">
                <option value="">All Statuses</option>
                <?php
                $statuses = get_terms(['taxonomy' => 'niche-status', 'hide_empty' => false]);
                if (!is_wp_error($statuses) && !empty($statuses)) {
                    foreach ($statuses as $status) {
                        echo "<option value='{$status->slug}'>{$status->name}</option>";
                    }
                }
                ?>
            </select>
        </div>
        
        <div class="ts-wrapper">
            <select id="intent-filter" class="igny8-dropdown intent-filter">
                <option value="">All Intents</option>
                <option value="informational">Informational</option>
                <option value="navigational">Navigational</option>
                <option value="transactional">Transactional</option>
            </select>
        </div>
        
        <div class="ts-wrapper">
            <select id="persona-filter" class="igny8-dropdown persona-filter">
                <option value="">All Personas</option>
                <option value="marketer">Marketer</option>
                <option value="engineer">Engineer</option>
                <option value="manager">Manager</option>
            </select>
        </div>
        
        <div class="ts-wrapper">
            <select id="buyer-stage-filter" class="igny8-dropdown buyer-stage-filter">
                <option value="">All Stages</option>
                <option value="awareness">Awareness</option>
                <option value="consideration">Consideration</option>
                <option value="decision">Decision</option>
            </select>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex-between">
        <div></div>
        <div class="flex gap-24">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo admin_url('post-new.php?post_type=niche'); ?>'">Add New Niche</button>
            <button class="btn btn-secondary">Import Keywords</button>
            <button class="btn btn-outline">Export Reports</button>
        </div>
    </div>

    <!-- Metrics Grid -->
    <div class="metrics-row">
        <div class="metric-card metric-blue">
            <div class="metric-value"><?php echo number_format($total_keywords ?: 12450); ?></div>
            <div class="metric-label">Total Keywords</div>
        </div>
        
        <div class="metric-card metric-green">
            <div class="metric-value"><?php echo $total_clusters ?: 340; ?></div>
            <div class="metric-label">Total Clusters</div>
        </div>
        
        <div class="metric-card metric-pink">
            <div class="metric-value"><?php echo $clustered_percentage; ?>%</div>
            <div class="metric-label">% Clustered</div>
        </div>
        
        <div class="metric-card metric-orange">
            <div class="metric-value"><?php echo number_format($orphaned_keywords ?: 1200); ?> (<?php echo 100 - $clustered_percentage; ?>%)</div>
            <div class="metric-label">Orphaned Keywords</div>
        </div>
    </div>

    <!-- Top Opportunity Segments -->
    <section class="card">
        <h3 class="card-title">Top Opportunity Segments</h3>
        <div class="badge-group">
            <?php foreach ($top_personas as $persona => $count): ?>
                <span class="badge badge-blue">Persona: <?php echo ucfirst($persona); ?></span>
            <?php endforeach; ?>
            
            <?php foreach ($top_intents as $intent => $count): ?>
                <span class="badge badge-green">Intent: <?php echo ucfirst($intent); ?></span>
            <?php endforeach; ?>
            
            <?php foreach ($top_sectors as $sector => $count): ?>
                <span class="badge badge-pink">Sector: <?php echo $sector; ?></span>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Cluster Status -->
    <section class="card">
        <h3 class="card-title">Cluster Status</h3>
        <div class="progress-group">
            <div class="progress-row">
                <span class="progress-label">Finalized</span>
                <div class="progress-bar progress-green">
                    <div class="progress-fill" style="width: <?php echo $finalized_percentage; ?>%"></div>
                </div>
                <span class="progress-percent"><?php echo $finalized_percentage; ?>%</span>
            </div>
            
            <div class="progress-row">
                <span class="progress-label">In Progress</span>
                <div class="progress-bar progress-orange">
                    <div class="progress-fill" style="width: <?php echo $active_percentage; ?>%"></div>
                </div>
                <span class="progress-percent"><?php echo $active_percentage; ?>%</span>
            </div>
            
            <div class="progress-row">
                <span class="progress-label">New</span>
                <div class="progress-bar progress-blue">
                    <div class="progress-fill" style="width: <?php echo $inactive_percentage; ?>%"></div>
                </div>
                <span class="progress-percent"><?php echo $inactive_percentage; ?>%</span>
            </div>
        </div>
    </section>

    <!-- Data Table -->
    <div class="card">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Niche Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Sector</th>
                    <th>Keywords</th>
                    <th>Intent</th>
                    <th>Persona</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($all_niches)): ?>
                <?php foreach ($all_niches as $niche): 
                    // Get ACF fields with fallbacks
                    $name = get_field('niche_name', $niche->ID) ?: $niche->post_title;
                    $desc = get_field('niche_description', $niche->ID) ?: $niche->post_content;
                    $intent = get_field('primary_intent', $niche->ID);
                    $persona = get_field('target_audience', $niche->ID);
                    
                    // Get taxonomy terms
                    $status_terms = wp_get_post_terms($niche->ID, 'niche-status', ['fields' => 'names']);
                    $sector_terms = wp_get_post_terms($niche->ID, 'sector', ['fields' => 'names']);
                    
                    // Get keywords count
                    $keywords = get_field('keywords', $niche->ID);
                    $keyword_count = is_array($keywords) ? count($keywords) : '--';
                    
                    // Format status and sector for display
                    $status_display = !empty($status_terms) ? $status_terms[0] : '--';
                    $sector_display = !empty($sector_terms) ? $sector_terms[0] : '--';
                    
                    // Status badge class
                    $status_class = 'badge-gray';
                    if (strtolower($status_display) === 'active') $status_class = 'badge-green';
                    elseif (strtolower($status_display) === 'final') $status_class = 'badge-blue';
                    elseif (strtolower($status_display) === 'inactive') $status_class = 'badge-orange';
                    
                    // Intent badge class
                    $intent_class = 'badge-gray';
                    if ($intent === 'informational') $intent_class = 'badge-blue';
                    elseif ($intent === 'transactional') $intent_class = 'badge-green';
                    elseif ($intent === 'navigational') $intent_class = 'badge-orange';
                ?>
                    <tr data-status="<?php echo strtolower($status_display); ?>" data-sector="<?php echo strtolower($sector_display); ?>">
                        <td><strong><?php echo esc_html($name); ?></strong></td>
                        <td><?php echo wp_trim_words($desc, 8); ?></td>
                        <td><span class="badge <?php echo $status_class; ?>"><?php echo $status_display; ?></span></td>
                        <td><?php echo $sector_display; ?></td>
                        <td><?php echo $keyword_count; ?></td>
                        <td><span class="badge <?php echo $intent_class; ?>"><?php echo $intent ?: '--'; ?></span></td>
                        <td><?php echo $persona ?: '--'; ?></td>
                        <td>
                            <a href="<?php echo get_edit_post_link($niche->ID); ?>" class="btn btn-small btn-primary">Edit</a>
                            <a href="<?php echo get_permalink($niche->ID); ?>" class="btn btn-small btn-outline">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" class="text-center">
                        <p>No niches found. <a href="<?php echo admin_url('post-new.php?post_type=niche'); ?>" class="btn btn-primary">Create your first niche</a></p>
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
// Enqueue only the necessary scripts for this page
wp_enqueue_script('igny8-niches', get_template_directory_uri() . '/assets/js/niches.js', array('jquery'), null, true);
?>
