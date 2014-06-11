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
    <article>
	    <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img class="topicthumb" src="https://farm6.staticflickr.com/5174/5506170466_e3566819e9_n.jpg" alt=""  />
				<div class="topicoverlay">
		    <h1 class="topictitle">
		    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" style="color:white; vertical-align: middle;">
		    	<?php the_title(); ?>
		    	</a>
		    </h1>
		</div>
			</div>
		</div>
	</article>
	<!-- feature first article -->
	<!-- feature label start-->
	<div class="row">
		<div class="topiclabel col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<span class="enheader">MIRACLE TOPICS</span><span class="jpheader">人気記事</span>
		</div>
	</div>
	<!-- feature label end-->
	<?php $featureLoopCounter++; ?>
	<?php else : ?>
	<!-- feature second-thrid article start-->
	<article id="post-<?php the_ID(); ?>" class="clearfix article-card"<?php post_class('clearfix'); ?> role="article">
		<div class="row card-contents">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style=" height:100%; ">
				<div class="thumb-area" style="width;100%; height:100%; background-image:url('http://i.ytimg.com/vi/cfpX8lkaSdk/3.jpg'); background-repeat: no-repeat;
  -moz-background-size:100% auto; background-position:50% 50%;
  background-size:100% auto;background-color:#000;"></div>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 card-desc">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
						<h1 class="topictitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					</div>
				</div>
				<div class="row article-meta">
					<div class="info col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 article-meta">
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