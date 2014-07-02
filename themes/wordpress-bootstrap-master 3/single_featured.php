		<section class="pop-article-section">
			<div class="pop-h container">
				<div class="pop-h-row row">
					<div class="col-xs-12 pop-h-desc">
						<p class="pop-h-text">こちらもおすすめ</p>
					</div>
				</div>
			</div>
			<?php
				$args = array(
				    'post_type' => '',
				    'posts_per_page' => 5,
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
				$myposts = get_posts($args);
				foreach ( $myposts as $post ) :setup_postdata( $post ); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); $loopcounter++;?>
				<article class="article-card">
					<div class="article-card-wrap container">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<div class="article-card-row row">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 article-card-thum">
								<?php
									$image_id = get_post_thumbnail_id();
									$image_url = wp_get_attachment_image_src($image_id, true);
								?>
								<img class="article-thumb" src="<?php echo $image_url[0]; ?>"><!--記事サムネイル-->
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 article-card-desc">
								<h1 class="article-card-text"><?php if(mb_strlen($post->post_title)>44) { $title= mb_substr($post->post_title,0,44) ; echo $title. ･･･ ;
				} else {echo $post->post_title;}?></h1>
								<p class="article-card-meta">
									<?php
										$cat = get_the_category();
										$cat = $cat[0];
									?>
									<span class="category-span <?php echo $cat->category_nicename; ?> category"><?php echo $cat->cat_name; ?></span>
									<i class="fa fa-clock-o"></i><span class="date-span"><?php echo get_post_time('Y.m.d'); ?></span>
								</p>
							</div>
						</div>
					</a>
					</div>

				</article>
				<?php endwhile; ?>
				<?php endif; ?>