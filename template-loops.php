<?php
/**
 * Template Name: LOOPS
 * 
 * LOOPS Module Dashboard
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>LOOPS Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the LOOPS module. This section manages automation workflows, recurring tasks, and process optimization.</p>
        
        <div class="loops-features">
            <h2>LOOPS Features</h2>
            <ul>
                <li>Workflow Automation</li>
                <li>Task Scheduling</li>
                <li>Process Optimization</li>
                <li>Recurring Operations</li>
                <li>Performance Monitoring</li>
            </ul>
        </div>
        
        <div class="loops-status">
            <h2>Active Loops</h2>
            <div class="loops-grid">
                <div class="loop-card">
                    <h3>Data Sync Loop</h3>
                    <p class="loop-status active">Active</p>
                    <p>Last run: 2 minutes ago</p>
                </div>
                <div class="loop-card">
                    <h3>Backup Loop</h3>
                    <p class="loop-status active">Active</p>
                    <p>Last run: 1 hour ago</p>
                </div>
                <div class="loop-card">
                    <h3>Analytics Loop</h3>
                    <p class="loop-status paused">Paused</p>
                    <p>Last run: 3 hours ago</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 