<?php
/**
 * Template Name: Locations
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
	
		<div id="container" style="float:left;width:100%;">
			<div id="content" role="main">
				<img class="locations_images" src="<?php bloginfo( 'template_directory' ); ?>/images/locations.png"/>
	<?php if(get_field('location') ): ?>
		<?php while(has_sub_field('location') ): ?>
			<?php if(get_sub_field('state_section') ): ?>
				<p class="state" style="padding-top: 30px;"><?php the_sub_field('state_section'); ?></p>
				<div class="location_info">
				<div itemscope itemtype="http://schema.org/LocalBusiness">
				  	
				  	<span class="location_address" itemprop="name"><a style="font-size:20px;margin-bottom:12px;display:inline-block;color:#ffe000" href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('studio_name'); ?></a></span><br/>
				  	
				  	
				  	<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				  		<span class="location_address" itemprop="streetAddress"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('street_address'); ?></a></span><br/>
				  		<span class="location_address" itemprop="addressLocality"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('city'); ?></a></span>, 
				  		<span class="location_address" itemprop="addressRegion"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('state_abbr'); ?></a></span> 
				  		<span class="location_address" itemprop="postalCode"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('zip_code'); ?></a></span><br/>
				  		<span class="location_address" itemprop="telephone"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('telephone'); ?></a></span>
				  		<?php if(get_sub_field('link_to_microsite')): ?>
				  		<br/><span class="location_address"><a style="color:#ffe000" href="<?php the_sub_field('book_an_event_link'); ?>">Book a Class</a></span>
				  	<?php endif; ?>
				  	</div><!-- schema address -->
				  </div><!-- schema -->
				</div><!-- location_info -->
				<?php else : ?>
				<div class="location_info" style="">
				  <div itemscope itemtype="http://schema.org/LocalBusiness">
				  	<span class="location_address" itemprop="name"><a style="font-size:20px;margin-bottom:12px;display:inline-block;color:#ffe000" href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('studio_name'); ?></a></span>
				  	
				  	<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				  		<span class="location_address" itemprop="streetAddress"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('street_address'); ?></a></span><br/>
				  		<span class="location_address" itemprop="addressLocality"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('city'); ?></a></span>, 
				  		<span class="location_address" itemprop="addressRegion"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('state_abbr'); ?></a></span> 
				  		<span class="location_address" itemprop="postalCode"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('zip_code'); ?></a></span><br/>
				  		<span class="location_address" itemprop="telephone"><a href="<?php the_sub_field('link_to_microsite'); ?>"><?php the_sub_field('telephone'); ?></a></span>
				  		<?php if(get_sub_field('link_to_microsite')): ?>
				  		<br/><span class="location_address"><a style="color:#ffe000" href="<?php the_sub_field('book_an_event_link'); ?>">Book a Class</a></span>
				  	<?php endif; ?>
				  	</div><!-- schema address -->
				  </div><!-- schema -->
				</div><!-- location_info -->	
				
			<?php endif; ?><!-- state section -->
		<?php endwhile; ?><!-- location -->
	<?php endif; ?><!-- location -->				
			<div style="clear:both;"></div>
			</div><!-- #content -->
			
		</div><!-- #container -->
<?php get_footer(); ?>
