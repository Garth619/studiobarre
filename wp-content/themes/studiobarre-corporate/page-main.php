<?php
/**
 * Template Name: Main
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

		<div id="container_main">
		<h1 style="position:absolute;top:-9999px">Studio Barre San Diego, CA</h1>
		<p style="position:absolute;top:-9999px">Put Intro Content here in loop to satisfy yoast</p>
			<?php if(get_field('slideshow')): ?>
				<div class="slideshow">
				<div class="cycle-slideshow"  data-cycle-slides="> ul">
					<?php while(has_sub_field('slideshow')): ?>
						<?php if(get_sub_field('slide_link')) : ?>
        			<?php if(get_sub_field('externally')) : ?>
            		<?php if(get_sub_field('grey_border')) : ?>
										<?php $main_slide = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slides'); ?>
										<ul class="myslides">
            					<li><a href="<?php the_sub_field('externally'); ?>" target="_blank"><img  class="hide" src="<?php echo $main_slide[0]; ?>"/></a></li>
										</ul>
								<?php else: ?><!-- no grey border -->
										<?php $main_slide2 = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slides'); ?>
										<ul class="myslides">
											<li><a href="<?php the_sub_field('externally'); ?>" target="_blank"><img class="hide" style="border:none;padding:10px;" src="<?php echo $main_slide2[0]; ?>"/></a></li>
										</ul>
								<?php endif; ?> <!-- end of grey border on externally -->
							<?php else : ?><!--  no externally but internally -->
								<?php $main_slide3 = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slides'); ?>
									<?php if(get_sub_field('grey_border')) : ?><!-- internal grey box -->
									<ul class="myslides">
            				<li><a href="<?php the_sub_field('internally'); ?>"><img class="hide" src="<?php echo $main_slide3[0]; ?>"/></a></li>
										</ul>
									<?php else : ?><! no grey border -->
										<?php $main_slide4 = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slides'); ?>
										<ul class="myslides">
            				<li><a href="<?php the_sub_field('internally'); ?>"><img style="border:none;padding:10px;" class="hide" src="<?php echo $main_slide4[0]; ?>"/></a></li>
										</ul>
									<?php endif; ?><!-- end of grey border if -->
								<?php endif; ?><!-- end of if externally -->
							<?php else : ?><!-- slide show link else no links -->
								<?php if(get_sub_field('grey_border')) : ?>
									<?php $main_slide5 = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slides'); ?>
									<ul class="myslides">
										<li><img class="hide" src="<?php echo $main_slide5[0]; ?>"/></li>
									</ul>
								<?php else : ?><!-- no grey border on no link slides -->
									<?php $main_slide6 = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slides'); ?>
									<ul class="myslides">
										<li><img style="border:none;padding:10px;" class="hide" src="<?php echo $main_slide6[0]; ?>"/></li>
									</ul>
								<?php endif; ?><!-- end of grey border -->
							<?php endif; ?><!-- end of slide link if -->
					<?php endwhile; ?><!-- end of slideshow while -->
				</div><!-- cycle slideshow -->
				</div><!-- slideshow -->
			<?php endif; ?><!-- slideshow -->
		</div><!-- #container -->


<?php get_footer(); ?>




