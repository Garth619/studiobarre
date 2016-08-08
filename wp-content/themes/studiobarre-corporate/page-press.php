<?php
/**
 * Template Name: Press
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		
		<div class="press_wrapper">

		<?php

		$ids = get_field('new_press_post_order'); // Get field value from ACF
		$featured_posts = implode(', ', $ids); // implode the IDs array
		echo do_shortcode('[ajax_load_more post_type="press" post__in="'.$featured_posts.'" posts_per_page="999" orderby="post__in"]');

		?>

	</div><!-- press_wrapper -->
		
	
		
		
<?php get_footer(); ?>
