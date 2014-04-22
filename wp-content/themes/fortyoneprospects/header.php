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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
    <link href='http://fonts.googleapis.com/css?family=Oswald|Karla:700|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fortyone.css">


	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/fortyone.js"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


 <header id="masthead" class="site-header navbar navbar-custom navbar-fixed-top clearfix" role="banner">
        
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="menu-toggle"><?php _e( 'Menu', 'fortyoneprospects' ); ?></div>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'fortyoneprospects' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="main-logo"><h1><a href="#intro" class="page-scroll"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="41 Prospects" /></a></h1></div>
 </header>

<div id="page" class="hfeed site">

	<div id="content" class="site-content">
