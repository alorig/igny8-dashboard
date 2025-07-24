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
    <!-- Full-width Top Bar at the very top -->
    <?php 
    global $post;
    $page_title = isset($post) ? get_the_title($post) : get_bloginfo('name');
    ?>
    <div class="igny8-top-bar" style="display: flex; align-items: center; justify-content: space-between; padding: 0 24px; height: 56px; background: #222;">
        <!-- Top-left branding -->
        <div class="igny8-branding" style="display: flex; align-items: center; font-size: 1.7rem; font-weight: 700;">
            <span style="color: #fff;">Igny</span><span style="color: #4DABF7;">8</span>
        </div>
        <!-- Page title, left-aligned after sidebar -->
        <div class="igny8-top-bar-title" style="flex: 1; margin-left: 32px; color: #fff; font-size: 1.25rem; font-weight: 600; text-align: left;">
            <?php echo esc_html($page_title); ?>
        </div>
        <!-- Account menu and logout icon -->
        <div class="igny8-account-menu" style="display: flex; align-items: center; gap: 16px;">
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
            <!-- Logout Power Icon -->
            <button id="igny8-logout-btn" class="account-icon" title="Log Out" style="background: none; border: none; cursor: pointer; font-size: 1.5rem; color: #e74c3c; display: flex; align-items: center;">
                <span class="dashicons dashicons-power"></span>
            </button>
        </div>
    </div>
    <!-- Logout Confirmation Modal -->
    <div id="igny8-logout-modal" style="display:none; position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(34,34,34,0.25); z-index: 9999; align-items: center; justify-content: center;">
        <div style="background: #fff; border-radius: 16px; box-shadow: 0 8px 32px rgba(0,0,0,0.18); padding: 32px 32px 24px 32px; min-width: 340px; max-width: 90vw; display: flex; flex-direction: column; align-items: center;">
            <span style="font-size: 1.25rem; font-weight: 600; margin-bottom: 16px; color: #e74c3c;">Confirm Logout</span>
            <span style="margin-bottom: 24px; color: #333;">Are you sure you want to log out?</span>
            <div style="display: flex; gap: 16px; width: 100%; justify-content: center;">
                <form method="post" action="<?php echo wp_nonce_url(home_url('/?action=logout'), 'igny8_logout'); ?>" style="margin:0;">
                    <button type="submit" class="btn btn-danger" style="background: #e74c3c; color: #fff; border: none; border-radius: 8px; padding: 10px 24px; font-weight: 600; box-shadow: 0 2px 8px rgba(231,76,60,0.08); cursor: pointer;">Log Out</button>
                </form>
                <button id="igny8-cancel-logout" class="btn btn-light" style="background: #f7f7f7; color: #222; border: none; border-radius: 8px; padding: 10px 24px; font-weight: 500; box-shadow: 0 2px 8px rgba(34,34,34,0.04); cursor: pointer;">Cancel</button>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var logoutBtn = document.getElementById('igny8-logout-btn');
        var logoutModal = document.getElementById('igny8-logout-modal');
        var cancelLogout = document.getElementById('igny8-cancel-logout');
        if (logoutBtn && logoutModal && cancelLogout) {
            logoutBtn.addEventListener('click', function(e) {
                e.preventDefault();
                logoutModal.style.display = 'flex';
            });
            cancelLogout.addEventListener('click', function() {
                logoutModal.style.display = 'none';
            });
        }
    });
    </script>
    <div class="wrapper">
        <!-- Sidebar will be included after this in page.php --> 