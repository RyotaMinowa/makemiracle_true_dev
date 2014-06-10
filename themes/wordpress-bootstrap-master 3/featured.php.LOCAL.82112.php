<!-- feature section start-->
<section>
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

    <article>
	    <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img class="topicthumb" src="http://i.ytimg.com/vi/AmPXa52DcFg/0.jpg" alt=""  />
			</div>
		</div>
	    <div>
		    <h1 class="topictitle">
		    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		    	<?php the_title(); ?>
		    	</a>
		    </h1>
		</div>
	</article>
	<!-- feature first article -->
	<!-- feature label start-->
	<section>
	<div class="row">
		<div class="label col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<span class="enheader">MIRACLE TOPICS</span><span class="jpheader">人気記事</span>
		</div>
	</div>
</section>
	<!-- feature label end-->
	<?php $featureLoopCounter++; ?>
	<?php else : ?>
	<!-- feature second-thrid article start-->
	<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix"<?php post_class('clearfix'); ?> role="article">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<img class="thumb" src="http://i.ytimg.com/vi/cfpX8lkaSdk/3.jpg" alt="alt here..." />
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1 class="topictitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					</div>
				</div>
				<div class="row">
					<div class="info col-xs-12 col-sm-12 col-md-12 col-lg-12">
						2014.05.29 <span class="category">オモチャ</span>
					</div>
				</div>
			</div>
		</div>
		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>						
		<!--<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>-->
		<hr />
	</article>
	<!-- feature first article end-->
	<?php endif ?>
<?php endforeach; wp_reset_postdata(); ?>
</section>
<!-- end feature section end-->