<?php 
/**
 * Main Dashboard Page
 */
get_header(); 
get_sidebar(); 
?>
<div class="main-content">
    <h1>Igny8 Admin Dashboard</h1>
    <div class="dashboard-welcome">
        <p>Welcome to the Igny8 Internal Admin Dashboard. This interface provides access to all Igny8 modules and administrative functions.</p>
    </div>
    
    <div class="dashboard-modules">
        <h2>Available Modules</h2>
        <div class="module-grid">
            <div class="module-card">
                <h3>INTELLI</h3>
                <p>Intelligence and analytics module</p>
                <a href="<?php echo admin_url('admin.php?page=template-intelli'); ?>" class="module-link">Access INTELLI</a>
            </div>
            
            <div class="module-card">
                <h3>LOOPS</h3>
                <p>Automation and workflow management</p>
                <a href="<?php echo admin_url('admin.php?page=template-loops'); ?>" class="module-link">Access LOOPS</a>
            </div>
            
            <div class="module-card">
                <h3>HIVE</h3>
                <p>Collaborative workspace and communication</p>
                <a href="<?php echo admin_url('admin.php?page=template-hive'); ?>" class="module-link">Access HIVE</a>
            </div>
            
            <div class="module-card">
                <h3>Clusters</h3>
                <p>Data clustering and organization</p>
                <a href="<?php echo admin_url('admin.php?page=template-clusters'); ?>" class="module-link">Access Clusters</a>
            </div>
            
            <div class="module-card">
                <h3>Keywords</h3>
                <p>Keyword management and optimization</p>
                <a href="<?php echo admin_url('admin.php?page=template-keywords'); ?>" class="module-link">Access Keywords</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 