<?php
/**
 * Igny8 Dashboard Theme Functions
 * Optimized for proper enqueueing and performance
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue theme styles with proper dependencies and versioning
function igny8_dashboard_enqueue_styles() {
    // Enqueue main theme stylesheet with version for cache busting
    wp_enqueue_style(
        'igny8-dashboard-style', 
        get_template_directory_uri() . '/assets/css/style.css',
        array(), // No dependencies
        filemtime(get_template_directory() . '/assets/css/style.css'), // Version based on file modification time
        'all'
    );
    
    // Enqueue Dashicons for admin-style icons
    wp_enqueue_style('dashicons');
    
    // Add inline styles for critical CSS if needed
    wp_add_inline_style('igny8-dashboard-style', '
        /* Critical CSS for immediate rendering */
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
        .sidebar { width: 250px; background: #2c3e50; }
        .main-content { margin-left: 250px; }
    ');
}
add_action('wp_enqueue_scripts', 'igny8_dashboard_enqueue_styles', 10);

// Enqueue theme scripts
function igny8_dashboard_enqueue_scripts() {
    // Add theme switcher functionality inline to avoid file loading issues
    wp_add_inline_script('jquery', '
        jQuery(document).ready(function($) {
            // Load saved theme on page load
            const savedTheme = localStorage.getItem("igny8-theme") || "blue";
            if (savedTheme !== "blue") {
                document.documentElement.setAttribute("data-theme", savedTheme);
            }
            
            // Show Settings submenu on settings pages
            const currentPath = window.location.pathname;
            if (currentPath.includes("/settings/") || currentPath.includes("/appearance/")) {
                const settingsMenu = document.querySelector(".settings-menu");
                if (settingsMenu) {
                    settingsMenu.classList.add("active");
                }
            }
            
            // Theme switcher functionality
            $("#theme-selector").on("change", function() {
                const selectedTheme = $(this).val();
                document.documentElement.setAttribute("data-theme", selectedTheme);
                localStorage.setItem("igny8-theme", selectedTheme);
                location.reload(); // Reload to ensure all styles are applied
            });
            
            // Settings menu toggle
            $(".settings-toggle").on("click", function(e) {
                e.preventDefault();
                const settingsMenu = $(this).closest(".settings-menu");
                settingsMenu.toggleClass("active");
            });
        });
    ');
}
add_action('wp_enqueue_scripts', 'igny8_dashboard_enqueue_scripts', 20);

// Force login for dashboard pages with better error handling
function igny8_require_login() {
    // Only check on frontend
    if (is_admin()) {
        return;
    }
    
    // Define protected pages
    $protected_pages = array('intelli', 'loops', 'hive', 'clusters', 'keywords', 'appearance', 'settings');
    
    // Check if current page is protected
    $is_protected = is_front_page() || 
                   (is_page() && in_array(get_post_field('post_name'), $protected_pages));
    
    if (!is_user_logged_in() && $is_protected) {
        wp_redirect(wp_login_url(get_permalink()));
        exit;
    }
}
add_action('template_redirect', 'igny8_require_login', 1);

// Hide admin bar for non-admins
function igny8_hide_admin_bar_for_non_admins() {
    if (!current_user_can('manage_options')) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'igny8_hide_admin_bar_for_non_admins');

// Add theme customizer support
function igny8_customize_register($wp_customize) {
    // Add section for logo
    $wp_customize->add_section('igny8_logo_section', array(
        'title' => 'Igny8 Dashboard Logo',
        'priority' => 30,
    ));
    
    // Add setting for logo
    $wp_customize->add_setting('igny8_custom_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    
    // Add control for logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'igny8_custom_logo', array(
        'label' => 'Upload Logo',
        'description' => 'Upload a logo to replace the "Igny8 Admin" text in the sidebar. Recommended size: 200x60px.',
        'section' => 'igny8_logo_section',
        'settings' => 'igny8_custom_logo',
    )));
}
add_action('customize_register', 'igny8_customize_register');

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
        ),
        'settings' => array(
            'title' => 'Settings',
            'template' => 'page-settings.php'
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
            
            // Log page creation for debugging
            if (is_wp_error($page_id)) {
                error_log('Igny8 Dashboard: Failed to create page ' . $slug . ' - ' . $page_id->get_error_message());
            }
        }
    }
}

// Create pages on theme activation
add_action('after_switch_theme', 'igny8_create_pages');

// Also create pages on theme load for existing installations (but only once)
function igny8_create_pages_on_init() {
    static $pages_created = false;
    
    if (!$pages_created) {
        igny8_create_pages();
        $pages_created = true;
    }
}
add_action('init', 'igny8_create_pages_on_init', 5);

// Add theme support features
function igny8_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add custom image sizes if needed
    add_image_size('igny8-logo', 200, 60, false);
}
add_action('after_setup_theme', 'igny8_theme_setup');

// Helper function to get logo URL
function igny8_get_logo_url() {
    $custom_logo = get_theme_mod('igny8_custom_logo');
    if ($custom_logo) {
        return esc_url($custom_logo);
    }
    return false;
}

// Add body class for better styling control
function igny8_body_classes($classes) {
    $classes[] = 'igny8-dashboard';
    return $classes;
}
add_filter('body_class', 'igny8_body_classes');
?> 