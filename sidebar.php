<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gd-artist
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<article style="
    display: flex;
    align-items: center;
    justify-content: center;
">
  <div class="g__card active" style="width: 100%">
  	<?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div>
</article>
