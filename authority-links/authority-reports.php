<?php
/**
 * Template Name: Authority Reports Module
 * Template Post Type: page
 * 
 * Authority Reports Module Page
 * Loads the same Authority Reports content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Authority Reports Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the Authority Reports module. This section provides analytics and reports on your authority sites and link-building campaigns.</p>
        <div class="authority-reports-features">
            <h2>Authority Reports Features</h2>
            <ul>
                <li>Authority Site Analytics</li>
                <li>Campaign Performance</li>
                <li>Exportable Reports</li>
                <li>Trend Analysis</li>
                <li>Custom Report Builder</li>
            </ul>
        </div>
        <div class="authority-reports-overview">
            <h2>Recent Authority Reports</h2>
            <div class="authority-reports-grid">
                <div class="authority-report-card">
                    <h3>Monthly Authority Report</h3>
                    <p class="report-date">June 2025</p>
                    <p class="report-type">Authority Analytics</p>
                </div>
                <div class="authority-report-card">
                    <h3>Campaign Growth Report</h3>
                    <p class="report-date">June 2025</p>
                    <p class="report-type">Campaign Performance</p>
                </div>
                <div class="authority-report-card">
                    <h3>Custom Export</h3>
                    <p class="report-date">July 2025</p>
                    <p class="report-type">Custom</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 