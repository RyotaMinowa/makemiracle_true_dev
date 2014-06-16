<!doctype html> 
 <!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=640px">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php get_stylesheet_directory_uri(); ?>/font-awesome/css/font-awesome.css">

		<!-- jquery -->
		<?php 
		wp_enqueue_script('jquery');
		wp_enqueue_script('style',get_bloginfo('template_url').'/library/js/style.js', array('jquery'));
		?>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->		
	</head>
	<body <?php body_class(); ?> >
	
	<!--facebooklikebox -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=452572048204794&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>			
		<header role="banner">		
			<div class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<div class="col-xs-10" >
							<a href="#" class="text-center">
			    				<img class="logos" src="http://localhost:8888/dev_makemiracle/wordpress/wp-content/uploads/2014/06/logo.png">
		    				</a>
						<!--<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>-->
						</div>
						<div class="col-xs-2 toggle-area">
							<button type="button" id="drawerbtn" class="navbar-toggle" >
								<i class="fa fa-check-circle"></i>
							</button>
						</div>
					</div>
				</div> <!-- end .container -->
			</div>
			<div class="collapse navbar-collapse navbar-responsive-collapse">
				<div class="row">
					<div id="follow" class="col-xs-6 col-sm-12 col-md-12 col-lg-12" role="contentinfo">
						<span class="enheader">Social Follow</span><span class="jpheader">SNSでフォロー</span>
					</div>
					<div class="fb-like-box-wrap col-xs-6 col-sm-12 col-md-12 col-lg-12 commentarea">
					    <div class="fb-like-box" data-href="https://www.facebook.com/makemiracle90s" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="100%"></div>
					</div>
					<div class="clear"></div>

					<!-- Social account button start -->
					<a class="" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s"onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
					    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  button twitter">
								<i class="fa fa-twitter" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　メークミラクル公式Twitterをフォロー</span>
					    </div>
					</a>
					<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 button facebook" >
							<i class="fa fa-facebook" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　インスタグラム公式アカウントをフォロー</span>
						</div>
					</a>
					<div class="clearfix"></div>
					<div id="category" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" role="contentinfo">
						<span class="enheader">Category</span><span class="jpheader">カテゴリ</span>
					</div>
					<div calss="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
						<?php $cat_all = get_terms( "category", "fields=all&get=all" );foreach($cat_all as $value):?>
						<a href="<?php echo get_category_link($value->term_id); ?>">
							<div class="categoryitem col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
								<?php echo $value->name;?>
							</div>
						</a>
						<?php endforeach; ?>
					</div>
				</div>		
			</div> <!-- end .navbar -->
		</header> <!-- end header -->
