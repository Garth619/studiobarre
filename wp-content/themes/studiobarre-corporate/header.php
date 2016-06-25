<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name=“p:domain_verify” content="509e532cdce81724ef631de0a29ae61b"/>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/core-sans-25/stylesheet.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/core-sans-25-medium/stylesheet.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/assnapper/stylesheet.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/in_out/stylesheet.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/cycle2.js"></script>
<script>
jQuery(document).ready(function() {
           
           jQuery('.hide').show();
        
        
					 jQuery('.top_half').click(function(){
						 

						 jQuery(this).fadeOut();
						 jQuery(this).next('.read_more_wrapper').delay(800).slideDown(200);
					
						});
					 
			});
        
</script>
<script>

jQuery(document).on('mouseenter', '.single_press_wrapper', function() {

    
        jQuery(this).find('.front').addClass('flipped_front');
        jQuery(this).find('.back').addClass('flipped_back');
  

});


jQuery(document).on('mouseleave', '.single_press_wrapper', function() {

    
        jQuery(this).find('.front').removeClass('flipped_front');
        jQuery(this).find('.back').removeClass('flipped_back');
  

});

</script>
<?php the_field('google_analytics', 'options'); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<a href="<?php bloginfo( 'url' ); ?>"><img id="logo" src="<?php bloginfo( 'template_directory' ); ?>/images/studio-barre.png"/></a>
	<div class="find">
		<a href="<?php bloginfo( 'url' ); ?>/find-your-studio/">find your studio</a>
	</div>
	<a class="tagline" href="<?php bloginfo( 'url' ); ?>">{ strength. defined. }</a>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	</div><!-- #header -->

	<div id="main">
