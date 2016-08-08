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
			<?php if(get_field('sidebar_content')): ?>
				<?php the_field('sidebar_content'); ?>
			<?php endif; ?>
		</div><!-- sidebar -->
		<div id="container">
			<div id="content" role="main">
			<?php if (is_page( 10 )): ?><!-- faqs page -->
				<?php if(get_field('faqs_intro')): ?>
					<h1 class="faq"><?php the_field('faqs_intro'); ?></h1>
					<?php endif; ?>
					<?php if(get_field('questions_answers')): ?>
						<?php while(has_sub_field('questions_answers')): ?>
							<p class="question"><?php the_sub_field('questions'); ?></p>
							<p class="answer"><?php the_sub_field('answers'); ?></p>
						<?php endwhile; ?>
					<?php endif; ?> <!-- questions and answers -->
			<?php endif; ?><!-- faqs page -->
				<?php if (is_page( array( 8,12 ))): ?><!-- about us page -->
					<?php if(get_field('slideshow')): ?>
					<?php $count=0; ?>
				<div class="inner_slideshow">
				<div class="cycle-slideshow"  data-cycle-slides="> ul" data-cycle-pause-on-hover="true">
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
<?php if (is_page( 144 )): ?><!-- owners and teacher pages -->
<?php the_content(); ?>
<?php
if ( ! post_password_required() ): ?>
   <?php if(get_field('login')): ?>
	 <?php while(has_sub_field('login')): ?>
	 		<?php if(get_sub_field('link')): ?>
			<p class="question"><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('link_title'); ?></a></p>
			<p class="answer"><?php the_sub_field('link_description'); ?></p>
			<?php endif; ?><!-- link -->
			<?php if(get_sub_field('file')): ?>
			<p class="question"><a href="<?php the_sub_field('file'); ?>" target="_blank"><?php the_sub_field('title'); ?></a></p>
			<p class="answer"><?php the_sub_field('file_description'); ?></p>
			<?php endif; ?><!-- file -->
			<?php if(get_sub_field('video_file')): ?>
			<p class="question"><?php the_sub_field('video_file_title'); ?></p>
			<p class="answer"><?php the_sub_field('video_file_description'); ?></p>
			<p><?php echo do_shortcode('[video mp4="' . get_sub_field('video_file') .'" width="560" height="315"]');?></p>
			<?php endif; ?><!-- video file -->
			<?php if(get_sub_field('video_youtube')): ?>
			<p class="question"><?php the_sub_field('video_youtube_title'); ?></p>
			<p class="answer"><?php the_sub_field('video_youtube_description'); ?></p>
			<p><?php the_sub_field('video_youtube'); ?></p>
			 <?php endif; ?><!-- youtube -->
    <?php endwhile; ?>
 <?php endif; ?><!-- login -->
<?php endif; ?><!-- password -->
<?php endif; ?><!-- 144 -->
<?php if (is_page( 300 )): ?><!-- owners and teacher pages -->
<?php the_content(); ?>
<?php
if ( ! post_password_required() ): ?>
   <?php if(get_field('login')): ?>
	 <?php while(has_sub_field('login')): ?>
	 		<?php if(get_sub_field('link')): ?>
			<p class="question"><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('link_title'); ?></a></p>
			<p class="answer"><?php the_sub_field('link_description'); ?></p>
			<?php endif; ?><!-- link -->
			<?php if(get_sub_field('file')): ?>
			<p class="question"><a href="<?php the_sub_field('file'); ?>" target="_blank"><?php the_sub_field('title'); ?></a></p>
			<p class="answer"><?php the_sub_field('file_description'); ?></p>
			<?php endif; ?><!-- file -->
			<?php if(get_sub_field('video_file')): ?>
			<p class="question"><?php the_sub_field('video_file_title'); ?></p>
			<p class="answer"><?php the_sub_field('video_file_description'); ?></p>
			<p><?php echo do_shortcode('[video mp4="' . get_sub_field('video_file') .'" width="560" height="315"]');?></p>
			<?php endif; ?><!-- video file -->
			<?php if(get_sub_field('video_youtube')): ?>
			<p class="question"><?php the_sub_field('video_youtube_title'); ?></p>
			<p class="answer"><?php the_sub_field('video_youtube_description'); ?></p>
			<p><?php the_sub_field('video_youtube'); ?></p>
			 <?php endif; ?><!-- youtube -->
    <?php endwhile; ?>
 <?php endif; ?><!-- login -->
