<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package v5
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="robots" content="noindex">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Signika:300,400" rel="stylesheet">

<!--[if lt IE 9]>
<link rel="stylesheet" href="/css/ie.css">
<![endif]-->

<!--IE Fix for HTML5 Tags-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="https://use.typekit.net/awp0yow.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php $class='';
if(is_single()) {
	$category = get_the_category();
	$class .= $category[0]->slug;
}?>
<body <?php if (function_exists('body_class')) body_class($class ); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'v5' ); ?></a>

	<header id="masthead" class="site-header row" role="banner">
		
	<div class="site-branding columns small-2 large-1 large-offset-1 medium-offset-1 medium-1">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo" rel="home"><span>Justin Delabar</span></a></h1>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation columns small-10 large-4" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
