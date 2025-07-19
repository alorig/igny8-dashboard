<?php
/**
 * Template Name: Keywords Module
 * Template Post Type: page
 * 
 * Keywords Module Page
 * Loads the same Keywords content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Keywords Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the Keywords module. This section manages keyword optimization, tracking, and performance analysis.</p>
        
        <div class="keywords-features">
            <h2>Keywords Features</h2>
            <ul>
                <li>Keyword Research Tools</li>
                <li>Performance Tracking</li>
                <li>Ranking Analysis</li>
                <li>Competitor Analysis</li>
                <li>Optimization Suggestions</li>
            </ul>
        </div>
        
        <div class="keywords-overview">
            <h2>Keyword Performance</h2>
            <div class="keywords-grid">
                <div class="keyword-card">
                    <h3>Top Performing Keywords</h3>
                    <p class="keyword-count">247 keywords</p>
                    <p class="keyword-performance">Avg. ranking: 3.2</p>
                </div>
                <div class="keyword-card">
                    <h3>Target Keywords</h3>
                    <p class="keyword-count">89 keywords</p>
                    <p class="keyword-performance">Avg. ranking: 7.8</p>
                </div>
                <div class="keyword-card">
                    <h3>Long-tail Keywords</h3>
                    <p class="keyword-count">1,234 keywords</p>
                    <p class="keyword-performance">Avg. ranking: 12.5</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 