<?php endif; ?><!-- password -->
<?php endif; ?><!-- 300 -->
<?php if (is_page( 6 )): ?><!-- find a studio -->
	<h1 class="assnapper_header">Locations</h1>
	<?php if(get_field('location') ): ?>
		<?php while(has_sub_field('location') ): ?>
			<?php if(get_sub_field('state_section') ): ?>
				<p class="state"><?php the_sub_field('state_section'); ?></p>
				<div class="location_info">
				<div itemscope itemtype="http://schema.org/LocalBusiness">
				  	
				  	<span class="location_address" itemprop="name"><a id="location_title" href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('studio_name'); ?></a></span><br/>
				  	<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				  		<span class="location_address" itemprop="streetAddress"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('street_address'); ?></a></span><br/>
				  		<span class="location_address" itemprop="addressLocality"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('city'); ?></a></span>, 
				  		<span class="location_address" itemprop="addressRegion"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('state_abbr'); ?></a></span> 
				  		<span class="location_address" itemprop="postalCode"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('zip_code'); ?></a></span><br/>
				  		<span class="location_address" itemprop="telephone"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('telephone'); ?></a></span>
				  	</div><!-- schema address -->
				  </div><!-- schema -->
				</div><!-- location_info -->
				<?php else : ?>
				<div class="location_info" style="">
				  <div itemscope itemtype="http://schema.org/LocalBusiness">
				  	<span class="location_address" itemprop="name"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('studio_name'); ?></a></span><br/>
				  	<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				  		<span class="location_address" itemprop="streetAddress"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('street_address'); ?></a></span><br/>
				  		<span class="location_address" itemprop="addressLocality"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('city'); ?></a></span>, 
				  		<span class="location_address" itemprop="addressRegion"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('state_abbr'); ?></a></span> 
				  		<span class="location_address" itemprop="postalCode"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('zip_code'); ?></a></span><br/>
				  		<span class="location_address" itemprop="telephone"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('telephone'); ?></a></span>
				  	</div><!-- schema address -->
				  </div><!-- schema -->
				</div><!-- location_info -->	
				
			<?php endif; ?><!-- state section -->
		<?php endwhile; ?><!-- location -->
	<?php endif; ?><!-- location -->
<?php endif; ?><!-- find a studio -->
<?php if (is_page( 16 )): ?><!-- contact us -->
<h1 class="fran_inner"><span class="h1_first">contact</span><span class="h1_second"> {us}</span></h1>
 <?php echo do_shortcode( '[gravityform id="2" tabindex=32 name="Studio Barre Corporate Contact" title="false" description="false" ajax="true"]' ) ?> 
<?php endif; ?>
<?php if (is_page( 12 )): ?><!-- barre wear page -->
						 
						 
		<?php if(get_field('products')): ?>
				
				<div class="row_wrapper">
					<?php while(has_sub_field('products')): ?>
						<div class="barre_bio_img_wrapper">
							<?php $product_image = wp_get_attachment_image_src(get_sub_field('product_images'), 'product-size'); ?>
							
							<img class="barre_bio" src="<?php echo $product_image[0]; ?>" />
							<span style="margin-top:10px;"><?php the_sub_field('product_name'); ?><br/><?php the_sub_field('price'); ?></span>
					</div><!-- end of bio wrapper -->
					
					<?php endwhile; ?>
				</div><!-- end of row wrapper -->
			<?php endif; ?><!-- product grid -->				 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
<?php endif; ?>
				</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
