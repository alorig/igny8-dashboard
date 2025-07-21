<?php
/*
Template Name: Module Page
*/
get_header();
get_sidebar();
$page_title = get_the_title();
?>
<div class="main-content">
    <h1><?php echo esc_html($page_title); ?> Module Dashboard</h1>
    <div class="module-content">
        <?php
        switch (strtolower($page_title)) {
            case 'content scheduling':
                ?>
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
                <?php
                break;
            // Add more cases for other modules as needed
            default:
                the_content();
                break;
        }
        ?>
    </div>
</div>
<?php get_footer(); ?> 