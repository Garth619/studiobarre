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
		<div id="mylogin">
			<a href="http://studiobarre.com/teacher-resources">barre {tender} login</a>&nbsp;&nbsp;
			<a href="http://studiobarre.com/owner-resources">owner login</a>
		</div>
	</div><!-- #footer -->
	<div id="copyright">
		<span>&copy; 2016  Studio Barre, LLC</span>
	</div>
<div style="clear:both;"></div>
</div><!-- #wrapper -->
<div id="preload">
	<img width="0" height="0" src="<?php bloginfo( 'template_directory' ); ?>/images/back_hover.png"/>
	<img width="0" height="0" src="<?php bloginfo( 'template_directory' ); ?>/images/next_hover.png"/>
	
</div>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
