<<<<<<< HEAD
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

	
	<div id="hot">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8">				
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
			$myposts = get_posts($args);
			foreach ( $myposts as $post ) :
				setup_postdata( $post );
			?>
			    <h1 class="topictitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			    <div><?php the_content(); ?></div>
			    <?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>

	<div id="hot">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8">
				<img src="http://i.ytimg.com/vi/cfpX8lkaSdk/0.jpg" alt="alt here..." class="topicthumb" />
			</div>
		</div>
		<div class="row">
			<div class="popular col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8">
				<span class="enheader">MIRACLE TOPICS</span><span class="jpheader">人気記事</span>
			</div>
		</div>
		<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8 clearfix"<?php post_class('clearfix'); ?> role="article">
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
		<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8 clearfix"<?php post_class('clearfix'); ?> role="article">
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
	</div>
	<div class="row">
			<div class="popular col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8">
				<span class="enheader">NEW TOPICS</span><span class="jpheader">新着記事</span>
			</div>
		</div>
	<div id="content" class="clearfix row">

			<?php if (have_posts()) : while (have_posts()) : the_post(); $loopcounter++;?>
			
				<?php if($loopcounter < 3) : ?>
					<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8 clearfix"<?php post_class('clearfix'); ?> role="article">
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
					<?php if ($loopcounter == 3) {
						echo ('
								
								<div class="row">
									<div class="popular col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8">
										<span class="enheader">ALL TOPICS</span><span class="jpheader">記事一覧</span>
									</div>
								</div>
								
								');} ?>
				<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8 clearfix"<?php post_class('clearfix'); ?> role="article">
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
	        <div class="fb-like-box col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-6 commentarea">
	            <div class="fb-like-box" data-href="https://www.facebook.com/makemiracle90s" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="100%"></div>
	        </div>

	        <!-- Social account button start -->
		        <a class="" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s"onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
			        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8  button twitter">
	           			<i class="fa fa-twitter" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　メークミラクル公式Twitterをフォロー</span>
			        </div>
		        </a>
		        <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
		        	<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 button facebook" >
		        		<i class="fa fa-facebook" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　インスタグラム公式アカウントをフォロー</span>
		        	</div>
		        </a>
		    <!-- Social account button end -->
	    	</div>
		<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
				
				<?php page_navi(); // use the page navi function ?>
				
			<?php } else { // if it is disabled, display regular wp prev & next links ?>
				<nav class="wp-prev-next">
					<ul class="pager">
						<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
						<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
					</ul>
				</nav>
			<?php } ?>		
			
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

		<!-- <?php get_sidebar(); // sidebar 1 ?> -->

	</div> <!-- end #content -->

=======
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

			<div id="hot">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8">
						<img src="http://i.ytimg.com/vi/cfpX8lkaSdk/0.jpg" alt="alt here..." class="topicthumb" />
					</div>
				</div>
				<div class="row">
					<div class="popular col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8">
						<span class="enheader">MIRACLE TOPICS</span><span class="jpheader">人気記事</span>
					</div>
				</div>
				<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8 clearfix"<?php post_class('clearfix'); ?> role="article">
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
				<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8 clearfix"<?php post_class('clearfix'); ?> role="article">
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
			</div>
			<div class="row">
					<div class="popular col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8">
						<span class="enheader">NEW TOPICS</span><span class="jpheader">新着記事</span>
					</div>
				</div>
			<div id="content" class="clearfix row">

					<?php if (have_posts()) : while (have_posts()) : the_post(); $loopcounter++;?>
					
						<?php if($loopcounter < 3) : ?>
							<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8 clearfix"<?php post_class('clearfix'); ?> role="article">
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
							<?php if ($loopcounter == 3) {
								echo ('
										
										<div class="row">
											<div class="popular col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8">
												<span class="enheader">ALL TOPICS</span><span class="jpheader">記事一覧</span>
											</div>
										</div>
										
										');} ?>
						<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8 clearfix"<?php post_class('clearfix'); ?> role="article">
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
			        <div class="fb-like-box col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-6 commentarea">
			            <div class="fb-like-box" data-href="https://www.facebook.com/makemiracle90s" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="100%"></div>
			        </div>

			        <!-- Social account button start -->
				        <a class="" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s"onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
					        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8  button twitter">
			           			<i class="fa fa-twitter" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　メークミラクル公式Twitterをフォロー</span>
					        </div>
				        </a>
				        <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
				        	<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 button facebook" >
				        		<i class="fa fa-facebook" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　インスタグラム公式アカウントをフォロー</span>
				        	</div>
				        </a>
				    <!-- Social account button end -->
			    	</div>
				<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
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
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>		
				</div> <!-- end #main -->
    			
				<!-- <?php get_sidebar(); // sidebar 1 ?> -->
    		
			</div> <!-- end #content -->

>>>>>>> 9ed29cf42c05763038a081909922b09942a3ec4a
<?php get_footer(); ?>