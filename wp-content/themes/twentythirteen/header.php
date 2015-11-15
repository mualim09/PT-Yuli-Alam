<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet"
	href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.min.css">
<link rel="stylesheet"
	href="<?php echo esc_url(get_template_directory_uri()); ?>/css/scrolling-nav.css">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
		
			<div class="container">
				<div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
							<li><a class="page-scroll"><?php get_search_form(); ?></a></li>
							<li><a class="page-scroll" href="#services">Services</a></li>
							<li><a class="page-scroll" href="#product">Product</a></li>
							<li><a class="page-scroll" href="#partnership">Partnership</a></li>
							<li><a class="page-scroll" href="#whyus">Why Us</a></li>
							<li><a class="page-scroll" href="#contact">Contact</a></li>
							
						</ul>
					</div>
				</div>
			</div>
			<div id="navbar" class="navbar nav">
				<nav id="site-navigation" class="navigation main-navigation"
					role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content"
						title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					
				</nav>
				<!-- #site-navigation -->
			</div>
			<!-- #navbar -->
		</header>
		<!-- #masthead -->

		<div id="main" class="site-main">