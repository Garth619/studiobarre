<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div id="sidebar">
			<h1 class="myblog">Blog</h1>
			<h2 class="latest_posts">Latest Posts</h2>
			<?php $mymain_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => '25', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    		<div class="sidebar_date"><?php echo get_the_date(); ?></div>
                        <h1 class="sidebar_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); // reset the query ?>
		</div><!-- sidebar -->
		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
