<section class="feature-article-section">
	<div class="feature-article-section-wrap container">
		<div class="feature-article-section-row row">
			<?php
				$args = array(
				    'post_type' => '',
				    'posts_per_page' => 3,
				    'meta_query' => array(
				        'relation' => 'AND',
				        array(
				            'key' => 'is_featured',
				            'value' => '1',
				        ),
				        array(
				            'key' => 'price',
				            'value' => 500,
				            'compare' => '>=',
				            'type' => 'NUMERIC'
				        ),
				    ),
				);
				$featureLoopCounter = 0;
				$myposts = get_posts($args);
				foreach ( $myposts as $post ) :setup_postdata( $post ); ?>
				<?php if($featureLoopCounter == 0): ?>

			<!-- feature big -->
			<div class="col-xs-12 feature-article-big">
				<div class="feature-article-big-row row">
					<div class="col-xs-12 feature-article-big-text-area">
						<!--↑こいつにBGI-->
						<h1 class="feature-article-text"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
			<?php $featureLoopCounter++; ?>
			<?php else : ?>
			<!-- feature small -->
			<div class="col-xs-6 feature-article-small">
				<div class="feature-article-small-row row">
					<div class="col-xs-12">
						<?php
							$image_id = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src($image_id, true);
						?>
						<img class="topicthumb" src="<?php echo $image_url[0]; ?>" alt=""  /><!--ここはimageをおく-->
					</div>
					<div class="col-xs-12 feature-article-small-text-area">
						<h1 class="feature-article-small-text"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
			<?php endif ?>
			<?php endforeach; wp_reset_postdata(); ?>			

		</div>
	</div>
</section>



