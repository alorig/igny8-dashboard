<div class="page-main-container">
    <div class="page-header">
        <h2>Niches Overview</h2>
    </div>

    <!-- Main Niche Selector -->
    <div class="niche-selector">
        <select id="active-niche" class="dropdown tom-select igny8-dropdown">
            <option value="" disabled selected hidden>Active Niche</option>
            <?php
            $niches = get_posts(['post_type' => 'niche', 'numberposts' => -1]);
            foreach ($niches as $niche) {
                $name = get_field('niche_name', $niche->ID) ?: $niche->post_title;
                echo "<option value='{$niche->ID}'>{$name}</option>";
            }
            ?>
        </select>
        <span class="niche-selector__badge">Clusters: 340 | Keywords: 12,450</span>
    </div>

    <!-- Filter Bar -->
    <div class="filters-bar flex-between">
        <div class="dropdown">
            <label for="industry-filter">Industry</label>
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
        <div class="dropdown">
            <label for="status-filter">Status</label>
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
        <div class="dropdown">
            <label for="intent-filter">Intent</label>
            <select id="intent-filter" class="igny8-dropdown intent-filter">
                <option value="">All Intents</option>
                <option value="informational">Informational</option>
                <option value="navigational">Navigational</option>
                <option value="transactional">Transactional</option>
            </select>
        </div>
        <div class="dropdown">
            <label for="persona-filter">Persona</label>
            <select id="persona-filter" class="igny8-dropdown persona-filter">
                <option value="">All Personas</option>
                <option value="marketer">Marketer</option>
                <option value="engineer">Engineer</option>
                <option value="manager">Manager</option>
            </select>
        </div>
        <div class="dropdown">
            <label for="buyer-stage-filter">Buyer Stage</label>
            <select id="buyer-stage-filter" class="igny8-dropdown buyer-stage-filter">
                <option value="">All Stages</option>
                <option value="awareness">Awareness</option>
                <option value="consideration">Consideration</option>
                <option value="decision">Decision</option>
            </select>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="niche-actions">
        <button class="btn btn-primary niche-actions__add">Add New Niche</button>
        <button class="btn btn-black niche-actions__import">Import Keywords</button>
        <button class="btn btn-outline niche-actions__export">Export Reports</button>
    </div>

    <!-- Metrics Grid -->
    <div class="metrics-grid">
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
                echo $total_keywords ?: '12,450';
                ?>
            </p>
        </div>
        <div class="card metric-card">
            <h4>Total Clusters</h4>
            <p>340</p>
        </div>
        <div class="card metric-card">
            <h4>% Clustered</h4>
            <p>87%</p>
        </div>
        <div class="card metric-card">
            <h4>Orphaned Keywords</h4>
            <p>1,200 (13%)</p>
        </div>
    </div>

    <!-- Top Opportunity Segments -->
    <section class="niche-opportunity-panel">
        <h2 class="niche-panel__title">Top Opportunity Segments</h2>
        <div class="niche-chips">
            <span class="niche-chip" style="border: 1px solid #2196f3; color: #2196f3;">Persona: Marketer</span>
            <span class="niche-chip" style="background: #4caf50; color: white;">Intent: Informational</span>
            <span class="niche-chip" style="background: #2196f3; color: white;">Geo: EU</span>
            <span class="niche-chip" style="background: #e91e63; color: white;">Geo: US</span>
            <span class="niche-chip" style="border: 1px solid #9e9e9e; color: #9e9e9e;">Persona: Engineer</span>
            <span class="niche-chip" style="background: #ff9800; color: white;">Intent: Transactional</span>
        </div>
    </section>

    <!-- Cluster Status -->
    <section class="niche-cluster-status-panel">
        <h2 class="niche-panel__title">Cluster Status</h2>
        <div class="niche-progress">
            <div class="niche-progress__bar niche-progress__finalized">
                <span class="niche-progress__label">Finalized</span>
                <div class="niche-progress__track">
                    <div class="niche-progress__fill" style="width: 60%"></div>
                </div>
                <span class="niche-progress__percent">60%</span>
            </div>
            <div class="niche-progress__bar niche-progress__in-progress">
                <span class="niche-progress__label">In Progress</span>
                <div class="niche-progress__track">
                    <div class="niche-progress__fill" style="width: 30%"></div>
                </div>
                <span class="niche-progress__percent">30%</span>
            </div>
            <div class="niche-progress__bar niche-progress__new">
                <span class="niche-progress__label">New</span>
                <div class="niche-progress__track">
                    <div class="niche-progress__fill" style="width: 10%"></div>
                </div>
                <span class="niche-progress__percent">10%</span>
            </div>
        </div>
    </section>

    <!-- Data Table -->
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
