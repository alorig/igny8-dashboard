<?php get_header(); ?>

<div class="wrapper">
    <?php include 'sidebar.php'; ?>
    
    <div class="main-content">
        <div class="igny8-section">
            <div class="igny8-section-header">
                <h1>Account Settings</h1>
                <p>Manage your user profile, password, and personal preferences.</p>
            </div>
            
            <div class="igny8-section-body">
                <div class="account-settings-features">
                    <h2>Account Settings Features</h2>
                    <ul>
                        <li>User Profile Management</li>
                        <li>Password Change</li>
                        <li>Notification Preferences</li>
                        <li>Account Security</li>
                        <li>Personalization</li>
                    </ul>
                </div>
                
                <div class="account-settings-overview">
                    <h2>User Profile</h2>
                    <div class="account-settings-grid">
                        <div class="account-settings-card">
                            <h3>Profile Info</h3>
                            <p class="profile-status">Complete</p>
                            <p class="profile-type">User</p>
                        </div>
                        <div class="account-settings-card">
                            <h3>Password</h3>
                            <p class="profile-status">Change Required</p>
                            <p class="profile-type">Security</p>
                        </div>
                        <div class="account-settings-card">
                            <h3>Preferences</h3>
                            <p class="profile-status">Set</p>
                            <p class="profile-type">Personalization</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?> 