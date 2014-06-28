  <footer>
      <div class="footer-wrap container">
          <div class="footer-wrap-row row">
              <div class="footer-social-buttons col-xs-12">
                <div class="footer-social-buttons-row row">
                    <p class="footer-social-text-top col-xs-12">
                      公式SNSアカウントをフォローして、<br>懐かし動画をチェックしよう！
                    </p>
                    <button class="header-social-button col-xs-4 header-social-facebook" onClick="location.href='https://www.facebook.com/makemiracle90s'">
                    </button>
                    <button class="header-social-button col-xs-4 header-social-twitter" onClick="location.href='https://twitter.com/makemiracle90s'">
                    </button>
                    <button class="header-social-button col-xs-4 header-social-Line" onClick="location.href='http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>'">
                    </button>
                </div>
              </div> 
            <!--
            <div class="footer-category-area col-xs-12">
                <div class="footer-category-1">
                    <span class="footer-category-span">トップ</span>
                    <span class="footer-category-span">CM</span>
                    <span class="footer-category-span">音楽</span><br>
                    <span class="footer-category-span">バラエティ</span>
                    <span class="footer-category-span">アニメ</span>
                    <span class="footer-category-span">人気記事</span><br>
                </div>
              </div>
            -->
            <div class="footer-copyright col-xs-12">
              <span class="footer-copyright-span">Makemiracle. All Rights Reserved</span>
            </div>
          </div>
      </div>
    </footer>
	<script src="js/bootstrap.min.js"></script>
	<?php wp_footer(); // js scripts are inserted using this function ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
    	jQuery('#drawerbtn').sidr({
        	 source: '.navbar-responsive-collapse' ,
        	 side: 'right'
     	});
     	jQuery(".sidr-class-fb-like-box").prepend("<iframe name='f21a08ec24' width='1000px' height='1000px' frameborder='0' allowtransparency='true' scrolling='no' title='fb:like_box Facebook Social Plugin' src='http://www.facebook.com/v2.0/plugins/like_box.php?app_id=452572048204794&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FV80PAcvrynR.js%3Fversion%3D41%23cb%3Df3de90866c%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%253A8888%252Ff2c62af3a8%26relation%3Dparent.parent&amp;color_scheme=light&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmakemiracle90s&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false' style='border: none; visibility: visible; ' class=''></iframe>");
	});
	</script>