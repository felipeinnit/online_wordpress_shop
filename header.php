<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alterego
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<?php if(wc_notice_count()) : ?>
		<!-- print notifications -->
		<div class="pa3 tc">
			<?php wc_print_notices(); ?>
		</div>
	<?php endif; ?>

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alterego' ); ?></a>

	<!-- conditional tag to check in wich page we are in -->
<?php if(is_home() or is_product_category()) : ?>

	<header id="masthead" class="site-header flex " style="<?php category_header_background(); ?>">

		<?php get_template_part('template-parts/category-navegation'); ?>
		<?php get_template_part('template-parts/featured-image'); ?>
		
	</header><!-- #masthead -->

<?php elseif (!is_product()) : ?>

	<?php get_template_part('template-parts/page-header'); ?>	

<?php endif; ?>


