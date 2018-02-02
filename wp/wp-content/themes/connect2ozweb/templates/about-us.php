<?php
/**
* Template Name: About Us Page
*/
?>
<?php get_header();?>
<script src="<?php echo get_template_directory_uri(); ?>/jquery-1.11.1.js"></script>
<style>
.mmt_member_img > img {
    width: 100%;
}
</style>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
<?php
$catPost = get_posts('cat=30&posts_per_page=-1&&order=ASC'); //change this
foreach ($catPost as $post) : setup_postdata($post);
$title = get_the_title( $ID );
$name = str_replace(' ', '-', $title);
$name = strtolower($name);
$color = explode(" ",$title);
$count = count($color);

?>
<header class="entry-header">
<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
<div class="entry-thumbnail">
<?php the_post_thumbnail(); ?>
</div>
<?php endif; ?>
<span id="<?php echo $name; ?>">&nbsp;</span>
<h1 class="entry-title"><?php for($i=0; $i<($count-1); $i++) {
echo $color[$i].' ';
}
echo $last = '<span class="yellow">'.$color[$count-1].'</span>'; 
 ?></h1>
</header>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
	<?php the_content(); ?>
</div><!-- .entry-content -->
</article><!-- #post -->
<div class="clear">&nbsp;</div>
<hr/>
<?php  endforeach;
wp_reset_postdata();
?>
	</div><!-- #content -->
</div><!-- #primary -->

</div><!--End Inner Middle section-->
<div id="rightMenu">
<ul class="rightMenu">
<?php
$catPost_menu = get_posts('cat=30&posts_per_page=-1&&order=ASC'); //change this
foreach ($catPost_menu as $post) : setup_postdata($post);
$title_menu = get_the_title( $ID );
$name_menu = str_replace(' ', '-', $title_menu);
$name_menu = strtolower($name_menu);
?>
<li class="page_item page-item-271"><a href="#<?php echo $name_menu; ?>"><?php the_title(); ?></a></li>
<?php  endforeach;
wp_reset_postdata();
?>
</ul>
<?php dynamic_sidebar( 'right_area' ); ?></div>
</div>
<div class="clear"></div>
</div>
<?php
get_footer(); 
?>
