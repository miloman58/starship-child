<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Starship
 */

get_header(); ?>

<div class="col-sm-8 blog-main">

	<div class="blog-post">
		<h2 class="blog-post-title">Вы попали на 404 страницу сайта «zachatieinfo.ru»</h2>
		<p class="blog-post-meta"></p>
					<div class="alert alert-danger" role="alert"><strong>Ой! </strong><?php esc_html_e( 'А такой страницы нет, возможно Вы неправильно набрали адрес страницы или перешли по неверной ссылке на наш сайт, или такой страницы никогда не было.', 'starship' ); ?></div>

           <?php echo '<img src="' . get_template_directory_uri() . '/img/Baby-Smile.jpg' . '">' . '<br><br>' ;?>

					<div class="alert alert-info" role="alert"><?php esc_html_e( 'Похоже, ничего не было найдено в этом месте. Может быть, попробовать одну из ссылок ниже или поиск?', 'starship' ); ?></div>

					<?php
					 echo '<div style ="float:left">';
						get_search_form();
			    echo '</div><br><br>';

					$args = array(
                    	'before_widget' => '<div class="panel panel-danger">',
											'after_widget' => '</div>',
                      'before_title'  => '<div class="panel-heading">',
                      'after_title'      => '</div>',
									);
					$instance =	array();
           echo '<br>';
						the_widget( 'WP_Widget_Recent_Posts',$instance, $args );

						// Only show the widget if site has multiple categories.
						if ( starship_categorized_blog() ) :
					?>

							<?php
					the_widget( 'WP_Widget_Categories', $instance, $args );
							/*wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );*/
						?>



					<?php
						endif;

						/* translators: %1$s: smiley */
						//$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'starship' ), convert_smilies( ':)' ) ) . '</p>';
					//	the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

					//	the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- /.blog-post -->

			</div><!-- /.blog-main -->

<?php
get_footer();
