<?php
/**
 * Template Name: San Juan Bio
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
	<div id="sidebar">
			<h1><?php the_field('location_header','option'); ?></h1>
			<span class="sidebar_titles">Home</span>
			<a href="<?php bloginfo( 'url' ); ?>/about" class="sidebar_links">About this Barre</a>
			<a href="<?php bloginfo( 'url' ); ?>/contact" class="sidebar_links">Contact Us</a>	
			<span class="sidebar_titles">Classes</span>
			<a href="<?php bloginfo( 'url' ); ?>/schedule/" class="sidebar_links">Schedule</a>
			<a href="<?php bloginfo( 'url' ); ?>/pricing" class="sidebar_links">Pricing</a>
			<a href="<?php bloginfo( 'url' ); ?>/promos" class="sidebar_links">Promos</a>
			<span class="sidebar_titles">Our Studio</span>
			<a href="<?php bloginfo( 'url' ); ?>/barre-tenders/" class="sidebar_links">barre {tenders}</a>
			<a href="<?php bloginfo( 'url' ); ?>/events" class="sidebar_links">Events</a>
			<a href="<?php the_field('twitter', 'options'); ?>" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter.png"/></a>
			<a href="<?php the_field('pinterest', 'options'); ?>" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/pinterest.png"/></a>
			<a href="<?php the_field('instagram', 'options'); ?>" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/instagram.png"/></a>
			<a href="<?php the_field('facebook', 'options'); ?>" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/facebook.png"/></a>
			<a href="<?php the_field('google_plus', 'options'); ?>" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/google-plus.png"/></a>
			<div style="clear:both"></div>
			<span class="store_hours">Store Hours</span>
			<?php if(get_field('days_and_hours','option')): ?>
				<?php while(has_sub_field('days_and_hours','option')): ?>
					<span class="store_days"><?php the_sub_field('days','option'); ?></span>
					<span class="store_day_hours">  <?php the_sub_field('hours','option'); ?></span>
				<?php endwhile; ?>
			<?php endif; ?>
		<div class="address_font">
			<div itemscope itemtype="http://schema.org/LocalBusiness">
				<span class="location_name" itemprop="name"><?php the_field('name_of_studio','option'); ?></span>
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<span itemprop="streetAddress"><?php the_field('street_address','option'); ?></span><br/>
					<span itemprop="addressLocality"><?php the_field('city','option'); ?></span>,
					<span itemprop="addressRegion"><?php the_field('state','option'); ?></span>  		
					<span itemprop="postalCode"><?php the_field('zip_code','option'); ?></span><br/>
					<span itemprop="telephone">Phone: <?php the_field('telephone','option'); ?></span><br/>
					<a style="color:#fff;" href="<?php the_field('google_map','option'); ?>" target="_blank">{map}</a></div><!-- address -->
			</div><!-- local business -->
			</div><!-- address font-->
		</div><!-- sidebar -->

		<div id="container">
			<div id="content" role="main">
			
			
			<?php if(get_field('bios_grid')): ?>
				<?php $count=3; ?>
				<div class="row_wrapper">
					<?php while(has_sub_field('bios_grid')): ?>
						<div class="barre_bio_img_wrapper">
							<?php if(get_sub_field('bio_image')) :?>
							<?php $bio_imagerest = wp_get_attachment_image_src(get_sub_field('bio_image'), 'bio-size'); ?>
							<?php $bio_colorimagerest = wp_get_attachment_image_src(get_sub_field('bio_color_image_rest'), 'bio-size'); ?>
							<a href="#bio_content<?php echo $count; ?>" class="fancybox"><img id="myhover<?php echo $count; ?>" class="barre_bio" src="<?php echo $bio_imagerest[0]; ?>" <?php if(get_sub_field('bio_color_image_rest')): ?> onmouseover="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $bio_colorimagerest[0]; ?>'" onmouseleave="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $bio_imagerest[0]; ?>'"
							<?php endif; ?>/></a>
							<?php else : ?>
							<a href="#bio_content<?php echo $count; ?>" class="fancybox"><img id="myhover<?php echo $count; ?>" class="barre_bio" src="<?php bloginfo( 'template_directory' ); ?>/images/silhouette.jpg" /></a>
							<?php endif; ?>
							<a href="#bio_content<?php echo $count; ?>" class="fancybox"><span style="margin-top:10px;"><?php the_sub_field('bio_name'); ?></span></a><br/>
							<a href="#bio_content<?php echo $count; ?>" class="fancybox"><span><?php the_sub_field('bio_position'); ?></span></a><br/>
							<a href="#bio_content<?php echo $count; ?>" class="fancybox"><span>bio</span></a>
						<div style="display:none;" id="bio_content<?php echo $count; ?>">
							<?php the_sub_field('bio'); ?>
						</div><!-- bio content -->
					</div><!-- end of bio wrapper -->
					<?php $count++; ?>
					<?php endwhile; ?>
				</div><!-- end of row wrapper -->
			<?php endif; ?><!-- bios grid -->
			
						  
			</div><!-- #content -->
			
		</div><!-- #container -->
<?php get_footer(); ?>
