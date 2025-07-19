<div class="sidebar">
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
        <li><a href="<?php echo home_url('/'); ?>"><span class="dashicons dashicons-dashboard"></span>Dashboard</a></li>
        <li><a href="<?php echo home_url('/intelli/'); ?>"><span class="dashicons dashicons-analytics"></span>INTELLI</a></li>
        <li><a href="<?php echo home_url('/loops/'); ?>"><span class="dashicons dashicons-update"></span>LOOPS</a></li>
        <li><a href="<?php echo home_url('/hive/'); ?>"><span class="dashicons dashicons-networking"></span>HIVE</a></li>
        <li><a href="<?php echo home_url('/clusters/'); ?>"><span class="dashicons dashicons-category"></span>Clusters</a></li>
        <li><a href="<?php echo home_url('/keywords/'); ?>"><span class="dashicons dashicons-tag"></span>Keywords</a></li>
        <li class="settings-menu">
            <a href="<?php echo home_url('/settings/'); ?>" class="settings-toggle"><span class="dashicons dashicons-admin-settings"></span>Settings</a>
            <ul class="submenu">
                <li><a href="<?php echo home_url('/appearance/'); ?>"><span class="dashicons dashicons-admin-appearance"></span>Appearance</a></li>
            </ul>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="<?php echo wp_nonce_url(home_url('/?action=logout'), 'igny8_logout'); ?>" class="logout-button" onclick="return confirm('Are you sure you want to logout?')">
            <span class="dashicons dashicons-exit"></span>Logout
        </a>
    </div>
</div> 