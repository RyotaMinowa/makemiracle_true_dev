<!-- feature section start-->
<section class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
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

    <!-- feature first article -->
    <article class="col-xs-12 col-sm-12 col-md-12">
    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" style="color:white; vertical-align: middle;">
			<?php
				$image_id = get_post_thumbnail_id();
				$image_url = wp_get_attachment_image_src($image_id, true);
			?>
			<img class="topicthumb" src="<?php echo $image_url[0]; ?>" alt=""  />
			<div class="topicoverlay">
	    		<h1 class="topictitle"><?php the_title(); ?></h1>
			</div>
		</a>
	</article>
	<!-- feature first article -->
	<!-- feature label start-->
	<div class="row">
		<div class="topiclabel col-xs-12 col-sm-12 col-md-12 ">
			<span class="enheader">MIRACLE TOPICS</span><span class="jpheader">人気記事</span>
		</div>
	</div>
	<!-- feature label end-->
	<?php $featureLoopCounter++; ?>
	<?php else : ?>
	<!-- feature second-thrid article start-->
	<article id="post-<?php the_ID(); ?>" class="clearfix article-card"<?php post_class('clearfix'); ?> role="article">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<div class="row card-contents">
				<div class="col-xs-3 col-sm-3 col-md-3 thumb-area" style="height:100%;">
					<?php
						$image_id = get_post_thumbnail_id();
						$image_url = wp_get_attachment_image_src($image_id, true);
					?>
					<!--<?php the_post_thumbnail(); ?>-->
					<div class="thumb-area" style="width:100%; height:100%; background-image:url('<?php echo $image_url[0]; ?>'); background-repeat: no-repeat;
	  -moz-background-size:100% auto; background-position:50% 50%;
	  background-size:100% auto;background-color:#000;"></div>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 card-desc">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 ">
							<h1 class="topictitle"><?php the_title(); ?></h1>
						</div>
					</div>
					<div class="row article-meta">
						<div class="col-xs-12 col-sm-12 col-md-12 ">
							<?php echo get_post_time('Y.m.d'); ?> 
							<?php
								$cat = get_the_category();
								$cat = $cat[0];
							?>
							<span class="<?php echo $cat->category_nicename; ?> category">
								<?php echo $cat->cat_name; ?>
							</span>
						</div>
					</div>
					</div>
				</div>
			</div>
		</a>
		<hr />
	</article>
	<!-- feature first article end-->
	<?php endif ?>
<?php endforeach; wp_reset_postdata(); ?>
</section>
<!-- end feature section end-->