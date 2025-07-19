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
    if (!is_user_logged_in() && (is_front_page() || is_page(array('intelli', 'loops', 'hive', 'clusters', 'keywords', 'appearance')))) {
        wp_redirect(wp_login_url());
        exit;
    }
}
add_action('template_redirect', 'igny8_require_login');

// Create required pages when theme is activated
function igny8_create_pages() {
    $pages = array(
        'intelli' => array(
            'title' => 'INTELLI Module',
            'template' => 'page-intelli.php'
        ),
        'loops' => array(
            'title' => 'LOOPS Module',
            'template' => 'page-loops.php'
        ),
        'hive' => array(
            'title' => 'HIVE Module',
            'template' => 'page-hive.php'
        ),
        'clusters' => array(
            'title' => 'Clusters Module',
            'template' => 'page-clusters.php'
        ),
        'keywords' => array(
            'title' => 'Keywords Module',
            'template' => 'page-keywords.php'
        ),
        'appearance' => array(
            'title' => 'Appearance Settings',
            'template' => 'page-appearance.php'
        )
    );
    
    foreach ($pages as $slug => $page_data) {
        $existing_page = get_page_by_path($slug);
        if (!$existing_page) {
            $page_id = wp_insert_post(array(
                'post_title' => $page_data['title'],
                'post_name' => $slug,
                'post_status' => 'publish',
                'post_type' => 'page',
                'page_template' => $page_data['template']
            ));
        }
    }
}
add_action('after_switch_theme', 'igny8_create_pages');

// Also create pages on theme load for existing installations
add_action('init', 'igny8_create_pages');
?> 