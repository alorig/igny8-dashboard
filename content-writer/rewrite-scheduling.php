<?php
/**
 * Template Name: Rewrite Scheduling Module
 * Template Post Type: page
 * 
 * Rewrite Scheduling Module Page
 * Loads the same Rewrite Scheduling content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Rewrite Scheduling Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the Rewrite Scheduling module. This section manages the scheduling and automation of content rewrites for SEO and freshness.</p>
        <div class="rewrite-scheduling-features">
            <h2>Rewrite Scheduling Features</h2>
            <ul>
                <li>Automated Rewrite Scheduling</li>
                <li>Content Freshness Tracking</li>
                <li>SEO Optimization</li>
                <li>Rewrite History</li>
                <li>Team Collaboration</li>
            </ul>
        </div>
        <div class="rewrite-scheduling-overview">
            <h2>Upcoming Rewrites</h2>
            <div class="rewrite-scheduling-grid">
                <div class="rewrite-schedule-card">
                    <h3>Blog Post: Keyword Update</h3>
                    <p class="rewrite-date">July 30, 2025</p>
                    <p class="rewrite-type">Blog</p>
                </div>
                <div class="rewrite-schedule-card">
                    <h3>Landing Page: Refresh</h3>
                    <p class="rewrite-date">August 2, 2025</p>
                    <p class="rewrite-type">Landing Page</p>
                </div>
                <div class="rewrite-schedule-card">
                    <h3>Case Study: Update</h3>
                    <p class="rewrite-date">August 5, 2025</p>
                    <p class="rewrite-type">Case Study</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 