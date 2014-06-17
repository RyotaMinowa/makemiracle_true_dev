<?php get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=452572048204794&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
			<div id="content" class="clearfix row">
			
				<div id="main" class=" clearfix" role="main">


					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
						
							<?php the_post_thumbnail( 'wpbs-featured' ); ?>
							
							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
							<?php the_excerpt(); ?>							
							<p class="meta"> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time><?php the_category(', '); ?></p>
						
						</header> <!-- end article header -->
						<a class="" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s"onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
					        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5  button twitter">
			           			<i class="fa fa-twitter" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">ツイート</span>
					        </div>
				        </a>
				        <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
				        	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5  button facebook">
				        		<i class="fa fa-facebook" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">シェア</span>
				        	</div>
				        </a>
				        <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>">
					        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2  button twitter">
			           			<i class="fa fa-twitter" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">LINE</span>
					        </div>
				        </a>
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							<a class="" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s"onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
						        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  button twitter">
				           			<i class="fa fa-twitter" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　Facebookでシェアする!!</span>
						        </div>
				        	</a>	
							<?php wp_link_pages(); ?>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 commentarea">
					            <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="1" data-colorscheme="light" data-width="100%"></div>
					        </div>
						</section> <!-- end article section -->
						
						<footer>
						
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
							<?php } ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->
			<div class="row">
					<div class="topics col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<span class="enheader">MIRACLE TOPICS</span><span class="jpheader">オススメ記事</span>
					</div>
				</div>
			<div id="content" class="clearfix row">
					<?php query_posts( 'posts_per_page=3&orderby=rand'); if (have_posts()) : while (have_posts()) : the_post(); ?>
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
		<?php endwhile; ?>
		<?php endif; ?>
			<div class="fb-like-box col-xs-12 col-sm-12 col-md-12 col-lg-12 commentarea">
	            <div class="fb-like-box" data-href="https://www.facebook.com/makemiracle90s" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="100%"></div>
	        </div>

	        <!-- Social account button start -->
		        <a class="" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s"onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
			        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 button twitter">
	           			<i class="fa fa-twitter" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　メークミラクル公式Twitterをフォロー</span>
			        </div>
		        </a>
		        <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
		        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 button facebook" >
		        		<i class="fa fa-facebook" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　インスタグラム公式アカウントをフォロー</span>
		        	</div>
		        </a>
		    <!-- Social account button end -->
	    	</div>
		</div>
<?php get_footer(); ?>