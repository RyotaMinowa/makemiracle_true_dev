<head>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=640">
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" >
	<!-- Original Style -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/font-awesome/css/font-awesome.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- jquery -->
	<?php 
	wp_enqueue_script('jquery');
	wp_enqueue_script('style',get_bloginfo('template_url').'/library/js/style.js', array('jquery'));
	?>
    <script type="text/javascript">
		$(document).ready(function(){
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
		});
	</script>
</head>