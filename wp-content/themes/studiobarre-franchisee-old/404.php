<?php
/**
 * The template for displaying 404 pages (Not Found).
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
			<a href="<?php bloginfo( 'url' ); ?>/events-news/" class="sidebar_links">Events & News</a>
			<a href="" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/circle.png"/></a>
			<a href="" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/circle.png"/></a>
			<a href="" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/circle.png"/></a>
			<a href="" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/circle.png"/></a>
			<a href="" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/circle.png"/></a>
			<div style="clear:both"></div>
			<span class="store_hours">Store Hours</span>
			<?php if(get_field('days_and_hours')): ?>
				<?php while(has_sub_field('days_and_hours')): ?>
					<span class="store_days"><?php the_sub_field('days'); ?></span>
					<span class="store_day_hours">  <?php the_sub_field('hours'); ?></span>
				<?php endwhile; ?>
			<?php endif; ?>
		<div class="address_font">
			<div itemscope itemtype="http://schema.org/LocalBusiness">
				<span class="location_name" itemprop="name"><?php the_field('name_of_studio','option'); ?></span>
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<span itemprop="streetAddress"><?php the_field('street_address','option'); ?></span>
					<span itemprop="addressLocality"><?php the_field('city','option'); ?></span>,
					<span itemprop="addressRegion"><?php the_field('state','option'); ?></span>  		
					<span itemprop="postalCode"><?php the_field('zip_code','option'); ?></span>
					<span itemprop="telephone">Phone: <?php the_field('telephone','option'); ?></span><br/>
					<a style="color:#fff;" href="<?php the_field('google_map','option'); ?>" target="_blank">{map}</a></div><!-- address -->
			</div><!-- local business -->
			</div><!-- address font-->
		</div><!-- sidebar -->

	<div id="container">
		<div id="content" role="main">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. ', 'twentyten' ); ?></p>
					
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>