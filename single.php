<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gd-artist
 */

$page_is_post = true; 

get_header();

// Post navigation
$prev_post = get_previous_post();
$next_post = get_next_post();

// Custom Fields

$post_title = get_field('post_title');
$post_pdf = get_field('post_pdf');
$post_image = get_field('post_image');

?>
<main class="mx-auto max-w-2xl p-4 lg:max-w-7xl">
	<div>
		<?php if( $post_pdf ): 
			$post_url = $post_pdf['url'];
			$home_url = home_url();
			$post_relative_url = str_replace($home_url . '/',"",$post_url);
		?>
			<iframe src="<?php echo $home_url ?>/ViewerJS/#../<?php echo $post_relative_url; ?>" width='100%' allowfullscreen webkitallowfullscreen></iframe>
		<?php else: ?>
			<img
				src="<?php echo $post_image['url'] ?>"
				alt="<?php the_title() ?>"
			/>
		<?php endif; ?>
	</div>
	<div class="text-center">
		<h2 class="mt-1 text-3xl font-medium text-gray-700"><?php the_title() ?></h2>
		<p class="text-base text-gray-600"><?php echo get_the_date() ?></p>
	</div>
</main>

<?php
get_footer();
