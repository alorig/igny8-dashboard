<?php
get_header();
get_sidebar();
?>
<div class="main-content">
  <div class="igny8-top-bar">
    <div class="igny8-top-bar-title"><?php the_title(); ?></div>
    <div class="igny8-account-menu">
      <span class="account-text">Account</span>
      <button class="account-icon" title="Account"><span class="dashicons dashicons-admin-users"></span></button>
      <button class="account-icon" title="Settings"><span class="dashicons dashicons-admin-settings"></span></button>
    </div>
  </div>
  <div class="igny8-section">
    <div class='igny8-page-content'>
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
    </div>
  </div>
</div>
<?php get_footer(); ?> 