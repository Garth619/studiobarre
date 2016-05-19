<div class="single_press_wrapper">
			<?php $press_image = wp_get_attachment_image_src(get_field('press_image'), 'press'); ?>
				<div class="front" style="background: url(<?php echo $press_image[0]; ?>);">
			
				</div><!-- front -->
 
				<div class="back">
   
					<h1><a href="<?php the_field('press_link');?>" target="_blank"><?php the_title();?></a></h1>
					<p><a href="<?php the_field('press_link');?>" target="_blank"><?php the_field('sub_titledescription');?></a></p>
					<a href="<?php the_field('press_link');?>" target="_blank"><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  			</div><!-- back -->
  		<div style="margin-top:200px"><?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?></div>
			</div><!-- single_press_wrapper -->