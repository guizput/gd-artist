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
  <nav
      class="relative flex items-center justify-center border-b-2 border-gray-200 p-8"
    >
      <?php if($page_is_post) : ?>
      <a class="absolute left-8 top-10" href="<?php echo home_url() ?>">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-8 w-8"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3"
          />
        </svg>
      </a>
      <?php endif; ?>

      <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() . '/img/logo.jpg' ?>" alt="G|D Logo" /></a>
</nav>