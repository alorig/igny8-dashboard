<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="main-content">
    <h1>LOOPS Module Dashboard</h1>
    <div class="module-card">
        <h2>Module Features</h2>
        <ul>
            <li>Workflow Automation</li>
            <li>Task Scheduling</li>
            <li>Process Optimization</li>
            <li>Recurring Operations</li>
            <li>Performance Monitoring</li>
        </ul>
    </div>
    <h2>Current Statistics</h2>
    <div class="stats-row">
        <div class="stats-card">
            <h3>Active Loops</h3>
            <span class="data-count"></span>
            <span class="status-indicator status-active">Active</span>
        </div>
        <div class="stats-card">
            <h3>Completed Loops</h3>
            <span class="data-count"></span>
        </div>
        <div class="stats-card">
            <h3>Paused Loops</h3>
            <span class="data-count"></span>
            <span class="status-indicator status-paused">Paused</span>
        </div>
    </div>
</div>
<?php get_footer(); ?> 