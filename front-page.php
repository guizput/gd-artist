<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gd-artist
 */

get_header();

?>
<main class="mx-auto max-w-2xl p-4 lg:max-w-7xl">
	<div
		class="grid grid-cols-3 gap-x-1 gap-y-1 sm:grid-cols-4 lg:grid-cols-6"
		>
		<?php
	  		$posts = get_posts(array(
				'posts_per_page'	=> -1,
				'post_type'			=> 'post',
			));
		
			if( $posts ): ?>
					
				<?php foreach( $posts as $post ): 
					
					setup_postdata( $post );
					$post_image = get_field('post_image');
					$img_size = 'large';
					
					?>

					<a href="<?php the_permalink() ?>" class="group text-center">
						<div
						class="aspect-h-1 aspect-w-1 w-full overflow-hidden bg-gray-200"
						>
							<img
								src="<?php echo $post_image['sizes'][$img_size] ?>"
								alt="Image de <?php the_title() ?>"
								class="h-full w-full object-cover object-center group-hover:opacity-75"
								loading="lazy"
							/>
						</div>
					</a>
				<?php endforeach;
				
				wp_reset_postdata();

			endif; 
		?>
	</div>
</main>

	<div
		class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8"
		>
		<?php
	  		$posts = get_posts(array(
				'posts_per_page'	=> -1,
				'post_type'			=> 'post',
			));
		
			if( $posts ): ?>
					
				<?php foreach( $posts as $post ): 
					
					setup_postdata( $post );
					$post_image = get_field('post_image');
					$img_size = 'medium';
					
					?>

					<a href="<?php the_permalink() ?>" class="group text-center">
						<div
						class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200"
						>
						<img
							src="<?php echo $post_image['sizes'][$img_size] ?>"
							alt="Image de <?php the_title() ?>"
							class="h-full w-full object-cover object-center group-hover:opacity-75"
							loading="lazy"
						/>
						</div>
						<h3 class="mt-1 text-lg font-medium text-gray-700">
							<?php the_title() ?>
						</h3>
						<p class="text-sm text-gray-600"><?php echo get_the_date() ?></p>
					</a>
				<?php endforeach;
				
				wp_reset_postdata();

			endif; 
		?>
	</div>

<?php
get_footer();
