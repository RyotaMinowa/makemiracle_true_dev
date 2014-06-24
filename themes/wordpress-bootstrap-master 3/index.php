<!doctype html> 
 <!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<?php get_template_part('head'); ?>

<body <?php body_class(); ?> >

<?php get_header(); ?>

<?php get_template_part('featured'); ?>

<section class="new-article-section">
<!-- 記事一覧 -->
<?php get_template_part('articles'); ?>
</section>

<?php wp_reset_query(); ?>
	
<?php get_footer(); ?>

</body>
</html>