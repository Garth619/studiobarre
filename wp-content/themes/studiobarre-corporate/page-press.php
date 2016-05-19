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


			
			

<?php if(get_field('press_post_order')): ?>
 

 
	<?php while(has_sub_field('press_post_order')): ?>
 
    	
    	
<?php

$post_object = get_sub_field('press_title');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>
   
   
       	<?php $examplePost = get_post();

echo $examplePost->ID; ?>
   
   
   
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
    
 
	<?php endwhile; ?>
 
	
 
<?php endif; ?>


			
			<?php echo do_shortcode('[ajax_load_more post_type="press" posts_per_page="999"]'); ?>
			
			
		</div><!-- press_wrapper -->
		
	
		
		
<?php get_footer(); ?>
