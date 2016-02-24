<?php
/**
 * The template for displaying category pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starship
 */

get_header(); ?>
<div class="col-sm-8 blog-main">

	<div class="blog-post">

<?php
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="page-header">
<h1 class="page-title">Рубрикa: <?php single_cat_title( '', true ); ?></h1>


<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header>

<?php

// The Loop
while ( have_posts() ) : the_post(); ?>
<h2 class="blog-post-title-home"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<p class="blog-post-meta blog-post-meta-bottom"><?php the_time('j F Y') ?>&nbsp;&nbsp; &nbsp;<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;&nbsp;<span><?php
if(function_exists('get_post_views')) {
        echo get_post_total_views();
}
 ?></span>&nbsp;&nbsp;&nbsp;<?php echo "Рубрика: "; 	the_category (' '); //Пустые кавычки убирают теги <ul>  ?><!--by--> <?php/* the_author_posts_link()*/ ?></p>

<div class="entry-category">
<?php the_content(); ?>
 <!--<p class="postmetadata"><?php /*
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');*/
?></p>-->
</div>

<?php endwhile;

else: ?>
<p>Sorry, no posts matched your criteria.</p>


<?php endif; ?>


<?php wp_pagination(); ?>

	</div><!-- /.blog-post -->

</div><!-- /.blog-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
