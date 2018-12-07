<div class="container">

			<div class="services-head text-center">
				<h3>Check Out Latest WP theme with page builder</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever</p>
			</div>

			<div class="services-container">
				<?php
				// The Query
				$args = array(
				    'post_type'      => 'services',
				    'status'         => 'published',
				    'posts_per_page' => 4,
				);
				$the_query = new WP_Query($args);
				// The Loop
				echo "<div class='row mt-5'>";
				while ($the_query->have_posts()): $the_query->the_post();{
        		?>

						<div class="service-col col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="service-circle">
								<div class="service-icon">
									<?php the_post_thumbnail();?>
								</div>
								<h5><?php the_title();?></h5>
								<?php the_excerpt();?>
								<a class="service-more" href="<?php the_permalink();?>">Read more <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>


						<?php
					    /* Restore original Post Data */
					        wp_reset_postdata();
					    }
					endwhile;
					echo "</div>";
					?>
			</div>
			</div>