<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gd-artist
 */

get_header();

// Post navigation
$prev_post = get_previous_post();
$next_post = get_next_post();

// Custom Fields

$post_title = get_field('post_title');
$post_pdf = get_field('post_pdf');
$post_image = get_field('post_image');

?>

	<div class="g__container">
	  <article class="slide-in-top">
	  	<div class="g__post-nav">
	  		<?php if ( ! empty( $next_post ) ): ?>
			    <a href="<?php echo get_permalink( $next_post->ID ); ?>">
		        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
		          <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12
		              C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084
		              c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864
		              l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"/>
		        </svg>
		      </a>
		    <?php else : ?>
					<span style="width:30px;height:30px"></span>
				<?php endif; ?>
	      
	    	<h1><?php the_title() ?></h1>
	    	<?php if ( ! empty( $prev_post ) ): ?>
			    <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
		        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve">
		          <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
		              c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
		              c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
		              c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"/>
		        </svg>
		      </a>
		    <?php else : ?>
					<span style="width:30px;height:30px"></span>
				<?php endif; ?>
	    </div>
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
			<?php comments_template() ?>
	  </article>
	</div>

<?php
get_footer();
