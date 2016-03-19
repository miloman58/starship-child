<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starship
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--<meta charset="<?php bloginfo( 'charset' ); ?>">-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<!--<link rel="profile" href="http://gmpg.org/xfn/11">-->
<!--<link rel="pingback" href="<?php /*bloginfo( 'pingback_url' );*/ ?>">-->
<?php wp_head(); ?>
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<?php echo '<script src="' . get_template_directory_uri() . '/assets/js/ie-emulation-modes-warning.js' . '">' . '</script>' ;?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter29310685 = new Ya.Metrika({id:29310685,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29310685" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<!-- Second navbar for search -->
	 <nav class="navbar navbar-inverse" id="navigation">

		 <div class="container">
			    <div class="navbar-header">
						 <a class="navbar-brand" href="/">
	<?php echo '<a class="navbar-brand" href="/"><img alt="Brand" src="' . get_template_directory_uri() . '/img/logo.png' . '"></a>';?>
</div>
			 <!-- Brand and toggle get grouped for better mobile display -->
			 <div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				 </button>
				 </div>

			 <!-- Collect the nav links, forms, and other content for toggling -->
			 <div class="collapse navbar-collapse" id="navbar-collapse-3">
				 <ul class="nav navbar-nav navbar-right">
										 <?php /*
		 			$walker = new Walker_Quickstart_Menu ();
		 				wp_nav_menu ( array ( 'walker' => $walker ,
		 									'container' => '',
		 									'container_class' => '',
		 									'items_wrap' => '%3$s',
		 							)
		 					);*/
		 			?>

					<?php
					  $currentCat = '';
if (is_single()) {
  $cat = get_the_category();
  $cat = $cat[0]->cat_ID;
  $currentCat = '&current_category='.$cat;
}
wp_list_categories('orderby=term_group&title_li='.$currentCat);
?>
					 <li>
						 <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3"><span class = "text-color">Поиск</span></a>
					 </li>
				 </ul>


				 <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
					 <?php get_search_form();?>
				 </div>
			 </div><!-- /.navbar-collapse -->
		 </div><!-- /.container -->
	 </nav><!-- /.navbar -->

	<!--<div class="blog-masthead">
		<div class="container">

			<nav class="blog-nav">


		       </nav>
	</div>

		</div>
-->
	<div class="container">
 	 <div class="row">
			<!--<div class="blog-header">
			<h1 class="blog-title">The Bootstrap Blog</h1>
			<p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
		</div>-->
