<?php
    require_once("../../../wp-config.php");
    $now_post_num = $_POST['now_post_num'];
    $get_post_num = $_POST['get_post_num'];
    $next_now_post_num = $now_post_num + $get_post_num;
    $next_get_post_num = $get_post_num + $get_post_num;
    $sql = "SELECT
            $wp01db->posts.ID,
            $wp01db->posts.post_title,
            $wp01db->posts.post_content
        FROM 
            $wp01db->posts  
        WHERE 
            $wp01db->posts.post_type = 'post' AND $wp01db->posts.post_status = 'publish'
        ORDER BY 
            $wp01db->posts.post_date DESC 
        LIMIT $now_post_num, $get_post_num";
              
    $results = $wp01db->get_results($sql);
      
    $sql = "SELECT
            $wp01db->posts.ID, 
            $wp01db->posts.post_title, 
            $wp01db->posts.post_content 
        FROM 
            $wp01db->posts  
        WHERE 
            $wp01db->posts.post_type = 'post' AND $wp01db->posts.post_status = 'publish'
        ORDER BY 
            $wp01db->posts.post_date DESC 
        LIMIT $next_now_post_num, $next_get_post_num";
      
    $next_results = $wp01db->get_results($sql);
      
    $noDataFlg = 0;
    if ( count($results) < $get_post_num || !count($next_results) ) {
        $noDataFlg = 1;
    }
 
    $html = "";
    


    foreach ($results as $result) {
        $html .= '<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix article-card"<?php post_class("clearfix"); ?> role="article">
			<div class="row card-contents">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height:100%; ">
					<div class="thumb-area" style="width;100%; height:100%; background-image:url("http://i.ytimg.com/vi/cfpX8lkaSdk/3.jpg"); background-repeat: no-repeat; -moz-background-size:100% auto; background-position:50% 50%; background-size:100% auto;background-color:#000;"></div>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 card-desc">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1 class="topictitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						</div>
					</div>
					<div class="row article-meta">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							2014.05.29 <span class="category">オモチャ</span>
						</div>
					</div>
				</div>
			</div>
			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( "wpbs-featured" ); ?></a>
			<!--<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time("Y-m-j"); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>-->
		</article>';
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