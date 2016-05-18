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
			
			<?php echo do_shortcode('[ajax_load_more post_type="press" posts_per_page="999"]'); ?>
			
			
		</div><!-- press_wrapper -->
		
	
		
		
<?php get_footer(); ?>
