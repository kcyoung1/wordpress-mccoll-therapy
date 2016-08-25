<?php
/**
 * The header for our theme.
 *
 * @package McColl_Therapy_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<div class="logo-container">
							<a href="/" class="mccoll-logo"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/mccoll-therapy.png" alt="McColl Therapy Logo" /></a>
							<a href="/" class="mccoll-name"><h3>McColl Therapy Inc.</h3></a>
					</div>
					<div class="menu-options">
						<ul id="nav">
							<li><a href="#about" class="focus">About</a></li>
							<li><a href="#services" class="focus">Services</a></li>
							<li><a href="#contact" class="btn contact-nav">Contact Us</a></li>
						</ul>
					</div>

					<!-- Not displaying this menu because it is not being used -->
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
