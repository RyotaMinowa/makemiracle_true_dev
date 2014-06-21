<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=0.5">
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Original Style -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/featured.css"><!-- いっちーのcss -->
	<link rel="stylesheet" type="text/css" href="<?php get_stylesheet_directory_uri(); ?>/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/social.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jquery -->
	<?php 
	wp_enqueue_script('jquery');
	wp_enqueue_script('style',get_bloginfo('template_url').'/library/js/style.js', array('jquery'));
	?>
	<?php wp_head(); ?>
</head>