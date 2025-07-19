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
    <h1>INTELLI Module</h1>
    
    <div class="card module-content">
        <div class="card-header">
            <h2 class="card-title">Intelligence & Analytics</h2>
            <p class="card-subtitle">Advanced AI-powered insights and data analysis</p>
        </div>
        <div class="card-content">
            <p>The INTELLI module provides comprehensive intelligence and analytics capabilities for your automation workflows. Monitor performance, analyze patterns, and optimize your processes with AI-driven insights.</p>
        </div>
    </div>

    <div class="stats-grid">
        <div class="card stat-card">
            <div class="stat-number">1,247</div>
            <div class="text-secondary">Total Analyses</div>
        </div>
        
        <div class="card stat-card">
            <div class="stat-number">89.2%</div>
            <div class="text-secondary">Accuracy Rate</div>
        </div>
        
        <div class="card stat-card">
            <div class="stat-number">156</div>
            <div class="text-secondary">Active Models</div>
        </div>
        
        <div class="card stat-card">
            <div class="stat-number">2.3s</div>
            <div class="text-secondary">Avg Response Time</div>
        </div>
    </div>

    <div class="grid grid-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Recent Insights</h3>
            </div>
            <div class="card-content">
                <ul>
                    <li>Pattern detection improved by 23% this week</li>
                    <li>New anomaly detection model deployed</li>
                    <li>Performance optimization completed</li>
                    <li>Data quality score: 94.7%</li>
                </ul>
            </div>
        </div>

        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">System Health</h3>
            </div>
            <div class="card-content">
                <ul>
                    <li>All systems operational</li>
                    <li>Memory usage: 67%</li>
                    <li>CPU utilization: 42%</li>
                    <li>Network latency: 12ms</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?> 