<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$asset = get_site_url() . '/assets/img/';

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/style.css" />
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/responsive.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>

<body <?php body_class(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<header id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
			<div class="container-fluid bg-Yellow">
				<div class="row">
					<div class="col-12">
						<!-- <div class="container">
							<div class="row justify-content-between">
								<div class="m-2">
									<p>Espace client</p>
								</div>
								<div class="m-2">
									<p>log in</p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

									<nav class="navbar-light navbar-expand-md navbar">

										<?php if (is_front_page() && is_home()) : ?>

											<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

										<?php else : ?>

											<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><img id="bts-logo" src="<?php echo $asset ?>logo@2x.png" alt="logo_bts" style="width:20%"></a>

										<?php endif; ?>

										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
											<span class="navbar-toggler-icon"></span>
										</button>

										<!-- The WordPress Menu goes here -->
										<?php wp_nav_menu(
											array(
												'theme_location'  => 'primary',
												'container_class' => 'collapse navbar-collapse',
												'container_id'    => 'navbarNavDropdown',
												'menu_class'      => 'navbar-nav ml-auto',
												'fallback_cb'     => '',
												'menu_id'         => 'main-menu',
												'depth'           => 2,
												'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
											)
										); ?>

									</nav><!-- .site-navigation -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header><!-- #wrapper-navbar end -->
		<main>