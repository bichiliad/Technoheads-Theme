<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Technoheads
 * @since Technoheads 0.0.1
 */
 
get_header(); ?>
 
  <section id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'technoheads' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
      </header><!-- .page-header -->

      <?php technoheads_content_nav( 'nav-above' ); ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'search' ); ?>

      <?php endwhile; ?>

      <?php technoheads_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'no-results', 'search' ); ?>

    <?php endif; ?>

    </div><!-- #content .site-content -->
  </section><!-- #primary .content-area -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>