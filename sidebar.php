<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <?php 
        $custom_logo = get_theme_mod('igny8_custom_logo');
        if ($custom_logo) {
            echo '<img src="' . esc_url($custom_logo) . '" alt="Igny8 Admin" class="sidebar-logo">';
        } else {
            echo '<h2>Igny8 Admin</h2>';
        }
        ?>
    </div>
    <ul class="sidebar-menu">
        <li><a href="<?php echo home_url('/'); ?>"<?php if ($_SERVER['REQUEST_URI'] == '/') echo ' class="active"'; ?>><span class="dashicons dashicons-dashboard"></span>Dashboard</a></li>
        <li class="menu-section">Content Writer</li>
        <li><a href="<?php echo home_url('/content-writer/content-scheduling/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/content-writer/content-scheduling') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-calendar"></span>Content Scheduling</a></li>
        <li><a href="<?php echo home_url('/content-writer/prompt-library/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/content-writer/prompt-library') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-lightbulb"></span>Prompt Library</a></li>
        <li><a href="<?php echo home_url('/content-writer/rewrite-scheduling/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/content-writer/rewrite-scheduling') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-update"></span>Rewrite Scheduling</a></li>
        <li><a href="<?php echo home_url('/content-writer/reporting/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/content-writer/reporting') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-chart-bar"></span>Reporting</a></li>
        <li class="menu-section">Keywords & Clusters</li>
        <li><a href="<?php echo home_url('/keywords-clusters/niches/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/keywords-clusters/niches') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-filter"></span>Niches</a></li>
        <li><a href="<?php echo home_url('/keywords-clusters/keywords/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/keywords-clusters/keywords') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-tag"></span>Keywords</a></li>
        <li><a href="<?php echo home_url('/keywords-clusters/clusters/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/keywords-clusters/clusters') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-category"></span>Clusters</a></li>
        <li><a href="<?php echo home_url('/keywords-clusters/internal-linking/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/keywords-clusters/internal-linking') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-admin-links"></span>Internal Linking</a></li>
        <li><a href="<?php echo home_url('/keywords-clusters/reports/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/keywords-clusters/reports') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-media-document"></span>Reports</a></li>
        <li class="menu-section">Authority & Links</li>
        <li><a href="<?php echo home_url('/authority-links/backlink-campaigns/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/authority-links/backlink-campaigns') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-admin-links"></span>Backlink Campaigns</a></li>
        <li><a href="<?php echo home_url('/authority-links/social-campaigns/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/authority-links/social-campaigns') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-share"></span>Social Campaigns</a></li>
        <li><a href="<?php echo home_url('/authority-links/authority-sites/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/authority-links/authority-sites') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-admin-multisite"></span>Authority Sites</a></li>
        <li><a href="<?php echo home_url('/authority-links/authority-reports/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/authority-links/authority-reports') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-chart-area"></span>Authority Reports</a></li>
        <li class="menu-section">Settings</li>
        <li class="settings-menu">
            <a href="#" class="settings-toggle"><span class="dashicons dashicons-admin-settings"></span>Settings</a>
            <ul class="submenu">
                <li><a href="<?php echo home_url('/settings/connected-sites/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/settings/connected-sites') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-admin-site"></span>Connected Sites</a></li>
                <li><a href="<?php echo home_url('/settings/integrations/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/settings/integrations') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-randomize"></span>Integrations</a></li>
                <li><a href="<?php echo home_url('/settings/subscription/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/settings/subscription') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-tickets-alt"></span>Subscription</a></li>
                <li><a href="<?php echo home_url('/settings/account-settings/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/settings/account-settings') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-admin-users"></span>Account Settings</a></li>
                <li><a href="<?php echo home_url('/settings/appearance/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/settings/appearance') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-admin-appearance"></span>Appearance</a></li>
                <li><a href="<?php echo home_url('/settings/access-roles/'); ?>"<?php if (strpos($_SERVER['REQUEST_URI'], '/settings/access-roles') !== false) echo ' class="active"'; ?>><span class="dashicons dashicons-unlock"></span>Access Roles</a></li>
            </ul>
        </li>
    </ul>
    <div class="sidebar-footer">
        <button id="sidebar-toggle" class="sidebar-toggle" title="Collapse Sidebar"><span class="dashicons dashicons-arrow-left-alt2"></span></button>
        <a href="<?php echo wp_nonce_url(home_url('/?action=logout'), 'igny8_logout'); ?>" class="logout-button" onclick="return confirm('Are you sure you want to logout?')">
            <span class="dashicons dashicons-exit"></span>Logout
        </a>
    </div>
</div> 