var now_post_num = 6; // 現在表示されている数
var get_post_num = 6; // もっと読むボタンを押した時に取得する数
  
jQuery("#more a").live("click", function() {
      
    jQuery("#more").html('<img class="ajax_loading" src="http://wordpress/wp-content/themes/wordpress-bootstrap-master\ 3/library/img/ajax-loader.gif" />');
     
    jQuery.ajax({
        type: 'post',
        url: 'http://localhost:8888/dev_makemiracle/wordpress/wp-content/themes/wordpress-bootstrap-master\ 3/more.php',
        data: {
            'now_post_num': now_post_num,
            'get_post_num': get_post_num
        },
        success: function(data) {
            now_post_num = now_post_num + get_post_num;
            data = JSON.parse(data);
            jQuery(".main").append(data['html']);
            jQuery("#more").remove();
            if (!data['noDataFlg']) {
                jQuery(".main").append('<p id="more"><a href="#">もっと表示する</a></p>');
            }
        }
    });
    return false;
});