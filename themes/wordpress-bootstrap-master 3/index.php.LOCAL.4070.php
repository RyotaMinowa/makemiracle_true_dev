
<?php get_header(); ?>

<?php get_template_part('featured'); ?>
<!-- start new topic -->
<section class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
	<div class="row">
		<div class="topiclabel col-xs-12 col-sm-12 col-md-12 ">
			<span class="enheader">NEW TOPICS</span><span class="jpheader">新着記事</span>
		</div>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); $loopcounter++;?>
	<?php if($loopcounter < 3) : ?>
	<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-6  clearfix article-card"<?php post_class('clearfix'); ?> role="article">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<div class="row card-contents">
				<div class="col-xs-3 col-sm-3 col-md-3 thumb-area">
					<?php the_post_thumbnail(); ?>
					<!--<div class="thumb-area" style="width;100%; height:100%; background-image:url('http://i.ytimg.com/vi/cfpX8lkaSdk/3.jpg'); background-repeat: no-repeat;
	  -moz-background-size:100% auto; background-position:50% 50%; background-size:100% auto;background-color:#000;"></div>-->
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9  card-desc">
					<div class="row ">
						<div class="col-xs-12 col-sm-12 col-md-12 ">
							<h1 class="topictitle"><?php the_title(); ?></h1>
						</div>
					</div>
					<div class="row article-meta">
						<div class="col-xs-12 col-sm-12 col-md-12 ">
							2014.05.29 
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
		</a>	
		<hr />
	</article> <!-- end article -->
	<?php else : ?>
		<?php if ($loopcounter == 3) {echo ('
	</section><!-- end new topic -->

	<section class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8"><!-- start all topic -->
		<div class="row">
			<div class="topiclabel col-xs-12 col-sm-12 col-md-12 ">
				<span class="enheader">ALL TOPICS</span><span class="jpheader">記事一覧</span>
			</div>
		</div>');} ?>
		<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-6  clearfix article-card"<?php post_class('clearfix'); ?> role="article">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<div class="row card-contents">
					<div class="col-xs-3 col-sm-3 col-md-3 thumb-area">
					<?php the_post_thumbnail(); ?>
						<!--<div class="thumb-area" style="width;100%; height:100%; background-image:url('http://i.ytimg.com/vi/cfpX8lkaSdk/3.jpg'); background-repeat: no-repeat;
	  -moz-background-size:100% auto; background-position:50% 50%;
	  background-size:100% auto;background-color:#000;"></div>-->
					</div>
					<div class="col-xs-9 col-sm-9 col-md-9  card-desc">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 ">
								<h1 class="topictitle"><?php the_title(); ?></h1>
							</div>
						</div>
						<div class="row article-meta">
							<div class="col-xs-12 col-sm-12 col-md-12 ">
								2014.05.29 
								<span class="category">	
										<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</a>
		</article>
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
	</section><!-- end all topic -->
	<?php wp_reset_query(); ?>

	<?php get_template_part('ajax_index'); ?>
	
<?php get_footer(); ?>