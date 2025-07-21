<?php
/**
 * Template Name: Niches Module
 * Template Post Type: page
 * 
 * Niches Module Page
 * Loads the same Niches content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Niches Module Dashboard</h1>
    <div class="module-content">
        <p>Welcome to the Niches module. This section manages data niching, organization, and grouping functionality.</p>
        
        <div class="niches-features">
            <h2>Niches Features</h2>
            <ul>
                <li>Data Niching Algorithms</li>
                <li>Group Organization</li>
                <li>Pattern Recognition</li>
                <li>Data Segmentation</li>
                <li>Niche Analytics</li>
            </ul>
        </div>
        
        <div class="niches-overview">
            <h2>Active Niches</h2>
            <div class="niches-grid">
                <div class="niche-card">
                    <h3>User Interest Niche</h3>
                    <p class="niche-size">1,234 items</p>
                    <p class="niche-type">Interest Analysis</p>
                </div>
                <div class="niche-card">
                    <h3>Market Segments</h3>
                    <p class="niche-size">98 items</p>
                    <p class="niche-type">Market Classification</p>
                </div>
                <div class="niche-card">
                    <h3>Performance Niches</h3>
                    <p class="niche-size">45 items</p>
                    <p class="niche-type">Performance Analysis</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 