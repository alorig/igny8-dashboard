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
                foreach ($statuses as $status) {
                    echo "<option value='{$status->slug}'>{$status->name}</option>";
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
                foreach ($sectors as $sector) {
                    echo "<option value='{$sector->slug}'>{$sector->name}</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="metrics-grid">
        <div class="card metric-card">
            <h4>Total Niches</h4>
            <p>
                <?php echo wp_count_posts('niche')->publish; ?>
            </p>
        </div>
        <div class="card metric-card">
            <h4>Status: Active Niches</h4>
            <p>
                <?php
                $active = new WP_Query([
                    'post_type' => 'niche',
                    'posts_per_page' => -1,
                    'tax_query' => [[
                        'taxonomy' => 'niche-status',
                        'field'    => 'slug',
                        'terms'    => ['active'],
                    ]]
                ]);
                echo $active->found_posts;
                wp_reset_postdata();
                ?>
            </p>
        </div>
        <div class="card metric-card">
            <h4>Sector Count</h4>
            <p><?php echo count($sectors); ?></p>
        </div>
        <div class="card metric-card">
            <h4>Placeholder Metric</h4>
            <p>--</p>
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
            foreach ($niches as $niche) {
                $name = get_field('niche_name', $niche->ID);
                $desc = get_field('niche_description', $niche->ID);
                $status = wp_get_post_terms($niche->ID, 'niche-status', ['fields' => 'names']);
                $sector = wp_get_post_terms($niche->ID, 'sector', ['fields' => 'names']);
                $keywords = get_field('keywords', $niche->ID); // Assumes relationship or repeater
                echo "<tr>
                        <td>{$name}</td>
                        <td>" . wp_trim_words($desc, 10) . "</td>
                        <td>" . implode(', ', $status) . "</td>
                        <td>" . implode(', ', $sector) . "</td>
                        <td>" . (is_array($keywords) ? count($keywords) : '--') . "</td>
                        <td><a href='" . get_edit_post_link($niche->ID) . "' class='btn-small'>Edit</a></td>
                      </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dropdown.js"></script>
