<?php
/**
 * The template for displaying all pages
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PSD_to_WP
 */

get_header();
?>

	<div id="primary" class="content-area">

		<!-- Banner Section -->
		<div class="home-banner row ml-0 mr-0">
			<div class="container">
				<div class="banner-text">
				<h1>Nnc Responsive Theme</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
				</div>
			</div>
		</div> <!-- End Banner Section -->

		<!-- Services -->
		<div class="home-services row ml-0 mr-0">
			<?php get_template_part('template-parts/home','services'); ?>
		</div>
		<!-- End Services -->
		
		<!-- Portfolio -->
		<div class="home-portfolio py-5 row ml-0 mr-0">
			<?php get_template_part('template-parts/home','portfolio'); ?>
		</div>
		<!-- End Portfolio -->

		<!-- Latest News -->
		<div class="home-portfolio py-5 row ml-0 mr-0">
			<?php get_template_part('template-parts/home','news'); ?>
		</div>
		<!-- End Latest News -->

		<!-- Brands -->
		<div class="home-brand py-5 row ml-0 mr-0">
			<?php get_template_part('template-parts/home','brands'); ?>
		</div>
		<!-- End Brands -->


	</div><!-- #primary -->

<?php
get_footer();
