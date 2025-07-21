<?php
/**
 * Template Name: Social Campaigns Module
 * Template Post Type: page
 * 
 * Social Campaigns Module Page
 * Loads the same Social Campaigns content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Social Campaigns Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the Social Campaigns module. This section manages your social media outreach, engagement, and campaign analytics.</p>
        <div class="social-campaigns-features">
            <h2>Social Campaigns Features</h2>
            <ul>
                <li>Social Media Management</li>
                <li>Engagement Tracking</li>
                <li>Campaign Analytics</li>
                <li>Automated Posting</li>
                <li>Social Reports</li>
            </ul>
        </div>
        <div class="social-campaigns-overview">
            <h2>Active Social Campaigns</h2>
            <div class="social-campaigns-grid">
                <div class="social-campaign-card">
                    <h3>Twitter Outreach</h3>
                    <p class="campaign-status">Active</p>
                    <p class="campaign-type">Twitter</p>
                </div>
                <div class="social-campaign-card">
                    <h3>Facebook Ads</h3>
                    <p class="campaign-status">Planned</p>
                    <p class="campaign-type">Facebook</p>
                </div>
                <div class="social-campaign-card">
                    <h3>Instagram Influencers</h3>
                    <p class="campaign-status">Completed</p>
                    <p class="campaign-type">Instagram</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 