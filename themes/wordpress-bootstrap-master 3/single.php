<!doctype html> 
 <!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<?php get_template_part('sp_head'); ?>
<body>
<?php get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=452572048204794&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
	jQuery(document).ready(function(){
	    var flg = "close";
	    $(".header-follow-toggle-button").click(function(){
	        if(flg == "close"){
	            $(this).removeClass("header-follow-toggle-button").addClass("header-follow-toggle-button-active"); 
	            $(".header-follow-toggle").removeClass("header-follow-toggle-bg").addClass("header-follow-toggle-bg-active"); 
	            flg = "open";
	        }else{
	            $(this).removeClass("header-follow-toggle-button-active").addClass("header-follow-toggle-button"); 
	            $(".header-follow-toggle-bg-active").removeClass("header-follow-toggle-bg-active").addClass("header-follow-toggle-bg"); 
	            flg = "close";
	        }
	    });
	    
	    var tab = $(".fix-social"), 
		offset = tab.offset();
		$(window).scroll(function () {
				if($(window).scrollTop() > offset.top) {
				tab.addClass('fixed');
				} else {
					 tab.removeClass('fixed');
				}
		});
	});
</script>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="article-section">
	<article id="post-<?php the_ID(); ?>" class="article">
		<div class="article-single-wrap container">
			<div class="article-row row">
				<div class="col-xs-12 article-single-desc">
					<h1 class="article-single-title"><?php the_title(); ?></h1>
					<p class="article-single-meta">
						<span class="category-span <?php echo $cat->category_nicename; ?> category meta text-right"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
						<i class="fa fa-clock-o"></i><span class="date-span"><?php echo get_post_time('Y.m.d'); ?></span>
					</p>
				</div>
				<div id="share" class="col-xs-12 article-single-share fix-social">
					<div class="social-share-buttons col-xs-12">
	            		<div class="social-share-buttons-row row">
	              			<button class="social-share-button col-xs-4 social-share-facebook" onClick="location.href='http://www.facebook.com/share.php?u=<?php the_permalink(); ?>'" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">
	              			</button>
	              			<button class="social-share-button col-xs-4 social-share-twitter" onClick="location.href='https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s'">
	              			</button>
	              			<button class="social-share-button col-xs-4 header-social-line" onClick="location.href='http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>'">
                    		</button>
	            		</div>
	          		</div> 
				</div>
				<div class="col-xs-12 article-single-content">
						<?php the_content(); ?>
				</div>
			</div>
		</div>
	</article>		
</section> <!-- end article section -->
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

<?php get_template_part('single_featured'); ?>

<?php get_footer(); ?>
</body>
</html>