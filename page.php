<?php
get_header();
get_sidebar();
?>
<div class="main-content">
<div class='igny8-page-content'><h1><?php the_title(); ?></h1>
<?php if (is_page('content-scheduling')) { get_template_part('content-writer/content-scheduling');
} ?></div></div>
<?php get_footer(); ?> 