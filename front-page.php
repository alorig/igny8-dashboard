<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="main-content">
    <h1>Igny8 Admin Dashboard</h1>
    <h2>Available Modules</h2>
    <div class="modules">
        <div class="module-card">
            <h3>INTELLI</h3>
            <p>Intelligence and analytics module</p>
            <span class="data-count"></span>
            <a class="button" href="<?php echo home_url('/intelli/'); ?>">Access INTELLI</a>
        </div>
        <div class="module-card">
            <h3>LOOPS</h3>
            <p>Automation workflows</p>
            <span class="data-count"></span>
            <a class="button" href="<?php echo home_url('/loops/'); ?>">Access LOOPS</a>
        </div>
        <div class="module-card">
            <h3>HIVE</h3>
            <p>Authority & communication</p>
            <span class="data-count"></span>
            <a class="button" href="<?php echo home_url('/hive/'); ?>">Access HIVE</a>
        </div>
        <div class="module-card">
            <h3>Clusters</h3>
            <p>Data clustering</p>
            <span class="data-count"></span>
            <a class="button" href="<?php echo home_url('/clusters/'); ?>">Access Clusters</a>
        </div>
        <div class="module-card">
            <h3>Keywords</h3>
            <p>Keyword management</p>
            <span class="data-count"></span>
            <a class="button" href="<?php echo home_url('/keywords/'); ?>">Access Keywords</a>
        </div>
    </div>
</div>

<?php get_footer(); ?> 