<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <!-- Tom Select CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.min.css" rel="stylesheet">
    <!-- Tom Select JS -->
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
</head>
<body <?php body_class(); ?>>
    <div class="wrapper">
        <?php 
        // Top bar with page heading and account/app menu
        global $post;
        $page_title = isset($post) ? get_the_title($post) : get_bloginfo('name');
        ?>
        <div class="igny8-top-bar">
            <div class="igny8-top-bar-title"><?php echo esc_html($page_title); ?></div>
            <div class="igny8-account-menu">
                <span class="account-text">Account</span>
                <a href="<?php echo home_url('/settings/account-settings/'); ?>" class="account-icon" title="Account Settings"><span class="dashicons dashicons-admin-users"></span></a>
                <a href="<?php echo home_url('/settings/appearance/'); ?>" class="account-icon" title="Appearance"><span class="dashicons dashicons-admin-appearance"></span></a>
                <div class="account-dropdown">
                    <button class="account-icon" title="More"><span class="dashicons dashicons-menu"></span></button>
                    <div class="account-dropdown-content">
                        <a href="<?php echo home_url('/settings/connected-sites/'); ?>">Connected Sites</a>
                        <a href="<?php echo home_url('/settings/integrations/'); ?>">Integrations</a>
                        <a href="<?php echo home_url('/settings/subscription/'); ?>">Subscription</a>
                        <a href="<?php echo home_url('/settings/access-roles/'); ?>">Access Roles</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar will be included after this in page.php --> 