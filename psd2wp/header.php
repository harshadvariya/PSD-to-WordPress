<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PSD_to_WP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'psd2wp' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="small-header row ml-0 mr-0">
			<div class="container">
				<div class="pull-left col-md-7 col-sm-12">
					<div class="small-header-info">
						<i class="fa fa-mobile"></i>+555-5555
					</div>
					<div class="small-header-info">
						<i class="fa fa-envelope-o"></i> info@test.com
					</div>
					<div class="small-header-info">
						<i class="fa fa-clock-o"></i> Monday - Friday, 8.00 - 20.00
					</div>
				</div>
				<div class="col-md-5 col-sm-12 pull-right">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'header-small',
							'menu_class' => 'small-menu'
						) );
					?>
				</div>
			</div>
		</div>

		<div class="site-branding row text-center py-4 ml-0 mr-0">
			<div class="container">
				<?php the_custom_logo(); ?>
			</div>
		</div><!-- .site-branding -->

	<div class="nav-row row ml-0 mr-0">
		<div class="container">
		<nav id="site-navigation" class="main-navigation">
			
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'psd2wp' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container' => ''
			) );
			?>
		</div>
		</nav><!-- #site-navigation -->
	</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
