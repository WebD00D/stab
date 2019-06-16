<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header nav">

			<div class="nav__trending">
				<div class="nav__trending-text">
					<i class="fas fa-fire"></i>
					<label>TRENDING</label>
					<p>"I Just Wanted to Jump Out of A...</p>
				</div>
				<div class="nav__cta">
					<a class="cta" href="#">STAB HIGH TIX ON SALE NOW!</a>
					<a href="#" class="social">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="#" class="social">
						<i class="fab fa-facebook"></i>
					</a>
					<a href="#" class="social">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="#" class="social">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<div class="main-navigation__flex">
					<a href="/" style="line-height: 1;"><img class="logo" src="<?php bloginfo('template_directory') ?>/assets/logo-black.png" /></a>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'stab'); ?></button>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					));
					?>
				</div>
				<div class="main-navigation__flex main-navigation__socials">
					<a href="#" class="social">
						<i class="fas fa-search"></i>
					</a>
					<button class="button button--primary">Subscribe</button>
				</div>
			</nav>
		</header>

	
		<div id="content" class="site-content">