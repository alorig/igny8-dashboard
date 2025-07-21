<?php
/**
 * Template Name: Content Scheduling Module
 * Template Post Type: page
 * 
 * Content Scheduling Module Page
 * Loads the same Content Scheduling content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Content Scheduling Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the Content Scheduling module. This section manages your editorial calendar, scheduling, and publishing workflow.</p>
        <div class="content-scheduling-features">
            <h2>Content Scheduling Features</h2>
            <ul>
                <li>Editorial Calendar</li>
                <li>Automated Publishing</li>
                <li>Content Reminders</li>
                <li>Team Collaboration</li>
                <li>Scheduling Analytics</li>
            </ul>
        </div>
        <div class="content-scheduling-overview">
            <h2>Upcoming Scheduled Content</h2>
            <div class="content-scheduling-grid">
                <div class="content-schedule-card">
                    <h3>Blog Post: SEO Trends</h3>
                    <p class="schedule-date">July 25, 2025</p>
                    <p class="schedule-type">Blog</p>
                </div>
                <div class="content-schedule-card">
                    <h3>Newsletter: July Edition</h3>
                    <p class="schedule-date">July 28, 2025</p>
                    <p class="schedule-type">Newsletter</p>
                </div>
                <div class="content-schedule-card">
                    <h3>Case Study: Market Analysis</h3>
                    <p class="schedule-date">August 1, 2025</p>
                    <p class="schedule-type">Case Study</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 