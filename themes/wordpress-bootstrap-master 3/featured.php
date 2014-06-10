<!-- feature section start-->
<section>
	<div id="hot">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-offset-8">				
			<?php
			$args = array(
			    'post_type' => '',
			    'posts_per_page' => 3,
			    'meta_query' => array(
			        'relation' => 'AND',
			        array(
			            'key' => 'is_featured',
			            'value' => '1',
			        ),
			        array(
			            'key' => 'price',
			            'value' => 500,
			            'compare' => '>=',
			            'type' => 'NUMERIC'
			        ),
			    ),
			);
			$myposts = get_posts($args);
			foreach ( $myposts as $post ) :
				setup_postdata( $post );
			?>
			    <h1 class="topictitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			    <div><?php the_content(); ?></div>
			    <?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</section>
<!-- end feature section end-->