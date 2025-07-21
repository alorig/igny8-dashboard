<?php
/**
 * Template Name: Reports Module
 * Template Post Type: page
 * 
 * Reports Module Page
 * Loads the same Reports content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Reports Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the Reports module. This section provides analytics, summaries, and exportable data for your keywords and clusters.</p>
        <div class="reports-features">
            <h2>Reports Features</h2>
            <ul>
                <li>Keyword Analytics</li>
                <li>Cluster Performance</li>
                <li>Exportable Reports</li>
                <li>Trend Analysis</li>
                <li>Custom Report Builder</li>
            </ul>
        </div>
        <div class="reports-overview">
            <h2>Recent Reports</h2>
            <div class="reports-grid">
                <div class="report-card">
                    <h3>Monthly Keyword Report</h3>
                    <p class="report-date">June 2025</p>
                    <p class="report-type">Keyword Analytics</p>
                </div>
                <div class="report-card">
                    <h3>Cluster Growth Report</h3>
                    <p class="report-date">June 2025</p>
                    <p class="report-type">Cluster Performance</p>
                </div>
                <div class="report-card">
                    <h3>Custom Export</h3>
                    <p class="report-date">July 2025</p>
                    <p class="report-type">Custom</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 