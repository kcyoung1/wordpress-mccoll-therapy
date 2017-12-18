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
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto" rel="stylesheet">
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
					<div class="logo-container">
							<a href="/" class="mccoll-logo"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.png" alt="McColl Therapy Logo" /></a>
							<a href="/" class="mccoll-name"><h3>McColl Therapy</h3></a>
					</div>
					<button type="button" class="tcon tcon-menu--xcross" aria-label="toggle menu">
							<span class="tcon-menu__lines" aria-hidden="true"></span>
							<span class="tcon-visuallyhidden">toggle menu</span>
					</button>
					<div  class="mobile-nav">
						<ul id="mobile-nav">
							<li><a href="#about" class="focus">About</a></li>
							<li><a href="#services" class="focus">Services</a></li>
							<li><a href="#team" class="focus">Team</a></li>
							<li><a href="#wellness" class="focus">Wellness</a></li>
							<li><a href="#contact" class="btn contact-nav focus">Contact Us</a></li>
						</ul>
					</div>
					<div class="menu-options">
						<ul id="nav" class="nav">
							<li><a href="#about">About</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#team">Team</a></li>
							<li><a href="#wellness">Wellness</a></li>
							<li><a href="#contact" class="btn contact-nav">Contact Us</a></li>
						</ul>
					</div>

					<!-- Not displaying this menu because it is not being used -->
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
