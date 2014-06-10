
<?php get_header(); ?>
<!--facebooklikebox -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=452572048204794&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php get_template_part('featured'); ?>

<!-- miracle topic start -->
<section>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<img src="http://i.ytimg.com/vi/cfpX8lkaSdk/0.jpg" alt="alt here..." class="topicthumb" />
		</div>
	</div>
	<div class="row">
		<div class="topics col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<span class="enheader">MIRACLE TOPICS</span><span class="jpheader">人気記事</span>
		</div>
	</div>
	<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix"<?php post_class('clearfix'); ?> role="article">
		<header>
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
							2014.05.29 <span class="categorytag">オモチャ</span>
						</div>
					</div>
				</div>
			</div>
			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>						
			<!--<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>-->
		</header> <!-- end article header -->
		<footer>
			<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>	
		</footer> <!-- end article footer -->
		<hr />
	</article> <!-- end article -->
	<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix"<?php post_class('clearfix'); ?> role="article">
		<header>
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
		</header> <!-- end article header -->
		<footer>
			<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>	
		</footer> <!-- end article footer -->
		<hr />
	</article> <!-- end article -->
</section><!-- end miracle topic-->

<!-- start new topic -->
<section>
	<div class="row">
		<div class="topics col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<span class="enheader">NEW TOPICS</span><span class="jpheader">新着記事</span>
		</div>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); $loopcounter++;?>
		<?php if($loopcounter < 3) : ?>
	<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix"<?php post_class('clearfix'); ?> role="article">
		<header>
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
		</header> <!-- end article header -->
		<footer>
			<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>
		</footer> <!-- end article footer -->
		<hr />
	</article> <!-- end article -->
	<?php else : ?>
		<?php if ($loopcounter == 3) {echo ('
	</section><!-- end new topic -->
	<section><!-- start all topic -->
		<div class="row">
			<div class="topics col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<span class="enheader">ALL TOPICS</span><span class="jpheader">記事一覧</span>
			</div>
		</div>
	
		');} ?>
	<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix"<?php post_class('clearfix'); ?> role="article">
		<header>
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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							2014.05.29 <span class="category">オモチャ</span>
						</div>
					</div>
				</div>
			</div>
			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
			
			<!--<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>-->
		</header> <!-- end article header -->
	
		<footer>

			<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>
			
		</footer> <!-- end article footer -->

	</article>

	<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
</section><!-- end all topic -->
<?php wp_reset_query(); ?>
    <p id="more"><a href="#">もっと表示する</a></p>
	
	
<?php get_footer(); ?>