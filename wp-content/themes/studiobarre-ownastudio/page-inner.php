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
			<?php echo do_shortcode('[gravityform id="1" name="Studio Barre - Own a Studio " title="false" ajax="true"]'); ?>
		</div><!-- sidebar -->

		<div id="container">
			<div id="content" role="main">
			<?php if (is_page( 203 )): ?>
				<h1 class="fran_inner"><span class="h1_first">about</span><span class="h1_second"> {us}</span></h1>
			<?php endif; ?>
			<?php if (is_page( 205 )): ?>
				<h1 class="fran_inner"><span class="h1_first">about</span><span class="h1_second"> {you}</span></h1>
			<?php endif; ?>
			<?php if (is_page( 207 )): ?>
				<h1 class="fran_inner"><span class="h1_first">next</span><span class="h1_second"> {steps}</span></h1>
			<?php endif; ?>
				<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
			<?php if(get_field('back_button')) : ?>
				<a style="margin-right:15px;" href="<?php the_field('back_button'); ?>">Back</a>
			<?php endif; ?>
			<?php if(get_field('next_button')) : ?>
			 <a href="<?php the_field('next_button'); ?>">Next</a>
			<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_footer(); ?>
