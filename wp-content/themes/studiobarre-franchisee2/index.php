<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
		<div id="sidebar">
			<h1 class="myblog"><a href="<?php bloginfo( 'url' ); ?>/events">Events</a></h1>
			<h2 class="latest_posts">Latest Events</h2>
			<?php $mymain_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => '6', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    		<div class="sidebar_date"><?php the_field('date'); ?></div>
                        <h1 class="sidebar_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                       <!--
<?php if ( count( get_the_category() ) ) : ?>
					<span style="display:block;margin-top:4px;" class="cat-links">
						<?php printf( __( '<span style="color:#FFE000" class="%1$s">Posted in</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
					</span>
				
				<?php endif; ?>
-->

                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); // reset the query ?>
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

	<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
				
		
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
