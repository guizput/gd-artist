<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gd-artist
 */

get_header();

// Custom Fields

$post_title = get_field('post_title');
$post_pdf = get_field('post_pdf');
$post_image = get_field('post_image');

?>

	<div class="g__container">
	  <article class="slide-in-top">
	    <h1><?php the_title() ?></h1>
	    <h5><?php echo get_the_date() ?></h5>
			<?php
			if( $post_pdf ): 
				$post_url = $post_pdf['url'];
				$home_url = home_url();
				$post_relative_url = str_replace($home_url . '/',"",$post_url);
			?>
			  <iframe src="<?php echo $home_url ?>/ViewerJS/#../<?php echo $post_relative_url; ?>" width='100%' allowfullscreen webkitallowfullscreen></iframe>
			<?php
			else: ?>
			  <img src="<?php echo $post_image['url'] ?>" alt="<?php the_title() ?>" />
			<?php 
			endif; 
			?>
	  </article>
	</div>

<?php
get_footer();
