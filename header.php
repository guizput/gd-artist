<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gd-artist
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/img/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/img/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<main>
  
  <nav class="g__nav">
    <a href="<?php echo home_url() ?>" class="g__nav__home"><img src="<?php echo get_template_directory_uri() . '/img/home-icon.svg' ?>" alt="Home"/></a>
    <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() . '/img/logo.jpg' ?>" alt="G|D Logo" /></a>
  </nav>
  
  <div id="swup" class="transition-fade">
