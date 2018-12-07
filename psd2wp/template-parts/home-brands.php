<div class="container">
			<div class="brands-container">
				<div class="brands-carousel owl-carousel owl-theme">
				<?php
					// The Query
					$args = array(
					    'post_type'      => 'brands',
					    'status'         => 'published',
					    'posts_per_page' => 1,
					);
					$the_query = new WP_Query($args);
					// The Loop
					echo "<div class='row mt-5'>";
					while ($the_query->have_posts()): $the_query->the_post();{
					        ?>
						        		<div>
												<div class="brands-col col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="brands-icon">
														<?php the_post_thumbnail();?>
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