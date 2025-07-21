<?php
get_header();
get_sidebar();
?>
<div class="main-content">
<div class='igny8-page-content'><h1><?php the_title(); ?></h1>
<?php
// Get the current page object
global $post;
$slug = $post->post_name;
$parent = $post->post_parent ? get_post($post->post_parent)->post_name : '';

// Build the path for the content file
if ($parent) {
    $content_file = $parent . '/' . $slug . '.php';
} else {
    $content_file = $slug . '.php';
}

// Try to include the content file if it exists
if (file_exists(get_template_directory() . '/' . $content_file)) {
    include get_template_directory() . '/' . $content_file;
} else {
    the_content();
}
?>
</div></div>
<?php get_footer(); ?> 