<?php
/*
Template Name: Module Page
*/
get_header();
get_sidebar();
$slug = basename(get_permalink());
?>
<div class="main-content">
    <h1><?php the_title(); ?> Module Dashboard</h1>
    <div class="module-content">
        <?php
        if ($slug === 'content-scheduling') {
            $module_path = get_template_directory() . '/content-writer/content-scheduling.php';
            if (file_exists($module_path)) {
                include $module_path;
            } else {
                echo '<p>No content found for this module.</p>';
            }
        } else {
            the_content();
        }
        ?>
    </div>
</div>
<?php get_footer(); ?> 