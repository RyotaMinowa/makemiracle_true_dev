<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta property=”og:image” content=”http://i.ytimg.com/vi/<?php the_content(); ?>/3.jpg”>
	<title>90年代をみんなで懐かしむ動画メディア メークミラクル90s</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<!-- style.CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://localhost:8888/dev_makemiracle/wordpress/wp-content/themes/revtheme1.0.0/css/bootstrap.min.css">
	<link href="http://localhost:8888/dev_makemiracle/wordpress/wp-content/themes/revtheme1.0.0/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Optional theme -->
	<link rel="stylesheet" href="http://localhost:8888/dev_makemiracle/wordpress/wp-content/themes/revtheme1.0.0/css/zbase.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://localhost:8888/dev_makemiracle/wordpress/wp-content/themes/revtheme1.0.0/js/jquery.js"></script>
	<script src="http://localhost:8888/dev_makemiracle/wordpress/wp-content/themes/revtheme1.0.0/js/bootstrap.min.js"></script>

	
	<!--GoogleAnalythics-->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-51373426-1', 'makemiracle.us');
	ga('send', 'pageview');
	</script>
	<!--OGP開始-->
	<meta property="fb:admins" content="1492102137690432" />
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="blog">
	<?php
	if (is_single()){// 投稿記事
	     if(have_posts()): while(have_posts()): the_post();
	          echo '<meta property="og:description" content="'.mb_substr(get_the_excerpt(), 0, 100).'">';echo "\n";//抜粋から
	     endwhile; endif;
	     echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";//投稿記事タイトル
	     echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";//投稿記事パーマリンク
	} else {//投稿記事以外（ホーム、カテゴリーなど）
	     echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";//「一般設定」で入力したブログの説明文
	     echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";//「一般設定」で入力したブログのタイトル
	     echo '<meta property="og:url" content="'; bloginfo('url'); echo '">';echo "\n";//「一般設定」で入力したブログのURL
	}
	?>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<?php
	$str = $post->post_content;
	$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';//投稿記事に画像があるか調べる
	if (is_single() or is_page()){//投稿記事か固定ページの場合
	if (has_post_thumbnail()){//アイキャッチがある場合
	     $image_id = get_post_thumbnail_id();
	     $image = wp_get_attachment_image_src( $image_id, 'full');
	     echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
	} else if ( preg_match( $searchPattern, $str, $imgurl ) && !is_archive()) {//アイキャッチは無いが画像がある場合
	     echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
	} else {//画像が1つも無い場合
	     echo '<meta property="og:image" content="http://localhost:8888/dev_makemiracle/wordpress/wp-content/themes/revtheme1.0.0/css/facebook_icon.jpg">';echo "\n";
	}
	} else {//投稿記事や固定ページ以外の場合（ホーム、カテゴリーなど）
	     echo '<meta property="og:image" content="http://localhost:8888/dev_makemiracle/wordpress/wp-content/themes/revtheme1.0.0/css/facebook_icon.jpg">';echo "\n";
	}
	?>
	<!--OGP完了-->
	<style>
	.ig-b- { display: inline-block; }
	.ig-b- img { visibility: hidden; }
	.ig-b-:hover { background-position: 0 -60px; } 
	.ig-b-:active { background-position: 0 -120px; }
	.ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
	@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
	.ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }
	</style>

	<title></title>
</head>