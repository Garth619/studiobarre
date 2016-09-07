<?php
/**
 * Template Name: Inner
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
			<?php if (is_page( 149 )): ?><!-- main page -->
					<?php if(get_field('slideshow')): ?>
				<div class="slideshow">
				<div class="cycle-slideshow"  data-cycle-slides="> ul">
					<?php while(has_sub_field('slideshow')): ?>
						<?php if(get_sub_field('slide_link')) : ?>
        			<?php if(get_sub_field('externally')) : ?>
            		<?php if(get_sub_field('grey_border')) : ?>
										<?php $main_slide = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slide'); ?>
										<ul class="myslides">
            					<li><a href="<?php the_sub_field('externally'); ?>" target="_blank"><img  class="hide" src="<?php echo $main_slide[0]; ?>"/></a></li>
										</ul>
								<?php else: ?><!-- no grey border -->
										<?php $main_slide2 = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slide'); ?>
										<ul class="myslides">
											<li><a href="<?php the_sub_field('externally'); ?>" target="_blank"><img class="hide" style="border:none;padding:10px;" src="<?php echo $main_slide2[0]; ?>"/></a></li>
										</ul>
								<?php endif; ?> <!-- end of grey border on externally -->
							<?php else : ?><!--  no externally but internally -->
								<?php $main_slide3 = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slide'); ?>
									<?php if(get_sub_field('grey_border')) : ?><!-- internal grey box -->
										<ul class="myslides">
            					<li><a href="<?php the_sub_field('internally'); ?>"><img class="hide" src="<?php echo $main_slide3[0]; ?>"/></a></li>
										</ul>
									<?php else : ?><! no grey border -->
										<?php $main_slide4 = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slide'); ?>
										<ul class="myslides">
            					<li><a href="<?php the_sub_field('internally'); ?>"><img style="border:none;padding:10px;" class="hide" src="<?php echo $main_slide4[0]; ?>"/></a></li>
										</ul>
									<?php endif; ?><!-- end of grey border if -->
								<?php endif; ?><!-- end of if externally -->
							<?php else : ?><!-- slide show link else no links -->
								<?php if(get_sub_field('grey_border')) : ?>
									<?php $main_slide5 = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slide'); ?>
									<ul class="myslides">
										<li><img class="hide" src="<?php echo $main_slide5[0]; ?>"/></li>
									</ul>
								<?php else : ?><!-- no grey border on no link slides -->
									<?php $main_slide6 = wp_get_attachment_image_src(get_sub_field('slide'), 'main-slide'); ?>
									<ul class="myslides">
										<li><img style="border:none;padding:10px;" class="hide" src="<?php echo $main_slide6[0]; ?>"/></li>
									</ul>
								<?php endif; ?><!-- end of grey border -->
							<?php endif; ?><!-- end of slide link if -->
					<?php endwhile; ?><!-- end of slideshow while -->
				</div><!-- cycle slideshow -->
				</div><!-- slideshow -->
			<?php endif; ?><!-- slideshow -->
		<?php endif; ?><!-- main page -->
		<?php if (is_page( 163 )): ?><!-- bare tenders page -->
				<div class="row_wrapper">
				<div class="barre_bio_img_wrapper">
				<?php if(get_field('bio_1_name')) :?>
					<?php if(get_field('bio_1_image')) :?>
						<?php $bio_image = wp_get_attachment_image_src(get_field('bio_1_image'), 'bio-size'); ?>
						<?php $bio_colorimage = wp_get_attachment_image_src(get_field('bio_color_image'), 'bio-size'); ?>
						<?php $bio_lightbox = wp_get_attachment_image_src(get_field('bio_color_image'), 'bio-lightbox'); ?>
						<a href="#bio_content" class="fancybox"><img id="myhover1" class="barre_bio" src="<?php echo $bio_image[0]; ?>" <?php if(get_field('bio_color_image')): ?> onmouseover="document.getElementById('myhover1').src='<?php echo $bio_colorimage[0]; ?>'" onmouseleave="document.getElementById('myhover1').src='<?php echo $bio_image[0]; ?>'"
					<?php endif; ?>
					/></a>
				<?php else:?>
				<a href="#bio_content" class="fancybox"><img id="myhover1" class="barre_bio" src="<?php bloginfo( 'template_directory' ); ?>/images/silhouette.jpg" /></a>
				<?php endif; ?>
					<div style="clear:both;"></div>
					<a href="#bio_content" class="fancybox"><span style="margin-top:10px;"><?php the_field('bio_1_name'); ?></span></a><br/>
					<a href="#bio_content" class="fancybox"><span><?php the_field('bio_1_position'); ?></span></a><br/>
					<a href="#bio_content" class="fancybox"><span>bio</span></a>
					<div style="display:none;" id="bio_content">
						<!-- <img style="display:block;margin:0 auto 5px auto;" src="<?php echo $bio_lightbox[0]; ?>"/> -->
						<?php the_field('bio_1_bio'); ?>
					</div>
					<?php endif; ?><!-- bio 1 name -->
				</div><!-- end of bio wrapper -->
				<div class="barre_bio_img_wrapper">
				<?php if(get_field('bio_2_name')) :?>
					<?php if(get_field('bio_2_image')) :?>
						<?php $bio_imagetwo = wp_get_attachment_image_src(get_field('bio_2_image'), 'bio-size'); ?>
						<?php $bio_colorimagetwo = wp_get_attachment_image_src(get_field('bio_color_image_2'), 'bio-size'); ?>
							<a href="#bio_content2" class="fancybox"><img id="myhover2" class="barre_bio" src="<?php echo $bio_imagetwo[0]; ?>" <?php if(get_field('bio_color_image_2')): ?> onmouseover="document.getElementById('myhover2').src='<?php echo $bio_colorimagetwo[0]; ?>'" onmouseleave="document.getElementById('myhover2').src='<?php echo $bio_imagetwo[0]; ?>'"
					<?php endif; ?>
					/></a>
					<?php else: ?>
						<a href="#bio_content2" class="fancybox"><img id="myhover2" class="barre_bio" src="<?php bloginfo( 'template_directory' ); ?>/images/silhouette.jpg"/></a>
					<?php endif; ?>
					<a href="#bio_content2" class="fancybox"><span style="margin-top:10px;"><?php the_field('bio_2_name'); ?></span></a><br/>
					<a href="#bio_content2" class="fancybox"><span><?php the_field('bio_2_position'); ?></span></a><br/>
					<a href="#bio_content2" class="fancybox"><span>bio</span></a>
					<div style="display:none;" id="bio_content2">
						<?php the_field('bio_2_bio'); ?>
					</div>
					<?php endif; ?><!-- bio 2 name -->
				</div><!-- end of bio wrapper -->
				
				<img id="tuck" src="<?php bloginfo( 'template_directory' ); ?>/images/tuck.png"/>
			</div><!-- end of row wrapper -->
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
			<?php endif; ?><!-- barre tender page -->
			<?php if (is_page( 155 )): ?><!-- main page -->
				<div style="float:right;display:block;margin-bottom:4px;"><?php the_field('heal_code_login_shortcode'); ?></div>
				<div style="clear:both;"><?php the_field('mind_body_code'); ?></div>
			<?php endif; ?>
			<?php if (is_page( array( 151 ))): ?><!-- about us page -->
					<h1 class="fran_inner"><span class="h1_first">about</span><span class="h1_second"> {us}</span></h1>
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>

					<?php if(get_field('slideshow')): ?>
					<?php $count=0; ?>
				<div class="inner_slideshow">
				<div class="cycle-slideshow"  data-cycle-slides="> ul" data-cycle-pause-on-hover="true" data-cycle-timeout="1500">
				<div class="cycle-prev"></div>
    <div class="cycle-next"></div>
					<?php while(has_sub_field('slideshow')): ?>
						<?php if(get_sub_field('slide_link')) : ?>
        			<?php if(get_sub_field('externally')) : ?>
            		<?php if(get_sub_field('grey_border')) : ?>
										<?php $main_slide = wp_get_attachment_image_src(get_sub_field('slide'), 'about-slides'); ?>
										<?php $main_slide2 = wp_get_attachment_image_src(get_sub_field('slide_hover'), 'about-slides'); ?>
										<ul class="myslides">
            					<li><a href="<?php the_sub_field('externally'); ?>" target="_blank"><img id="myhover<?php echo $count ?>" onmouseover="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide2[0]; ?>'" onmouseleave="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide[0]; ?>'" class="hide" src="<?php echo $main_slide[0]; ?>"/></a></li>
										</ul>
										<?php $count++; ?>
								<?php else: ?><!-- no grey border -->
										<?php $main_slide = wp_get_attachment_image_src(get_sub_field('slide'), 'about-slides'); ?>
										<?php $main_slide2 = wp_get_attachment_image_src(get_sub_field('slide_hover'), 'about-slides'); ?>
										<ul class="myslides">
											<li><a href="<?php the_sub_field('externally'); ?>" target="_blank"><img id="myhover<?php echo $count ?>" onmouseover="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide2[0]; ?>'" onmouseleave="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide[0]; ?>'" class="hide" style="border:none;padding:10px;" src="<?php echo $main_slide[0]; ?>"/></a></li>
										</ul>
										<?php $count++; ?>
								<?php endif; ?> <!-- end of grey border on externally -->
							<?php else : ?><!--  no externally but internally -->
								<?php $main_slide3 = wp_get_attachment_image_src(get_sub_field('slide'), 'about-slides'); ?>
									<?php if(get_sub_field('grey_border')) : ?><!-- internal grey box -->
									<?php $main_slide = wp_get_attachment_image_src(get_sub_field('slide'), 'about-slides'); ?>
									<?php $main_slide2 = wp_get_attachment_image_src(get_sub_field('slide_hover'), 'about-slides'); ?>
									<ul class="myslides">
            				<li><a href="<?php the_sub_field('internally'); ?>"><img id="myhover<?php echo $count ?>" class="hide" onmouseover="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide2[0]; ?>'" onmouseleave="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide[0]; ?>'" src="<?php echo $main_slide[0]; ?>"/></a></li>
										</ul>
										<?php $count++; ?>
									<?php else : ?><! no grey border -->
										<?php $main_slide = wp_get_attachment_image_src(get_sub_field('slide'), 'about-slides'); ?>
									<?php $main_slide2 = wp_get_attachment_image_src(get_sub_field('slide_hover'), 'about-slides'); ?>

										<ul class="myslides">
            				<li><a href="<?php the_sub_field('internally'); ?>"><img id="myhover<?php echo $count ?>"  style="border:none;padding:10px;" onmouseover="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide2[0]; ?>'" onmouseleave="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide[0]; ?>'" class="hide" src="<?php echo $main_slide[0]; ?>"/></a></li>
										</ul>
										<?php $count++; ?>
									<?php endif; ?><!-- end of grey border if -->
								<?php endif; ?><!-- end of if externally -->
							<?php else : ?><!-- slide show link else no links -->
								<?php if(get_sub_field('grey_border')) : ?>
								<?php $main_slide = wp_get_attachment_image_src(get_sub_field('slide'), 'about-slides'); ?>
									<?php $main_slide2 = wp_get_attachment_image_src(get_sub_field('slide_hover'), 'about-slides'); ?>
									<ul class="myslides">
										<li><img id="myhover<?php echo $count ?>" onmouseover="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide2[0]; ?>'" onmouseleave="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide[0]; ?>'" class="hide" src="<?php echo $main_slide[0]; ?>"/></li>
									</ul>
									<?php $count++; ?>
								<?php else : ?><!-- no grey border on no link slides -->
									<?php $main_slide = wp_get_attachment_image_src(get_sub_field('slide'), 'about-slides'); ?>
									<?php $main_slide2 = wp_get_attachment_image_src(get_sub_field('slide_hover'), 'about-slides'); ?>
									<ul class="myslides">
										<li><img id="myhover<?php echo $count ?>" style="border:none;padding:10px;" onmouseover="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide2[0]; ?>'" onmouseleave="document.getElementById('myhover<?php echo $count; ?>').src='<?php echo $main_slide[0]; ?>'" class="hide" src="<?php echo $main_slide[0]; ?>"/></li>
									</ul>
									<?php $count++; ?>
								<?php endif; ?><!-- end of grey border -->
							<?php endif; ?><!-- end of slide link if -->
					<?php endwhile; ?><!-- end of slideshow while -->
				</div><!-- cycle slideshow -->
				</div><!-- slideshow -->
			<?php endif; ?><!-- slideshow -->
				<?php endif; ?>
				<?php if (is_page( 159 )): ?><!-- promo -->
				<h1 class="fran_inner" style="margin-bottom:35px;"><span class="h1_first">promos</span></h1>
				<?php if(get_field('promos')): ?>
					<?php while(has_sub_field('promos')): ?>
					<p><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('title'); ?></a></p>
					<?php $mypromo = wp_get_attachment_image_src(get_sub_field('promo_image'), 'promos'); ?>
					<div style="clear:both;width:100%;float:left;">
						<a href="<?php the_sub_field('link'); ?>" target="_blank"><img class="promo_images" src="<?php echo $mypromo[0]; ?>"/></a></div>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php endif; ?><!-- promo -->
			
			
			
			<?php if (is_page( 157 )): ?>
			<h1 class="fran_inner" style="margin-bottom:35px;"><span class="h1_first">pricing</span></h1>
			<div class="pricing_col1">
				<?php if( get_field('pricing') ): ?>
					<?php while(has_sub_field('pricing') ): ?>
							<div class="pricing">
							<h1 class="pricing_title"><?php the_sub_field('pricing_section'); ?></h1>
								<?php if(get_sub_field('prices') ): ?>
									<ul>
									<?php while(has_sub_field('prices') ): ?>
										<li><?php the_sub_field('single_prices'); ?></li>
									<?php endwhile; ?>
									</ul>
									<?php the_sub_field('asterik_description'); ?>
								<?php endif; ?>
							</div><!-- pricing -->
					<?php endwhile; ?>
			<?php endif;?><!-- pricing -->
			</div><!-- pricing_col1 -->
			<div class="pricing_col2">
				<?php if( get_field('pricing2') ): ?>
					<?php while(has_sub_field('pricing2') ): ?>
							<div class="pricing">
							<h1 class="pricing_title"><?php the_sub_field('pricing_section'); ?></h1>
								<?php if(get_sub_field('prices') ): ?>
									<ul>
									<?php while(has_sub_field('prices') ): ?>
										<li><?php the_sub_field('single_prices'); ?></li>
									<?php endwhile; ?>
									</ul>
									<?php the_sub_field('asterik_description'); ?>
								<?php endif; ?>
							</div><!-- pricing -->
					<?php endwhile; ?>
			<?php endif;?><!-- pricing -->
			</div><!-- pricing_col2 -->
			<?php endif; ?>
			
			
			
			
			
				<div style="clear:both;"></div>
				<?php if (is_page( 303 )): ?><!-- contact page -->
					<h1 class="fran_inner"><span class="h1_first">contact</span><span class="h1_second"> {us}</span></h1>
						<?php
						/* Run the loop to output the page.
						 * If you want to overload this in a child theme then include a file
						 * called loop-page.php and that will be used instead.
						 */
						get_template_part( 'loop', 'page' );
						?>
						 
						 <?php the_field('iframe_map'); ?>
						  <?php endif; ?>
						  
				</div><!-- #content -->
			
		</div><!-- #container -->
<?php get_footer(); ?>
