<div class="sidebar" id="sidebar">
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
    </ul>
    <?php if (current_user_can('administrator')): ?>
      <div class="menu-section">ADMIN SECTION</div>
      <ul class="sidebar-menu">
        <li><a href="<?php echo home_url('/igny8-theme-elements'); ?>"><span class="dashicons dashicons-admin-customizer"></span>Igny8 Theme Elements</a></li>
      </ul>
    <?php endif; ?>
    <div class="sidebar-footer" style="justify-content: flex-end; align-items: flex-end; display: flex; height: 48px; padding: 0 12px;">
        <button id="sidebar-toggle" class="sidebar-toggle" title="Collapse Sidebar" style="margin-left:auto; display: flex; align-items: center; justify-content: center; background: none; border: none; cursor: pointer; font-size: 22px; color: #4DABF7;">
            <span class="dashicons dashicons-arrow-left-alt2"></span>
        </button>
    </div>
</div> 