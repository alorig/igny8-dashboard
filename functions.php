<?php
/**
 * Igny8 Dashboard Theme Functions
 */

// Enqueue theme styles for frontend
function igny8_dashboard_enqueue_styles() {
    wp_enqueue_style('igny8-dashboard-style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'igny8_dashboard_enqueue_styles');

// Force login for dashboard pages
function igny8_require_login() {
    if (!is_user_logged_in() && is_page(array('dashboard', 'intelli', 'loops', 'hive', 'clusters', 'keywords'))) {
        wp_redirect(wp_login_url());
        exit;
    }
}
add_action('template_redirect', 'igny8_require_login');
?> 