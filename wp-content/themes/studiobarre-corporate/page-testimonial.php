<?php
/**
 * Template Name: Testimonials
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

		
		<div class="testimonial_wrapper">
			
			
			<h1 class="testimonial_header">real results</h1><!-- testimonial_header -->
			
			
				
				
					
					<?php if(get_field('testimonials')): ?>
					
						
 
						<?php while(has_sub_field('testimonials')): ?>
 
							
						<div class="single_testimonial">
							
							<div class="testimonial_image_wrapper">
							
								<?php $testimonial_image = wp_get_attachment_image_src(get_sub_field('testimonial_image'), 'press'); ?>
								<img class="testimonial_image" src="<?php echo $testimonial_image[0]; ?>"/>
							
							</div><!-- testimonial_image_wrapper -->
							
							<div class="testimonial_content">
								
								<h2><?php the_sub_field('name');?></h2>
								<h2>Location: <?php the_sub_field('location');?></h2>
								<h2 style="margin-bottom:23px;">Years Tucking: <?php the_sub_field('years_tucking');?></h2>
								<div class="test_bio">
									
									
									
									<div class="top_half">
									
										<p class="first_testimonial"><?php the_sub_field('excerpt');?>...</p>
										
										<span class="read_more">Read More +</span>
									
									</div><!-- top_half -->
									
									
								
									
									
									
									<div class="read_more_wrapper">
										
										<p><?php the_sub_field('content');?></p>
									
									</div><!-- read_more_wrapper -->
									
									
									</div><!-- test_bio -->
									
								
								
							</div><!-- testimonial_content -->
						
						</div><!-- singe_testimonial -->
						
						
						<?php endwhile; ?>
 
					<?php endif; ?>
					
					
				
			
			
		</div><!-- testimonial_wrapper -->		
	
		
		
<?php get_footer(); ?>
