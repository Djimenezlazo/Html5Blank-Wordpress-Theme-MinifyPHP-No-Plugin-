<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<h2>test lalalal</h2>
<?php echo get_template_directory() ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
