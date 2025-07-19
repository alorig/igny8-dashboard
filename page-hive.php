<?php
/**
 * Template Name: HIVE Module
 * Template Post Type: page
 * 
 * HIVE Module Page
 * Loads the same HIVE content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>HIVE Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the HIVE module. This section manages collaborative workspaces, team communication, and shared resources.</p>
        
        <div class="hive-features">
            <h2>HIVE Features</h2>
            <ul>
                <li>Collaborative Workspaces</li>
                <li>Team Communication</li>
                <li>Resource Sharing</li>
                <li>Project Management</li>
                <li>Real-time Collaboration</li>
            </ul>
        </div>
        
        <div class="hive-workspaces">
            <h2>Active Workspaces</h2>
            <div class="workspace-grid">
                <div class="workspace-card">
                    <h3>Development Team</h3>
                    <p class="workspace-members">12 members</p>
                    <p class="workspace-activity">Last activity: 5 minutes ago</p>
                </div>
                <div class="workspace-card">
                    <h3>Marketing Team</h3>
                    <p class="workspace-members">8 members</p>
                    <p class="workspace-activity">Last activity: 1 hour ago</p>
                </div>
                <div class="workspace-card">
                    <h3>Support Team</h3>
                    <p class="workspace-members">15 members</p>
                    <p class="workspace-activity">Last activity: 30 minutes ago</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 