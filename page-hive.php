<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="main-content">
    <h1>HIVE Module Dashboard</h1>
    <div class="module-card">
        <h2>Module Features</h2>
        <ul>
            <li>Collaborative Workspaces</li>
            <li>Team Communication</li>
            <li>Resource Sharing</li>
            <li>Project Management</li>
            <li>Real-time Collaboration</li>
        </ul>
    </div>
    <h2>Current Statistics</h2>
    <div class="stats-row">
        <div class="stats-card">
            <h3>Active Workspaces</h3>
            <span class="data-count"></span>
        </div>
        <div class="stats-card">
            <h3>Team Members</h3>
            <span class="data-count"></span>
        </div>
        <div class="stats-card">
            <h3>Recent Activities</h3>
            <span class="data-count"></span>
        </div>
    </div>
</div>
<?php get_footer(); ?> 