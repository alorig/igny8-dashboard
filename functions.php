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
    
    // Don't redirect if already on sign-in page to prevent loops
    if (is_page('sign-in')) {
        return;
    }
    
    // Define protected pages
    $protected_pages = array('intelli', 'loops', 'hive', 'clusters', 'keywords', 'appearance', 'settings');
    
    // Check if current page is protected
    $is_protected = is_front_page() || 
                   (is_page() && in_array(get_post_field('post_name'), $protected_pages));
    
    if (!is_user_logged_in() && $is_protected) {
        wp_redirect(home_url('/sign-in/'));
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
        ),
        'sign-in' => array(
            'title' => 'Sign In',
            'template' => 'page-sign-in.php'
        ),
        'forgot-password' => array(
            'title' => 'Forgot Password',
            'template' => 'page-forgot-password.php'
        ),
        'reset-password' => array(
            'title' => 'Reset Password',
            'template' => 'page-reset-password.php'
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

// Handle logout redirects to custom sign-in page
function igny8_logout_redirect($redirect_to, $requested_redirect_to, $user) {
    // Always redirect to custom sign-in page after logout
    return home_url('/sign-in/?loggedout=true');
}
add_filter('logout_redirect', 'igny8_logout_redirect', 10, 3);

// Ensure proper logout functionality
function igny8_handle_logout() {
    if (isset($_GET['action']) && $_GET['action'] === 'logout') {
        // Verify nonce for security
        if (!wp_verify_nonce($_GET['_wpnonce'], 'igny8_logout')) {
            wp_die('Security check failed');
        }
        
        // Check if user is logged in
        if (is_user_logged_in()) {
            wp_logout();
            wp_redirect(home_url('/sign-in/?loggedout=true'));
            exit();
        } else {
            // User not logged in, redirect to sign-in
            wp_redirect(home_url('/sign-in/'));
            exit();
        }
    }
}
add_action('init', 'igny8_handle_logout');

// Handle login redirects - Always redirect to frontend dashboard
function igny8_login_redirect($redirect_to, $request, $user) {
    // If login was successful and user exists
    if (isset($user->roles) && is_array($user->roles)) {
        // Always redirect to frontend dashboard homepage, never to wp-admin
        return home_url('/');
    }
    return $redirect_to;
}
add_filter('login_redirect', 'igny8_login_redirect', 10, 3);

// Force non-admin users away from wp-admin to frontend dashboard
function igny8_admin_redirect() {
    // Only check if trying to access wp-admin
    if (strpos($_SERVER['REQUEST_URI'], 'wp-admin') !== false && 
        strpos($_SERVER['REQUEST_URI'], 'admin-ajax.php') === false &&
        strpos($_SERVER['REQUEST_URI'], 'admin-post.php') === false &&
        strpos($_SERVER['REQUEST_URI'], 'wp-login.php') === false) {
        
        // If logged in but not admin, redirect to frontend dashboard homepage
        if (is_user_logged_in() && !current_user_can('manage_options')) {
            wp_redirect(home_url('/'));
            exit;
        }
    }
}
add_action('init', 'igny8_admin_redirect', 1);

// Override WordPress default admin redirect based on user role
function igny8_override_admin_redirect($redirect_to, $request, $user) {
    // If user is admin, allow wp-admin access
    if (isset($user->roles) && in_array('administrator', $user->roles)) {
        return admin_url();
    }
    // Non-admin users go to frontend dashboard homepage
    return home_url('/');
}
add_filter('login_redirect', 'igny8_override_admin_redirect', 999, 3);

// Remove admin bar for non-admin users only
function igny8_remove_admin_bar() {
    if (!current_user_can('manage_options')) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'igny8_remove_admin_bar');

// Block access to wp-login.php and redirect to custom sign-in page
function igny8_block_wp_login() {
    // Only redirect if not already on the sign-in page
    if (!is_page('sign-in')) {
        // Only block direct access to wp-login.php, not form submissions
        if (strpos($_SERVER['REQUEST_URI'], 'wp-login.php') !== false && 
            !isset($_POST['log']) && !isset($_POST['pwd'])) {
            wp_redirect(home_url('/sign-in/'));
            exit;
        }
    }
}
add_action('init', 'igny8_block_wp_login', 1);

// Block wp-admin access for non-admins and redirect to frontend dashboard
function igny8_block_wp_admin() {
    // Only check if trying to access wp-admin
    if (strpos($_SERVER['REQUEST_URI'], 'wp-admin') !== false && 
        strpos($_SERVER['REQUEST_URI'], 'admin-ajax.php') === false &&
        strpos($_SERVER['REQUEST_URI'], 'admin-post.php') === false &&
        strpos($_SERVER['REQUEST_URI'], 'wp-login.php') === false) {
        
        // If not logged in, redirect to sign-in
        if (!is_user_logged_in()) {
            wp_redirect(home_url('/sign-in/'));
            exit;
        }
        
        // If logged in but not admin, redirect to frontend dashboard homepage
        if (!current_user_can('manage_options')) {
            wp_redirect(home_url('/'));
            exit;
        }
        // Admin users can access wp-admin normally
    }
}
add_action('init', 'igny8_block_wp_admin', 1);

// Handle login errors and redirect to custom sign-in page
function igny8_login_failed_redirect() {
    $login_page = home_url('/sign-in/');
    $error_code = '';
    
    if (isset($_GET['error'])) {
        $error_code = $_GET['error'];
    }
    
    wp_redirect($login_page . '?login=failed&error=' . $error_code);
    exit();
}
add_action('wp_login_failed', 'igny8_login_failed_redirect');

// Handle empty username/password redirects
function igny8_authenticate_redirect($user, $username, $password) {
    if (empty($username) || empty($password)) {
        $login_page = home_url('/sign-in/');
        $error = empty($username) ? 'empty_username' : 'empty_password';
        wp_redirect($login_page . '?login=failed&error=' . $error);
        exit();
    }
    return $user;
}
add_filter('authenticate', 'igny8_authenticate_redirect', 30, 3);

function igy8_enqueue_sidebar_js() {
    wp_enqueue_script('sidebar-js', get_template_directory_uri() . '/assets/js/sidebar.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'igy8_enqueue_sidebar_js');

function igny8_create_page($title, $slug, $template = '') {
    $page = get_page_by_path($slug);
    if (!$page) {
        wp_insert_post([
            'post_title'   => $title,
            'post_name'    => basename($slug),
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => ($parent = get_page_by_path(dirname($slug))) ? $parent->ID : 0,
            'page_template'=> $template,
        ]);
    }
}

function igny8_create_module_pages() {
    $modules = [
        // Content Writer
        [ 'Content Writer', 'content-writer' ],
        [ 'Content Scheduling', 'content-writer/content-scheduling' ],
        [ 'Prompt Library', 'content-writer/prompt-library' ],
        [ 'Rewrite Scheduling', 'content-writer/rewrite-scheduling' ],
        [ 'Reporting', 'content-writer/reporting' ],
        // Keywords & Clusters
        [ 'Keywords & Clusters', 'keywords-clusters' ],
        [ 'Niches', 'keywords-clusters/niches' ],
        [ 'Keywords', 'keywords-clusters/keywords' ],
        [ 'Clusters', 'keywords-clusters/clusters' ],
        [ 'Internal Linking', 'keywords-clusters/internal-linking' ],
        [ 'Reports', 'keywords-clusters/reports' ],
        // Authority & Links
        [ 'Authority & Links', 'authority-links' ],
        [ 'Backlink Campaigns', 'authority-links/backlink-campaigns' ],
        [ 'Social Campaigns', 'authority-links/social-campaigns' ],
        [ 'Authority Sites', 'authority-links/authority-sites' ],
        [ 'Authority Reports', 'authority-links/authority-reports' ],
        // Settings
        [ 'Settings', 'settings' ],
        [ 'Connected Sites', 'settings/connected-sites' ],
        [ 'Integrations', 'settings/integrations' ],
        [ 'Subscription', 'settings/subscription' ],
        [ 'Account Settings', 'settings/account-settings' ],
        [ 'Appearance', 'settings/appearance' ],
        [ 'Access Roles', 'settings/access-roles' ],
        // Admin Only
        [ 'Igny8 Theme Elements', 'igny8-theme-elements', 'igny8-theme-elements.php' ],
    ];
    foreach ($modules as $mod) {
        igny8_create_page($mod[0], $mod[1], isset($mod[2]) ? $mod[2] : '');
    }
}
add_action('after_switch_theme', 'igny8_create_module_pages');

function igny8_enqueue_tomselect_init() {
    wp_enqueue_script('tom-select-init', get_template_directory_uri() . '/assets/js/tom-select-init.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'igny8_enqueue_tomselect_init');

// Enqueue dropdown filtering script
function igny8_enqueue_dropdown_js() {
    wp_enqueue_script('dropdown-js', get_template_directory_uri() . '/assets/js/dropdown.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'igny8_enqueue_dropdown_js');



// Register Custom Post Type: Niche
function igny8_register_niche_post_type() {
    $labels = array(
        'name'               => 'Niches',
        'singular_name'      => 'Niche',
        'menu_name'          => 'Niches',
        'add_new'            => 'Add New Niche',
        'add_new_item'       => 'Add New Niche',
        'edit_item'          => 'Edit Niche',
        'new_item'           => 'New Niche',
        'view_item'          => 'View Niche',
        'search_items'       => 'Search Niches',
        'not_found'          => 'No niches found',
        'not_found_in_trash' => 'No niches found in trash'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'niche'),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-filter',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
    );

    register_post_type('niche', $args);
}
add_action('init', 'igny8_register_niche_post_type');

// Register Custom Post Type: Keyword
function igny8_register_keyword_post_type() {
    $labels = array(
        'name'               => 'Keywords',
        'singular_name'      => 'Keyword',
        'menu_name'          => 'Keywords',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Keyword',
        'edit_item'          => 'Edit Keyword',
        'new_item'           => 'New Keyword',
        'view_item'          => 'View Keyword',
        'search_items'       => 'Search Keywords',
        'not_found'          => 'No keywords found',
        'not_found_in_trash' => 'No keywords found in trash'
    );
    
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'keyword'),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 21,
        'menu_icon'           => 'dashicons-tag',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
    );
    register_post_type('keyword', $args);
}
add_action('init', 'igny8_register_keyword_post_type');

// Register Taxonomy: Niche Status
function igny8_register_niche_status_taxonomy() {
    $labels = array(
        'name'              => 'Niche Statuses',
        'singular_name'     => 'Niche Status',
        'search_items'      => 'Search Statuses',
        'all_items'         => 'All Statuses',
        'parent_item'       => 'Parent Status',
        'parent_item_colon' => 'Parent Status:',
        'edit_item'         => 'Edit Status',
        'update_item'       => 'Update Status',
        'add_new_item'      => 'Add New Status',
        'new_item_name'     => 'New Status Name',
        'menu_name'         => 'Statuses'
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'niche-status'),
    );

    register_taxonomy('niche-status', array('niche'), $args);
}
add_action('init', 'igny8_register_niche_status_taxonomy');

// Register Taxonomy: Sector
function igny8_register_sector_taxonomy() {
    $labels = array(
        'name'              => 'Sectors',
        'singular_name'     => 'Sector',
        'search_items'      => 'Search Sectors',
        'all_items'         => 'All Sectors',
        'parent_item'       => 'Parent Sector',
        'parent_item_colon' => 'Parent Sector:',
        'edit_item'         => 'Edit Sector',
        'update_item'       => 'Update Sector',
        'add_new_item'      => 'Add New Sector',
        'new_item_name'     => 'New Sector Name',
        'menu_name'         => 'Sectors'
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'sector'),
    );

    register_taxonomy('sector', array('niche'), $args);
}
add_action('init', 'igny8_register_sector_taxonomy');

// Register Taxonomy: Keyword Status
function igny8_register_keyword_status_taxonomy() {
    $labels = array(
        'name'              => 'Keyword Statuses',
        'singular_name'     => 'Keyword Status',
        'search_items'      => 'Search Statuses',
        'all_items'         => 'All Statuses',
        'parent_item'       => 'Parent Status',
        'parent_item_colon' => 'Parent Status:',
        'edit_item'         => 'Edit Status',
        'update_item'       => 'Update Status',
        'add_new_item'      => 'Add New Status',
        'new_item_name'     => 'New Status Name',
        'menu_name'         => 'Statuses'
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'keyword-status'),
    );

    register_taxonomy('keyword-status', array('keyword'), $args);
}
add_action('init', 'igny8_register_keyword_status_taxonomy');

// Register Taxonomy: Intent
function igny8_register_intent_taxonomy() {
    $labels = array(
        'name'              => 'Intents',
        'singular_name'     => 'Intent',
        'search_items'      => 'Search Intents',
        'all_items'         => 'All Intents',
        'parent_item'       => 'Parent Intent',
        'parent_item_colon' => 'Parent Intent:',
        'edit_item'         => 'Edit Intent',
        'update_item'       => 'Update Intent',
        'add_new_item'      => 'Add New Intent',
        'new_item_name'     => 'New Intent Name',
        'menu_name'         => 'Intents'
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'intent'),
    );

    register_taxonomy('intent', array('keyword'), $args);
}
add_action('init', 'igny8_register_intent_taxonomy');

