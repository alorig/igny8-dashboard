<?php
/**
 * Template Name: Prompt Library Module
 * Template Post Type: page
 * 
 * Prompt Library Module Page
 * Loads the same Prompt Library content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Prompt Library Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the Prompt Library module. This section manages your collection of AI prompts for content generation and workflow automation.</p>
        <div class="prompt-library-features">
            <h2>Prompt Library Features</h2>
            <ul>
                <li>Prompt Management</li>
                <li>Prompt Categorization</li>
                <li>Reusable Templates</li>
                <li>Prompt Sharing</li>
                <li>Prompt Analytics</li>
            </ul>
        </div>
        <div class="prompt-library-overview">
            <h2>Available Prompts</h2>
            <div class="prompt-library-grid">
                <div class="prompt-card">
                    <h3>SEO Blog Prompt</h3>
                    <p class="prompt-type">SEO</p>
                </div>
                <div class="prompt-card">
                    <h3>Newsletter Prompt</h3>
                    <p class="prompt-type">Email</p>
                </div>
                <div class="prompt-card">
                    <h3>Social Media Prompt</h3>
                    <p class="prompt-type">Social</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 