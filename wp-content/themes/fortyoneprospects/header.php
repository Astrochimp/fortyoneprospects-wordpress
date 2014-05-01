<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fortyoneprospects
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name='viewport' content='content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" />

<!-- For third-generation iPad with high-resolution Retina display: -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory'); ?>icon_144.png">

<!-- For iPhone with high-resolution Retina display: -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>icon_114.png">

<!-- For first- and second-generation iPad: -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>icon_72.png">

<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/icon_32.png">

<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
    <link href='http://fonts.googleapis.com/css?family=Oswald|Karla:700|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slicknav.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fortyone.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/fortyone.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.slicknav.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


 <header id="masthead" class="site-header navbar navbar-custom navbar-fixed-top clearfix" role="banner">
        
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="menu-toggle"><?php _e( 'Menu', 'fortyoneprospects' ); ?></div>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'fortyoneprospects' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="main-logo"><h1><a href="/" class="page-scroll"><img src="<?php bloginfo('template_directory'); ?>/images/41p_horiz_logo.png" alt="41 Prospects" /></a></h1></div>
 </header>


