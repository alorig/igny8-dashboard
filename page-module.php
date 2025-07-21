<?php
/*
Template Name: Module Page
*/
get_header();
get_sidebar();
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$module_path = get_template_directory() . '/' . $uri . '.php';
?>
<div class="main-content">
    <h1><?php the_title(); ?> Module Dashboard</h1>
    <div class="module-content">
        <?php
        if (file_exists($module_path)) {
            include $module_path;
        } else {
            the_content();
        }
        ?>
    </div>
</div>
<?php get_footer(); ?> 