
<?php get_header(); ?>

<?php get_template_part('featured'); ?>


<!-- start new topic -->
<section>
	<div class="row">
		<div class="topiclabel col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
			<span class="enheader">NEW TOPICS</span><span class="jpheader">新着記事</span>
		</div>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); $loopcounter++;?>
	<?php if($loopcounter < 3) : ?>
	<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 clearfix article-card"<?php post_class('clearfix'); ?> role="article">
		<div class="row card-contents">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 " style="height:100%; ">
				<div class="thumb-area" style="width;100%; height:100%; background-image:url('http://i.ytimg.com/vi/cfpX8lkaSdk/3.jpg'); background-repeat: no-repeat;
  -moz-background-size:100% auto; background-position:50% 50%;
  background-size:100% auto;background-color:#000;"></div>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 card-desc">
				<div class="row ">
					<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
						<h1 class="topictitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					</div>
				</div>
				<div class="row article-meta">
					<div class="info col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
						2014.05.29 <span class="category">オモチャ</span>
					</div>
				</div>
			</div>
		</div>
		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
		<!--<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>-->
		<hr />
	</article> <!-- end article -->
	<?php else : ?>
		<?php if ($loopcounter == 3) {echo ('
	</section><!-- end new topic -->
	<section><!-- start all topic -->
		<div class="row">
			<div class="topiclabel col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
				<span class="enheader">ALL TOPICS</span><span class="jpheader">記事一覧</span>
			</div>
		</div>');} ?>
		<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 clearfix article-card"<?php post_class('clearfix'); ?> role="article">
			<div class="row card-contents">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height:100%; ">
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
						<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
							2014.05.29 <span class="category">オモチャ</span>
						</div>
					</div>
				</div>
			</div>
			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
			<!--<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>-->
		</article>
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
	</section><!-- end all topic -->
	<?php wp_reset_query(); ?>
    <p id="more"><a href="#">もっと表示する</a></p>
	
	
<?php get_footer(); ?>