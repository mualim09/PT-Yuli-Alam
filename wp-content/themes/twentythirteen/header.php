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
<script type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script type="text/javascript"
	src="<?php echo esc_url(get_template_directory_uri()); ?>/js/autoscroller.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
			<nav class="navbar"
				role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a id="burger" class="navbar-toggle collapsed" style="cursor: pointer;"
							data-toggle="collapse" data-target="#burgermenu">
							<span style="color: #000000; " class="glyphicon glyphicon-menu-hamburger"></span>
						</a>
					</div>
					<div id="burgermenu" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<!-- <li><a class="page-scroll"><?php/*  get_search_form(); */ ?></a></li> -->
							<li><a class="page-scroll" href="#products">Products</a></li>
							<li><a class="page-scroll" href="#aboutus">About Us</a></li>
							<li><a class="page-scroll" href="#contactus">Contact Us</a></li>
							<div class="pull-right">
								<img id="switcheng"
									src="<?php echo get_template_directory_uri(); ?>/images/ukflag.jpg"
									class="flag">&nbsp;</img> <img id="switchjap"
									src="<?php echo get_template_directory_uri(); ?>/images/japanflag.jpg"
									class="flag">&nbsp;</img>
							</div>
						</ul>
					</div>
				</div>
			</nav>
			<div id="navbar" class="navbar nav" style="top: 10px;">
				<nav id="site-navigation" class="navigation main-navigation"
					role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content"
						title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php /* wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); */ ?>
					
				</nav>
				<p
					style="font-family: Segoe WP; font-weight: light; font-size: 20px; position: absolute; left: 30px; bottom: 0px;">Enjoy
					our Indonesian natural products.</p>

				<!-- #site-navigation -->
			</div>
			<!-- #navbar -->
		</header>
		<!-- #masthead -->

		<div id="main" class="site-main">