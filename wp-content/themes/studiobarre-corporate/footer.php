<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="footer_left">
			<a href="" class="find_us">find us</a>
			<a href="<?php the_field('twitter', 'options'); ?>" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter.png"/></a>
			<a href="<?php the_field('pinterest', 'options'); ?>" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/pinterest.png"/></a>
			<a href="<?php the_field('instagram', 'options'); ?>" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/instagram.png"/></a>
			<a href="<?php the_field('facebook', 'options'); ?>" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/facebook.png"/></a>
			<a href="<?php the_field('google_plus', 'options'); ?>" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/google-plus.png"/></a>
		</div><!-- footer-left -->
		<div id="footer_right">
			<a href="mailto:<?php the_field('email', 'options'); ?>"><img class="email" src="<?php bloginfo( 'template_directory' ); ?>/images/email.png"/></a>
			<div class="footer_email">
				<span class="footer_brackets">{</span>
				<!-- <span class="footer_subscribe">subscribe</span> -->
				<?php echo do_shortcode('[gravityform id="1" name="Studio Barre E-Newsletter Sign Up" title="false" description="true" ajax="true"]'); ?>
				<span class="footer_brackets">}</span>
			</div><!-- footer email -->
		</div><!-- footer right -->
	</div><!-- #footer -->
	<div id="copyright">
		<span>&copy; 2016  Studio Barre, LLC</span>
	</div>
<div style="clear:both;"></div>
</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
