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

// Custom fields

$home_intro = get_field('home_intro');

?>

	<section class="g__intro">
	  <div class="g__container">
	    <?php echo $home_intro ?>
	  </div>
	</section>

	<section class="g__cards">
	  <div class="g__container">
	  	<?php
	  		$posts = get_posts(array(
					'posts_per_page'	=> -1,
					'post_type'			=> 'post',
				));
			
				if( $posts ): ?>
						
					<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						$post_image = get_field('post_image');
						
						?>
						<a href="<?php the_permalink() ?>">
						  <div class="g__card active">
						    <div class="g__card__image" data-style="background-image: url(<?php echo $post_image['sizes']['large'] ?>)"></div>
						    <h2><?php the_title() ?></h2>
						    <h5><?php echo get_the_date() ?></h5>
						  </div>
						</a>  
					
					<?php endforeach;
					
					wp_reset_postdata();

				endif; ?>
	  </div>
	</section>

<?php
get_footer();
