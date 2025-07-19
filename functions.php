<?php
/**
 * Igny8 Dashboard Theme Functions
 */

// Enqueue admin styles
function igny8_dashboard_enqueue_styles() {
    wp_enqueue_style('igny8-dashboard-style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('admin_enqueue_scripts', 'igny8_dashboard_enqueue_styles');

// Create admin menu structure
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