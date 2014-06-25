<?php if (have_posts()) : while (have_posts()) : the_post(); $loopcounter++;?>
<article class="article-card">
	<div class="article-card-wrap container">
		<div class="article-card-row row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 article-card-thum">
				<?php
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id, true);
				?>
				<img src="<?php echo $image_url[0]; ?>"><!--記事サムネイル-->
			</div>
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 article-card-desc">
				<h1 class="article-card-text"><?php the_title(); ?></h1>
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
	</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
