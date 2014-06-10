<footer class="row">
	<div class="fb-like-box col-xs-12 col-sm-12 col-md-12 col-lg-12 commentarea">
	    <div class="fb-like-box" data-href="https://www.facebook.com/makemiracle90s" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="100%"></div>
	</div>

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
	<div id="category" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" role="contentinfo">
		<span class="enheader">Category</span><span class="jpheader">カテゴリ</span>
	</div>
	<div calss="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
		<?php $cat_all = get_terms( "category", "fields=all&get=all" );foreach($cat_all as $value):?>
		<div class="categoryitem col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
			<a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a>
		</div>
		<?php endforeach; ?>
	</div>
</footer> <!-- end footer -->

	<?php wp_footer(); // js scripts are inserted using this function ?>
</div> <!-- end #page in header -->
</div><!-- end row in header -->		
</div> <!-- end row in container -->	

</body>

</html>