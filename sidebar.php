<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starship
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

</div><!-- /.blog-sidebar -->
