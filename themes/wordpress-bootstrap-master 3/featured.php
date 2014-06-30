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
				<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 feature-article-big">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="background-image: url('<?php the_title_attribute(); ?>');">
					<div class="feature-article-big-row row">
					<?php
						$image_id = get_post_thumbnail_id();
						$image_url = wp_get_attachment_image_src($image_id, true);
					?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 feature-article-big-text-area" style="background-image: url('<?php echo $image_url[0]; ?>')"><!--↑こいつにBGI-->
							<!--↑こいつにBGI-->
							<h1 class="feature-article-text"><?php the_title(); ?></h1>
						</div>
					</div>
				</a>
				</div>
				<?php $featureLoopCounter++; ?>
				<?php elseif($featureLoopCounter == 1): ?>
				<!-- feature small -->
				<div class="col-xs-6 col-sm-6 col-md-offset-2 col-md-4 col-lg-offset-2 col-lg-4 feature-article-small">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<div class="feature-article-small-row row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<?php
								$image_id = get_post_thumbnail_id();
								$image_url = wp_get_attachment_image_src($image_id, true);
							?>
							<img class="topicthumb" src="<?php echo $image_url[0]; ?>" alt=""  /><!--ここはimageをおく-->
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 feature-article-small-text-area">
							<h1 class="feature-article-small-text"><?php the_title(); ?></h1>
						</div>
					</div>
				</a>
				</div>
				
				<?php $featureLoopCounter++; ?>
				<?php elseif($featureLoopCounter == 2): ?>
				<!-- feature small -->
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 feature-article-small">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<div class="feature-article-small-row row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<?php
								$image_id = get_post_thumbnail_id();
								$image_url = wp_get_attachment_image_src($image_id, true);
							?>
							<img class="topicthumb" src="<?php echo $image_url[0]; ?>" alt=""  /><!--ここはimageをおく-->
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 feature-article-small-text-area">
							<h1 class="feature-article-small-text"><?php the_title(); ?></h1>
						</div>
					</div>
				</a>
				</div>
				
				<?php endif ?>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
</section>



