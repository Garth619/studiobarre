<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div id="sidebar">
			<h1 class="myblog"><a href="<?php bloginfo( 'url' ); ?>/events">Events</a></h1>
			<h2 class="latest_posts">Latest Posts</h2>
			<?php $mymain_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => '25', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    		<div class="sidebar_date"><?php the_field('date'); ?></div>
                        <h1 class="sidebar_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                       <?php if ( count( get_the_category() ) ) : ?>
					<span style="display:block;margin-top:4px;" class="cat-links">
						<?php printf( __( '<span style="color:#FFE000" class="%1$s">Posted in</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
					</span>
				<!-- 	<span class="meta-sep">|</span> -->
				<?php endif; ?>

                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); // reset the query ?>
		</div><!-- sidebar -->

		<div id="container">
			<div id="content" role="main">

<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h1 class="page-title">
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
			</h1>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archive.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'archive' );
?>

			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
