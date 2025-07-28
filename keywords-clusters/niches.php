<div class="page-main-container">
    <div class="page-header">
        <h2>Niches Overview</h2>
    </div>

    <div class="filters-bar flex-between">
        <div class="dropdown">
            <label for="status-filter">Niche Status</label>
            <select id="status-filter">
                <option value="">All</option>
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
        <div class="dropdown">
            <label for="sector-filter">Sector</label>
            <select id="sector-filter">
                <option value="">All</option>
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
    </div>

    <div class="metrics-grid">
        <div class="card metric-card">
            <h4>Total Niches</h4>
            <p>
                <?php 
                $total_niches = wp_count_posts('niche');
                echo $total_niches ? $total_niches->publish : 0;
                ?>
            </p>
        </div>
        <div class="card metric-card">
            <h4>Active Niches</h4>
            <p>
                <?php
                $active_query = new WP_Query([
                    'post_type' => 'niche',
                    'posts_per_page' => -1,
                    'tax_query' => [[
                        'taxonomy' => 'niche-status',
                        'field'    => 'slug',
                        'terms'    => ['active'],
                    ]]
                ]);
                echo $active_query->found_posts;
                wp_reset_postdata();
                ?>
            </p>
        </div>
        <div class="card metric-card">
            <h4>Sector Count</h4>
            <p><?php echo !is_wp_error($sectors) ? count($sectors) : 0; ?></p>
        </div>
        <div class="card metric-card">
            <h4>Total Keywords</h4>
            <p>
                <?php
                $total_keywords = 0;
                $niches = get_posts(['post_type' => 'niche', 'numberposts' => -1]);
                foreach ($niches as $niche) {
                    $keywords = get_field('keywords', $niche->ID);
                    if (is_array($keywords)) {
                        $total_keywords += count($keywords);
                    }
                }
                echo $total_keywords ?: '--';
                ?>
            </p>
        </div>
    </div>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Niche Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Sector</th>
                    <th>Keywords</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $niches = get_posts(['post_type' => 'niche', 'numberposts' => -1]);
            if (!empty($niches)) {
                foreach ($niches as $niche) {
                    // Get ACF fields with fallbacks
                    $name = get_field('niche_name', $niche->ID) ?: $niche->post_title;
                    $desc = get_field('niche_description', $niche->ID) ?: $niche->post_content;
                    
                    // Get taxonomy terms
                    $status_terms = wp_get_post_terms($niche->ID, 'niche-status', ['fields' => 'names']);
                    $sector_terms = wp_get_post_terms($niche->ID, 'sector', ['fields' => 'names']);
                    
                    // Get keywords count
                    $keywords = get_field('keywords', $niche->ID);
                    $keyword_count = is_array($keywords) ? count($keywords) : '--';
                    
                    // Format status and sector for display
                    $status_display = !empty($status_terms) ? implode(', ', $status_terms) : '--';
                    $sector_display = !empty($sector_terms) ? implode(', ', $sector_terms) : '--';
                    
                    echo "<tr data-status='" . strtolower(implode(' ', $status_terms)) . "' data-sector='" . strtolower(implode(' ', $sector_terms)) . "'>
                            <td>{$name}</td>
                            <td>" . wp_trim_words($desc, 10) . "</td>
                            <td>{$status_display}</td>
                            <td>{$sector_display}</td>
                            <td>{$keyword_count}</td>
                            <td><a href='" . get_edit_post_link($niche->ID) . "' class='btn-small'>Edit</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6' style='text-align: center;'>No niches found. <a href='" . admin_url('post-new.php?post_type=niche') . "'>Create your first niche</a></td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dropdown.js"></script>
