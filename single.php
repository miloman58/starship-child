<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starship
 */

get_header(); ?>

  <div class="col-sm-8 blog-main">

    <div class="blog-post">
      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
      <!-- <h2 class="blog-post-title">Sample blog post</h2>
      <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>-->
      
<div class="__post">
      <?php
  		while ( have_posts() ) : the_post();

  			get_template_part( 'template-parts/content', get_post_format() );
  		 /*	the_post_navigation();*/

  			// If comments are open or we have at least one comment, load up the comment template.
  			if ( comments_open() || get_comments_number() ) :
  				comments_template();
  			endif;

  		endwhile; // End of the loop.
  		?>
  </div>


    </div><!-- /.blog-post -->

  </div><!-- /.blog-main -->

<?php
get_sidebar();
get_footer();
