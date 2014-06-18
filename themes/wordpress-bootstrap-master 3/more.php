<?php
	require_once("../../../wp-config.php");
	$now_post_num = $_POST['now_post_num'];
	$get_post_num = $_POST['get_post_num'];
	$next_now_post_num = $now_post_num + $get_post_num;
	$next_get_post_num = $get_post_num + $get_post_num;
	$sql = "SELECT
			$wpdb->posts.ID,
			$wpdb->posts.post_title,
			$wpdb->posts.post_content
		FROM 
			$wpdb->posts  
		WHERE 
			$wpdb->posts.post_type = 'post' AND $wpdb->posts.post_status = 'publish'
		ORDER BY 
			$wpdb->posts.post_date DESC 
		LIMIT $now_post_num, $get_post_num";
			  
	$results = $wpdb->get_results($sql);
	  
	$sql = "SELECT
			$wpdb->posts.ID, 
			$wpdb->posts.post_title, 
			$wpdb->posts.post_content 
		FROM 
			$wpdb->posts  
		WHERE 
			$wpdb->posts.post_type = 'post' AND $wpdb->posts.post_status = 'publish'
		ORDER BY 
			$wpdb->posts.post_date DESC 
		LIMIT $next_now_post_num, $next_get_post_num";
	  
	$next_results = $wpdb->get_results($sql);
	  
	$noDataFlg = 0;
	if ( count($results) < $get_post_num || !count($next_results) ) {
		$noDataFlg = 1;
	}
 
	$html = "";
  
	foreach ($results as $result) {
		$html .= '<article class="articleMainBox">';
		$html .= '<h1><a href="'.get_permalink($result->ID).'" class="over">'.apply_filters('the_title', $result->post_title).'</a></h1>';
		$html .= '<p>'.get_post_time('M d, Y','false',$result->ID).'</p>';
		$html .= '<p>'.mb_substr(strip_tags($result->post_content), 0, 108).'...</p>';
		$html .= '<p><a href="'.get_permalink($result->ID).'">Read More</a></p>';
		$html .= '</article>';
	}
	$returnObj = array();
	$returnObj = array(
		'noDataFlg' => $noDataFlg,
		'html' => $html
	);
	$returnObj = json_encode($returnObj);
 
	echo $returnObj;
?>
