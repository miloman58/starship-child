<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starship
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="h1">', '</h1>' );
			/*if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

			}*/

		if ( 'post' === get_post_type() ) : ?>

		<p class="blog-post-meta blog-post-meta-bottom"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>  <?php the_time('j F Y') ?>&nbsp;&nbsp; &nbsp;<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;&nbsp;<span><?php
	  if(function_exists('get_post_views')) {
	          echo get_post_total_views();
	  }
	   ?></span></p>

		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
	<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'starship' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starship' ),
				'after'  => '</div>',
			) );
		?>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
 <table class="table">
	 <tr><td>
		<?php /*starship_entry_footer();*/
		function the_share ($share) {

	 $share = '<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
<script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter"></div>';

		echo '<strong>Поделиться:</strong>' . $share;
		return $share;
		}

  the_share ($share);

		?></td>
<td><br><?php if(function_exists('the_ratings')) { the_ratings(); } ?></td>
 <tr></table>
	</footer><!-- .entry-footer -->


</article><!-- #post-## -->
