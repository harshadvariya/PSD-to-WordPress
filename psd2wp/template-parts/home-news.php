<div class="container">

			<div class="news-head text-center">
				<h3>Our Latest News</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever</p>
			</div>

			<div class="news-container">
				<?php
				// The Query
				$args = array(
				    'post_type'      => 'post',
				    'status'         => 'published',
				    'posts_per_page' => 3,
				);
				$the_query = new WP_Query($args);
				// The Loop
				echo "<div class='row mt-5'>";
				while ($the_query->have_posts()): $the_query->the_post();{
        		?>
						<div class="news-col col-md-4 col-sm-6 col-xs-12">
							<div class="news-square">
								<div class="news-thumbnail">
									<?php the_post_thumbnail('thumbnail');?>
								</div>
								<div class="news-detail">
									<h5><?php the_title();?></h5>
									<?php wpacademy_tag_list(); ?>
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