// Add default terms for taxonomies
function igny8_add_default_taxonomy_terms() {
    // Add default niche statuses
    if (!term_exists('active', 'niche-status')) {
        wp_insert_term('Active', 'niche-status', array('slug' => 'active'));
    }
    if (!term_exists('inactive', 'niche-status')) {
        wp_insert_term('Inactive', 'niche-status', array('slug' => 'inactive'));
    }
    if (!term_exists('final', 'niche-status')) {
        wp_insert_term('Final', 'niche-status', array('slug' => 'final'));
    }

    // Add default sectors
    if (!term_exists('beauty', 'sector')) {
        wp_insert_term('Beauty', 'sector', array('slug' => 'beauty'));
    }
    if (!term_exists('health', 'sector')) {
        wp_insert_term('Health', 'sector', array('slug' => 'health'));
    }
    if (!term_exists('fitness', 'sector')) {
        wp_insert_term('Fitness', 'sector', array('slug' => 'fitness'));
    }
    if (!term_exists('technology', 'sector')) {
        wp_insert_term('Technology', 'sector', array('slug' => 'technology'));
    }

    // Add default keyword statuses
    if (!term_exists('new', 'keyword-status')) {
        wp_insert_term('New', 'keyword-status', array('slug' => 'new'));
    }
    if (!term_exists('clustered', 'keyword-status')) {
        wp_insert_term('Clustered', 'keyword-status', array('slug' => 'clustered'));
    }
    if (!term_exists('in-use', 'keyword-status')) {
        wp_insert_term('In-Use', 'keyword-status', array('slug' => 'in-use'));
    }
    if (!term_exists('orphaned', 'keyword-status')) {
        wp_insert_term('Orphaned', 'keyword-status', array('slug' => 'orphaned'));
    }
    if (!term_exists('archived', 'keyword-status')) {
        wp_insert_term('Archived', 'keyword-status', array('slug' => 'archived'));
    }

    // Add default intents
    if (!term_exists('informational', 'intent')) {
        wp_insert_term('Informational', 'intent', array('slug' => 'informational'));
    }
    if (!term_exists('transactional', 'intent')) {
        wp_insert_term('Transactional', 'intent', array('slug' => 'transactional'));
    }
    if (!term_exists('navigational', 'intent')) {
        wp_insert_term('Navigational', 'intent', array('slug' => 'navigational'));
    }
    if (!term_exists('commercial', 'intent')) {
        wp_insert_term('Commercial', 'intent', array('slug' => 'commercial'));
    }
}
add_action('init', 'igny8_add_default_taxonomy_terms');

?> 