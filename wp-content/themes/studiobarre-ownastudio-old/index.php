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
			<h1 class="myblog"><a href="<?php bloginfo( 'url' ); ?>/events-news">Blog</a></h1>
			<h2 class="latest_posts">Latest Posts</h2>
			<?php $mymain_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => '25', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    		<div class="sidebar_date"><?php echo get_the_date(); ?></div>
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
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
