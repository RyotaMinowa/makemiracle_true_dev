	<footer>
      <div class="footer-wrap container">
        <div class="footer-wrap-row row">
          <div class="footer-social-buttons col-xs-12">
            <div class="footer-social-buttons-row row">
              <p class="footer-social-text-top col-xs-12">
                Makemiracle90sの公式アカウントをフォローしよう
              </p>
              <button class="footer-social-button col-xs-4" id="facebook">
                <div class="footer-social-button-row row">
                  <i class="footer-social-icon col-xs-2 fa fa-facebook fa-1x"></i> <!--意味分からんとこにくるし色どうやって変えるか分からんわ！！！-->
                  <p class="footer-social-text-sns col-xs-10">
                    <span class="follow-span">Follow</span><br>
                    <span class="on-sns-span">on Facebook</span>
                  </p>
                </div>
              </button>
              <button class="footer-social-button col-xs-4" id="twitter">
                <div class="footer-social-button-row row">
                  <i class="footer-social-icon col-xs-2 fa fa-twitter fa-1x"></i>
                  <p class="footer-social-text-sns col-xs-10">
                    <span class="follow-span">Follow</span><br> <!--なぜか改行されないからbr入れた-->
                    <span class="on-sns-span">on Twitter</span>
                  </p>
                </div>
              </button>
              <button class="footer-social-button col-xs-4" id="feedly">
                <div class="footer-social-button-row row">
                  <i class="footer-social-icon col-xs-2"></i>
                  <p class="footer-social-text-sns col-xs-10">
                    <span class="follow-span">Follow</span><br>
                    <span class="on-sns-span">on Feedly</span>
                  </p>
                </div>
              </button>
            </div>
          </div> 

          <div class="footer-category-area col-xs-12">
            <div class="footer-category-1">
              <span class="footer-category-span">トップ</span>
              <span class="footer-category-span">トレンド</span>
              <span class="footer-category-span">エンタメ・カルチャー</span><br>
              <span class="footer-category-span">ライフ・社会</span>
              <span class="footer-category-span">コラム</span>
              <span class="footer-category-span">人気記事</span><br>
            </div>
            <div class="footer-category-2">
              <span class="footer-category-span">運営会社</span>
              <span class="footer-category-span">利用規約</span>
              <span class="footer-category-span">プライバシーポリシー</span><br>
              <span class="footer-category-span">お問い合わせ</span>
             </div>
          </div>

          <div class="footer-copyright col-xs-12">
            <span class="footer-copyright-span">Makemiracle, Inc. All Rights Reserved</span>
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