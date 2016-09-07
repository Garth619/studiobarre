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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
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
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {
           
           jQuery('.hide').show();
        });
</script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".fancybox").fancybox({
			maxWidth	: 500,
			height		: '70%'
		});
	});
</script>
<?php the_field('google_analytics', 'options'); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<a href="http://studiobarre.com"><img id="logo" src="<?php bloginfo( 'template_directory' ); ?>/images/studio-barre.png"/></a>
	<div class="find">
		<a href="<?php bloginfo( 'url' ); ?>/schedule">online reservation</a>
	</div>
	<a class="tagline" href="<?php bloginfo( 'url' ); ?>">{ strength. defined. }</a>
	<div class="yellow_line">
	</div>
			</div><!-- #header -->

	<div id="main">
