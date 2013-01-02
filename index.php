<?php
/**
 * The main template file.
 * 
 * @package Technoheads
 * @since Technoheads 0.0.1
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content">
    <?php if(have_posts()) : ?>

      <?php technoheads_content_nav('nav-above'); ?>

      <?php /* The Loop */ ?>
      <?php while ( have_posts() ) : the_post() ?>
        <?php get_template_part('content', get_post_format()); ?>
      <?php endwhile; ?>
      <?php technoheads_content_nav('nav-below'); ?>

    <?php else : ?>

      <?php get_template_part('no-results', 'index'); ?>

    <?php endif ?>
    </div>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>