<?php
/**
 * Template Name: Home Page (Starship)
 *
 * This is the template that displays home page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starship
 */

get_header(); ?>

<div class="col-sm-8 blog-main">
	<div class="blog-post" style = "margin-top:20px;">
				   <?php
					 /*
            * Для каждой рубрки нужно прописать свой ID, в зависимости от движка они могут отличаться.
					 */
					 //my array of category IDs
					 //$categories =  array(1,4,5,3);
           //Рабочий код выводит последние записи из определенной рубрики
					 //Ссылка http://www.wpbeginner.com/wp-tutorials/how-to-display-recent-posts-from-a-specific-category-in-wordpress/
             /*
					   $categories = get_categories();
						 foreach ( $categories as $category ) {
						 }*/
					  ?>


			<?php
	 	 $catquery = new WP_Query( 'cat=10&posts_per_page=4' );
     /*echo 'Нужное из категории' .'«'. get_cat_name(1). '»';*/
	 	 while($catquery->have_posts()) : $catquery->the_post();
	 					 ?>


	            <h2 class="blog-post-title-home"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<p class="blog-post-meta blog-post-meta-bottom"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php the_time('j F Y'); ?>&nbsp;&nbsp;&nbsp;<?php echo "Рубрика: "; 	the_category (' '); //Пустые кавычки убирают теги <ul>  ?></p>
						<div class="entry-category"><?php the_content(); ?></div>

						<?php endwhile; ?>


					 <?php
		 	 	 $catquery2 = new WP_Query( 'cat=11&posts_per_page=4' );
		      /*echo 'Нужное из категории' .'«'. get_cat_name(1). '»';*/
		 	 	 while($catquery2->have_posts()) : $catquery2->the_post();
		 	 					 ?>

		 	            <h2 class="blog-post-title-home"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		     	<p class="blog-post-meta blog-post-meta-bottom"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php the_time('j F Y'); ?>&nbsp;&nbsp;&nbsp;<?php echo "Рубрика: "; 	the_category (' '); //Пустые кавычки убирают теги <ul>  ?></p>
		 							<div class="entry-category"> <?php the_content(); ?></div>

		 					 <?php endwhile; ?>


							 <?php
							 $catquery3 = new WP_Query( 'cat=9&posts_per_page=4' );
							 /*echo 'Нужное из категории' .'«'. get_cat_name(1). '»';*/
							 while($catquery3->have_posts()) : $catquery3->the_post();
							 			?>

							 			 <h2 class="blog-post-title-home"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

									 <p class="blog-post-meta blog-post-meta-bottom"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php the_time('j F Y'); ?>&nbsp;&nbsp;&nbsp;<?php echo "Рубрика: "; 	the_category (' '); //Пустые кавычки убирают теги <ul>  ?></p>
							 			 	<div class="entry-category"> <?php the_content(); ?></div>

							 		<?php endwhile; ?>



																 <?php
																 $catquery4 = new WP_Query( 'cat=12&posts_per_page=4' );
																 /*echo 'Нужное из категории' .'«'. get_cat_name(1). '»';*/
																 while($catquery4->have_posts()) : $catquery4->the_post();
																 			?>

												 			 <h2 class="blog-post-title-home"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

															 <p class="blog-post-meta blog-post-meta-bottom"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php the_time('j F Y'); ?>   <?php echo "Рубрика: "; 	the_category (' '); //Пустые кавычки убирают теги <ul>  ?></p>
																 			 <div class="entry-category"> <?php the_content(); ?></div>

																<?php endwhile; ?>


			<?php

/*
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
	*/		?>
		</div><!-- /.blog-post -->

	</div><!-- /.blog-main -->


<?php
get_sidebar();
get_footer();
