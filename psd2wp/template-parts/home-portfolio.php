<div class="container">

			<div class="portfolio-head text-center">
				<h3>Recent Portfolio</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever</p>
			</div>

			<div class="portfolio-container">
				<div class="portfolio-carousel owl-carousel owl-theme">
				<?php
				// The Query
				$args = array(
				    'post_type'      => 'portfolio',
				    'status'         => 'published',
				    'posts_per_page' => 1,
				);
				$the_query = new WP_Query($args);
				// The Loop
				echo "<div class='row mt-5'>";
				while ($the_query->have_posts()): $the_query->the_post();{
        		?>
        		<div>
        			
						<div class="portfolio-col col-md-12 col-sm-12 col-xs-12">
							<div class="portfolio-square">
								<div class="portfolio-thumbnail">
									<?php the_post_thumbnail('medium');?>
								</div>
								<h5><?php the_title();?></h5>
								<?php the_excerpt();?>
							</div>
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
			</div>