<?php get_header(); ?>
<!--facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=292292120944179&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<section class="content">
	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad group">
		
		<?php while ( have_posts() ): the_post(); ?>
			<article <?php post_class(); ?>>	
				<div class="post-inner group">
					
					<h1 class="post-title"><?php the_title(); ?></h1>
					<p class="post-byline"><?php _e('by','hueman'); ?> <?php the_author_posts_link(); ?> &middot; <?php the_time(get_option('date_format')); ?></p>
					
					<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
					
					<div class="clear"></div>
					
					<div class="entry">	
						<div class="entry-inner">
							<?php the_content(); ?>
							<?php wp_link_pages(array('before'=>'<div class="post-pages">'.__('Pages:','hueman'),'after'=>'</div>')); ?>
						</div>
						<div class="clear"></div>				
					</div><!--/.entry-->
					
				</div><!--/.post-inner-->	
			</article><!--/.post-->				
		<?php endwhile; ?>
		
		<div class="clear"></div>
		
		<?php the_tags('<p class="post-tags"><span>'.__('Tags:','hueman').'</span> ','','</p>'); ?>
		
		<?php if ( ( ot_get_option( 'author-bio' ) != 'off' ) && get_the_author_meta( 'description' ) ): ?>
			<div class="author-bio">
				<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
				<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
				<p class="bio-desc"><?php the_author_meta('description'); ?></p>
				<div class="clear"></div>
			</div>
		<?php endif; ?>
<ul class="single-social">
    <li>
        <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;" class="single-social-facebook" target="blank">
            <img src="http://makemiracle.us/wp-content/uploads/2014/06/0074faa90e66050f76cd179404a9d348.png" alt="facebookにシェア" width="30" height="30">
            <span>シェア!!</span>
        </a>
    </li>
    <li>
        <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=makemiracle90s" 
	onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;" class="single-social-twitter">
            <img src="http://makemiracle.us/wp-content/uploads/2014/06/cd261185960f37fa1c130d50494ce736.png" alt="Twitterにシェア" width="30" height="30">
            <span >シェア!!</span>
        </a>
    </li>
</ul>
<br>

<style type="text/css">
    .single-social li {
            float:left;
            width:48%;
            margin-left: 2%;
            font-size: 30px;
            vertical-align: middle;

    }

    .single-social a{
        display:block;
        color:#fff;
        text-decoration:none;
        -webkit-border-radius:10px;
        -moz-border-radius:10px;
        border-radius:10px;
        padding:10px 0;
        text-align:center;
        height:30px;
        line-height:24px;
    }

    .single-social-facebook{
        background:#3B5998 ;
        box-shadow:0 5px 0 #203d79 ;
        -moz-box-shadow:0 5px 0 #203d79 ;
        -webkit-box-shadow:0 5px 0 #203d79 ;
    }

    .single-social-twitter{
        background:#00acee ;
        box-shadow:0 5px 0 #0193cb ;
        -moz-box-shadow:0 5px 0 #0193cb ;
        -webkit-box-shadow:0 5px 0 #0193cb ;
    }

    .single-social a img,{padding-right:10px}

    .subscribe-social-text{
        font-size:15px;
        vertical-align:middle;
    }

    .single-social a:hover{
        box-shadow:none;
        -moz-box-shadow:none;
        -webkit-box-shadow:none;
        margin:5px 0 -5px 0}

</style>

		<?php if ( ot_get_option( 'post-nav' ) == 'content') { get_template_part('inc/post-nav'); } ?>
		
		<?php if ( ot_get_option( 'related-posts' ) != '1' ) { get_template_part('inc/related-posts'); } ?>
		
		
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>