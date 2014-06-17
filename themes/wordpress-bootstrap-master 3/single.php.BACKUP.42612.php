<?php get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=452572048204794&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

			<div id="content" class="clearfix row">
				<div id="main" class=" clearfix" role="main">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" class="clearfix col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8"role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>				
							<p class="<?php echo $cat->category_nicename; ?> category meta text-right"><?php the_category(', '); ?></p>
						
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
<<<<<<< HEAD
				        </a>
				        <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>">
					        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2  button twitter">
			           			<i class="fa fa-twitter" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">LINE</span>
=======
				        </a><a class="" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s"onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
					        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2  button line">
								<span class="share_text">LINE</span>
>>>>>>> 1520983af8d67d14c79bdee477b3efdfdb87b815
					        </div>
				        </a>
					
						<section class="post_content clearfix" itemprop="articleBody">
							<div id="single-content" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="text-center">
									<?php the_content(); ?>
								</div>
							</div>
							<a class="" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s"onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
						        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  button facebook">
				           			<i class="fa fa-facebook" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　Facebookでシェアする!!</span>
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
					</article>
					<?php endif; ?>
			
				</div> <!-- end #main -->
			<?php get_footer(); ?>
</div> <!-- end #content -->
