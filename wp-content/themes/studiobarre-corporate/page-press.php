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
			
			
			
			<?php $mymain_query = new WP_Query( array( 'post_type' => 'press','posts_per_page' => '500', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
         
      
      <?php $press_image = wp_get_attachment_image_src(get_field('press_image'), 'press'); ?>
         
      
      
      
      <div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php echo $press_image[0]; ?>);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="<?php the_field('press_link');?>" target="_blank"><?php the_title();?></a></h1>
					<p><a href="<?php the_field('press_link');?>" target="_blank"><?php the_field('sub_titledescription');?></a></p>
					<a href="<?php the_field('press_link');?>" target="_blank"><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
      
      
      
      
      <?php endwhile; ?>
      <?php wp_reset_postdata(); // reset the query ?>

			
				
			
			
			<div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php bloginfo('template_directory');?>/images/pic.jpg);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="">Discover San Diego</a></h1>
					<p><a href="">Top barre studios in San Diego</a></p>
					<a href=""><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
			
			<div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php bloginfo('template_directory');?>/images/pic.jpg);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="">Discover San Diego</a></h1>
					<p><a href="">Top barre studios in San Diego</a></p>
					<a href=""><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
			
			<div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php bloginfo('template_directory');?>/images/pic.jpg);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="">Discover San Diego</a></h1>
					<p><a href="">Top barre studios in San Diego</a></p>
					<a href=""><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
			
			<div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php bloginfo('template_directory');?>/images/pic.jpg);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="">Discover San Diego</a></h1>
					<p><a href="">Top barre studios in San Diego</a></p>
					<a href=""><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
			
			<div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php bloginfo('template_directory');?>/images/pic.jpg);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="">Discover San Diego</a></h1>
					<p><a href="">Top barre studios in San Diego</a></p>
					<a href=""><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
			
			<div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php bloginfo('template_directory');?>/images/pic.jpg);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="">Discover San Diego</a></h1>
					<p><a href="">Top barre studios in San Diego</a></p>
					<a href=""><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
			
			<div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php bloginfo('template_directory');?>/images/pic.jpg);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="">Discover San Diego</a></h1>
					<p><a href="">Top barre studios in San Diego</a></p>
					<a href=""><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
			
			<div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php bloginfo('template_directory');?>/images/pic.jpg);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="">Discover San Diego</a></h1>
					<p><a href="">Top barre studios in San Diego</a></p>
					<a href=""><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
			
			<div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php bloginfo('template_directory');?>/images/pic.jpg);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="">Discover San Diego</a></h1>
					<p><a href="">Top barre studios in San Diego</a></p>
					<a href=""><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
			
			<div class="single_press_wrapper">
			
				<div class="front" style="background: url(<?php bloginfo('template_directory');?>/images/pic.jpg);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="">Discover San Diego</a></h1>
					<p><a href="">Top barre studios in San Diego</a></p>
					<a href=""><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		
			</div><!-- single_press_wrapper -->
			
		</div><!-- press_wrapper -->
		
	
		
		
<?php get_footer(); ?>
