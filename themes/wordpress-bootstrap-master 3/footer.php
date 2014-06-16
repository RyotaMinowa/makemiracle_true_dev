<footer class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
	<div class="row">
		<div class="topiclabel col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<span class="enheader">Social Follow</span><span class="jpheader">SNSでフォロー</span>
		</div>
	</div>
	<div class="fb-like-box col-xs-12 col-sm-12 col-md-12 col-lg-12 commentarea">
	    <div class="fb-like-box" data-href="https://www.facebook.com/makemiracle90s" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="100%" ></div>
	</div>
	
	<!-- Social account button start -->
	<a class="" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s"onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
	    <div class="col-xs-6 col-sm-12 col-md-6 col-lg-12  button twitter">
				<i class="fa fa-twitter" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　メークミラクル公式Twitterをフォロー</span>
	    </div>
	</a>
	<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
		<div class="col-xs-6 col-sm-12 col-md-6 col-lg-12 button facebook" >
			<i class="fa fa-facebook" style="font-size:3rem; vertical-align: middle;"></i><span class="share_text">　インスタグラム公式アカウントをフォロー</span>
		</div>
	</a>
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
</footer> <!-- end footer -->

	<?php wp_footer(); // js scripts are inserted using this function ?>
</div> <!-- end #page in header -->
</div><!-- end row in header -->		
</div> <!-- end row in container --></div> <!-- end row in container -->
<script type="text/javascript">
	jQuery(document).ready(function() {
    	jQuery('#drawerbtn').sidr({
        	 source: '.navbar-responsive-collapse' ,
        	 side: 'right'
     	});
     	jQuery(".sidr-class-fb-like-box").prepend("<iframe name='f21a08ec24' width='1000px' height='1000px' frameborder='0' allowtransparency='true' scrolling='no' title='fb:like_box Facebook Social Plugin' src='http://www.facebook.com/v2.0/plugins/like_box.php?app_id=452572048204794&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FV80PAcvrynR.js%3Fversion%3D41%23cb%3Df3de90866c%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%253A8888%252Ff2c62af3a8%26relation%3Dparent.parent&amp;color_scheme=light&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmakemiracle90s&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false' style='border: none; visibility: visible; ' class=''></iframe>");
	});
</script>
</body>

</html>