<?php
/**
 * Front Page - Dashboard for Root Domain
 * Loads the same dashboard content as wp-admin but on frontend
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <div class="dashboard-welcome">
        <h1>Welcome to Igny8 Dashboard</h1>
        <p>Manage your intelligent automation workflows, data clusters, and keyword strategies from one central location.</p>
    </div>

    <div class="module-grid">
        <div class="card module-card">
            <div class="card-header">
                <h3 class="card-title">INTELLI Module</h3>
            </div>
            <div class="card-content">
                <p>Advanced AI-powered intelligence and analytics for your automation workflows.</p>
            </div>
            <div class="card-footer">
                <a href="<?php echo get_permalink(get_page_by_path('intelli')); ?>" class="btn btn-primary">Access Module</a>
            </div>
        </div>

        <div class="card module-card">
            <div class="card-header">
                <h3 class="card-title">LOOPS Module</h3>
            </div>
            <div class="card-content">
                <p>Create and manage automated loops and workflow sequences for repetitive tasks.</p>
            </div>
            <div class="card-footer">
                <a href="<?php echo get_permalink(get_page_by_path('loops')); ?>" class="btn btn-primary">Access Module</a>
            </div>
        </div>

        <div class="card module-card">
            <div class="card-header">
                <h3 class="card-title">HIVE Module</h3>
            </div>
            <div class="card-content">
                <p>Collaborative workspace management and team coordination tools.</p>
            </div>
            <div class="card-footer">
                <a href="<?php echo get_permalink(get_page_by_path('hive')); ?>" class="btn btn-primary">Access Module</a>
            </div>
        </div>

        <div class="card module-card">
            <div class="card-header">
                <h3 class="card-title">Clusters Module</h3>
            </div>
            <div class="card-content">
                <p>Data clustering and pattern recognition for insights and optimization.</p>
            </div>
            <div class="card-footer">
                <a href="<?php echo get_permalink(get_page_by_path('clusters')); ?>" class="btn btn-primary">Access Module</a>
            </div>
        </div>

        <div class="card module-card">
            <div class="card-header">
                <h3 class="card-title">Keywords Module</h3>
            </div>
            <div class="card-content">
                <p>Keyword research, tracking, and optimization tools for SEO and marketing.</p>
            </div>
            <div class="card-footer">
                <a href="<?php echo get_permalink(get_page_by_path('keywords')); ?>" class="btn btn-primary">Access Module</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?> 