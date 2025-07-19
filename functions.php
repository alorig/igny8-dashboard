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
    if (!is_user_logged_in() && (is_front_page() || is_page(array('intelli', 'loops', 'hive', 'clusters', 'keywords')))) {
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

// Create admin menu structure (keep for wp-admin access if needed)
function igny8_dashboard_menu() {
    add_menu_page(
        'Igny8 Dashboard', 
        'Igny8', 
        'manage_options', 
        'dashboard', 
        'igny8_dashboard_page', 
        'dashicons-admin-generic', 
        2
    );
    
    add_submenu_page(
        'dashboard', 
        'INTELLI', 
        'INTELLI', 
        'manage_options', 
        'template-intelli', 
        'igny8_intelli_page'
    );
    
    add_submenu_page(
        'dashboard', 
        'LOOPS', 
        'LOOPS', 
        'manage_options', 
        'template-loops', 
        'igny8_loops_page'
    );
    
    add_submenu_page(
        'dashboard', 
        'HIVE', 
        'HIVE', 
        'manage_options', 
        'template-hive', 
        'igny8_hive_page'
    );
    
    add_submenu_page(
        'dashboard', 
        'Clusters', 
        'Clusters', 
        'manage_options', 
        'template-clusters', 
        'igny8_clusters_page'
    );
    
    add_submenu_page(
        'dashboard', 
        'Keywords', 
        'Keywords', 
        'manage_options', 
        'template-keywords', 
        'igny8_keywords_page'
    );
}
add_action('admin_menu', 'igny8_dashboard_menu');

// Dashboard page callback
function igny8_dashboard_page() {
    include get_template_directory() . '/dashboard.php';
}

// INTELLI page callback
function igny8_intelli_page() {
    include get_template_directory() . '/template-intelli.php';
}

// LOOPS page callback
function igny8_loops_page() {
    include get_template_directory() . '/template-loops.php';
}

// HIVE page callback
function igny8_hive_page() {
    include get_template_directory() . '/template-hive.php';
}

// Clusters page callback
function igny8_clusters_page() {
    include get_template_directory() . '/template-clusters.php';
}

// Keywords page callback
function igny8_keywords_page() {
    include get_template_directory() . '/template-keywords.php';
}
?> 