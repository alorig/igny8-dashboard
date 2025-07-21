<?php
/**
 * Template Name: Integrations Module
 * Template Post Type: page
 * 
 * Integrations Module Page
 * Loads the same Integrations content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Integrations Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the Integrations module. This section manages your third-party integrations and API connections.</p>
        <div class="integrations-features">
            <h2>Integrations Features</h2>
            <ul>
                <li>API Connection Management</li>
                <li>Integration Status</li>
                <li>Platform Analytics</li>
                <li>Automated Sync</li>
                <li>Integration Reports</li>
            </ul>
        </div>
        <div class="integrations-overview">
            <h2>Active Integrations</h2>
            <div class="integrations-grid">
                <div class="integration-card">
                    <h3>Zapier</h3>
                    <p class="integration-status">Connected</p>
                    <p class="integration-type">Automation</p>
                </div>
                <div class="integration-card">
                    <h3>Mailchimp</h3>
                    <p class="integration-status">Connected</p>
                    <p class="integration-type">Email</p>
                </div>
                <div class="integration-card">
                    <h3>Slack</h3>
                    <p class="integration-status">Connected</p>
                    <p class="integration-type">Communication</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 