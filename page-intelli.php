<?php
/**
 * Template Name: INTELLI Module
 * Template Post Type: page
 * 
 * INTELLI Module Page
 * Loads the same INTELLI content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>INTELLI Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the INTELLI (Intelligence) module. This section provides advanced analytics, data insights, and intelligent reporting capabilities.</p>
        
        <div class="intelli-features">
            <h2>INTELLI Features</h2>
            <ul>
                <li>Advanced Analytics Dashboard</li>
                <li>Data Visualization Tools</li>
                <li>Predictive Analytics</li>
                <li>Performance Metrics</li>
                <li>Intelligent Reporting</li>
            </ul>
        </div>
        
        <div class="intelli-stats">
            <h2>Current Statistics</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>Data Points</h3>
                    <p class="stat-number">1,247</p>
                </div>
                <div class="stat-card">
                    <h3>Analytics Reports</h3>
                    <p class="stat-number">89</p>
                </div>
                <div class="stat-card">
                    <h3>Active Insights</h3>
                    <p class="stat-number">156</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 