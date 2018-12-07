<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PSD_to_WP
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-head-row row ml-0 mr-0">
		 <div class="container">
		 	<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<p class="m-0">Get us know better</p>
				<p>Share your product</p>
			</div>
			<div class="footer-social text-center col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a href=""><i class="fa fa-rss"></i></a>
				<a href=""><i class="fa fa-pinterest"></i></a>
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-dribbble"></i></a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<p class="m-0">Search Heading</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<?php get_search_form(); ?>
			</div>
			</div>
		 </div>
		</div>
		<div class="footer-widgets-row row ml-0 mr-0">
			 <div class="container">
		 	<div class="row">
			<div class="footer-widget-col col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<?php dynamic_sidebar('footer-1'); ?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<?php dynamic_sidebar('footer-2'); ?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<?php dynamic_sidebar('footer-3'); ?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<?php dynamic_sidebar('footer-4'); ?>
			</div>
		</div>
		</div>
		</div>
		<div class="footer-copyrights-row row ml-0 mr-0"></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
	$(document).ready(function(){
	$('.portfolio-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    autoplay:true,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	});

	$('.brands-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    autoplay:true,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    }
	});

});
</script>

</body>
</html>
