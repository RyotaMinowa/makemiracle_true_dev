<!DOCTYPE html>

<html>
<?php get_header(); ?>



	<style>
.ig-b- { display: inline-block; }
					.ig-b- img { visibility: hidden; }
					.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
					.ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
					@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
					.ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }
	</style>

	<title></title>

<body>
	<!--facebookcomments-->

	<div id="fb-root"></div><script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=452572048204794&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script><!--facebookfollow-->

	<div id="fb-root"></div><script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=292292120944179&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

	<div class="head-wrap row">
	    <header class="col-md-12">
    		<div class="row head-content">
    			<div class="logo-area col-xs-12 col-md-6 col-md-offset-3">
    				<div class="row text">
	    				<a href="http://makemiracle.us/" class="text-center">
		    				<img src="http://localhost:8888/dev_makemiracle/wordpress/wp-content/themes/revtheme1.0.0/img/logos.png">
		    				<span>90年代頃をみんなで懐かしむ動画メディア</span>
	    				</a>
    				</div>
    			</div>
    		</div>
	    </header>
	</div>

	<!--<?php query_posts($query_string . '&posts_per_page=5'); ?>-->
	<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<article>
			<section class="post-section row" id="<?php the_ID(); ?>">
				<div class="post-title col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="post-head row">
					<div class="col-xs-offset-8 col-xs-4 col-sm-offset-4 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 text-right">
						<?php the_time('Y/m/d') ?>
					</div>
				</div><!-- post-content を子divに移した-->

	<div class="col-xs-12 col-sm-12 col-md-offset-7 col-md-3 col-lg-offset-7 col-lg-3 text-right">
							<!-- twitter follow -->
							<a class="twitter-follow-button" data-show-count="false" href=
							"https://twitter.com/makemiracle90s">Follow @makemiracle90s</a>
							<script>
							!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
							</script> 
							<!-- Instagram follow -->
							 <a class="ig-b- ig-b-v-24" href=
							"http://instagram.com/makemiracle90s?ref=badge"><img alt=
							"Instagram" src=
							"//badges.instagram.com/static/images/ig-badge-view-24.png"></a>
							<?php remove_filter ('the_content', 'wpautop'); ?>
						</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 post-content ">
						<div class="retro_video_preview" id="u80la8j9Z_c"
						style="width:75%; height:58%; position: absolute; top: 7%; left: 13%;">
						<div class="retro_thumbnail">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="post-scl-area row">
					
					<p class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 text-center post-subcopy " style="color:#727272;">この頃、あなたは何をしてましたか？</p>
<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">

					<div class="col-xs-12 col-sm-offset-3 col-sm-3 col-md-offset-3 col-md-3 col-lg-offset-3 col-lg-3 button facebook">
					<i class="fa fa-facebook" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　同級生にシェア！</span>
					</div><a class="" href=""></a>

					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3  button twitter">
							 <i class="fa fa-twitter" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　同級生にシェア！</span>
					</div>
				</div>
			</section>
		</article>
	</div>
	<hr />
	<?php endwhile; ?>
	<?php endif; ?>
	<!-- pager -->
	<?php if (function_exists("pagination")) {
	    pagination($additional_loop->max_num_pages);
	} ?>
	<!-- /pager     -->
	<?php get_footer(); ?>
	<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript">
    	$(function(){

    		var baseWidth = $('.post-content').width();
    		var ratio = 1;
			var frameHeight = baseWidth*ratio;
			$('.post-content').css('height', frameHeight);
			var baseWidth = $('.button').width();
			var rspblText = baseWidth/12;
			$('.share_text').css('font-size', rspblText);
			var baseWidth = $('.post-content').width();
			var rspblText = baseWidth/20;
			$('.post-subcopy').css('font-size', rspblText);
		});
    </script>
<?php get_footer(); ?>
</body>
</html>