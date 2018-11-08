<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webshowcase
 */
global $webshowcase;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo get_bloginfo( 'name' ); ?> | LuxLF</title>
	<meta name="description" content="<?php get_bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>>
	<header id="header">
		<div class="container clearfix">
			<strong class="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_field('header_logo', 'option'); ?>"></a></strong>
			<nav class="main-nav">
				<?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'main_menu')); ?>
			</nav>
		</div>
	</header>