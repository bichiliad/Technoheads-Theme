<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Technoheads
 * @since Technoheads 0.0.1
 */
 
get_header(); ?>

  <div id="page" class="hfeed site page">
    <div class="row clear">

      <?php get_sidebar(); ?>
      
      <div id="main" class="site-main main_content col">
 
        <section id="primary" class="header content-area">
          <div id="content" class="site-content row clear" role="main">

          <?php if ( have_posts() ) : ?>

            <header class="page-header">
              <h1 class="page-title search-header"><?php printf( __( 'Search Results for: %s', 'technoheads' ), '<span class="search-term">' . get_search_query() . '</span>' ); ?></h1>
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
      </div><!-- #main -->
    </div> <!-- .row .clear -->
  </div><!-- #page -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>