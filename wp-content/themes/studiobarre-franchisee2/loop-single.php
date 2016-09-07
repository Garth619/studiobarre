<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<img class="single_image" src="<?php the_field('image_thumb'); ?>"/>
					<div class="entry_wrapper">
					<h2 class="entry-title"><?php the_title(); ?></h2>

					<div class="entry-meta" style="color:#fff;">
						<?php the_field('date'); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->


					<div class="entry-utility">
						
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
					</div><!-- entry wrapper -->
				</div><!-- #post-## -->

				
				<?php // comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>
