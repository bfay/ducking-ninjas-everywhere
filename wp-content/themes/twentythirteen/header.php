<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
<script type="text/javascript" src="//use.typekit.net/ebq4mrn.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){ }</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37218996-1']);
  _gaq.push(['_setDomainName', 'rockinguitarlessons.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper full">
	<div class="content_container full">
	<div class="splash full">
		<header class="site-header row" role="banner">
			<div class="eleven columns push-one">
			<div class="logo">
			<a href="index.php"><img src="http://images.rockinguitarlessons.com/logo.png" alt="Rockin Guitar Lessons Logo"/></a>
			</div>
			</div>
			
			<div id="uber" class="row">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #uber -->
	<div class="row">
		<img class="shadow" src="http://images.rockinguitarlessons.com/shadow_full.png"/> 		
		</div>	
		</header><!-- #masthead -->

		<div id="main" class="site-main">
