<?php
/**
 * Template Name: Internal Linking Module
 * Template Post Type: page
 * 
 * Internal Linking Module Page
 * Loads the same Internal Linking content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Internal Linking Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the Internal Linking module. This section manages internal link strategies, anchor text optimization, and link structure analysis.</p>
        <div class="internal-linking-features">
            <h2>Internal Linking Features</h2>
            <ul>
                <li>Anchor Text Optimization</li>
                <li>Link Structure Analysis</li>
                <li>Automated Link Suggestions</li>
                <li>Link Performance Tracking</li>
                <li>Internal Link Reports</li>
            </ul>
        </div>
        <div class="internal-linking-overview">
            <h2>Active Internal Links</h2>
            <div class="internal-linking-grid">
                <div class="internal-link-card">
                    <h3>Homepage Links</h3>
                    <p class="link-count">120 links</p>
                    <p class="link-type">Navigation</p>
                </div>
                <div class="internal-link-card">
                    <h3>Blog Post Links</h3>
                    <p class="link-count">340 links</p>
                    <p class="link-type">Content</p>
                </div>
                <div class="internal-link-card">
                    <h3>Footer Links</h3>
                    <p class="link-count">45 links</p>
                    <p class="link-type">Footer</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 