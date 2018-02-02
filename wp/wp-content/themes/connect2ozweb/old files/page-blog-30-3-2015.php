<?php
/**
* Template Name: Blog Page
*/
get_header(); 
?>
  <h1>Our <span class="yellow">BLOG</span></h1>
    <?php
//        if (have_posts()) : while (have_posts()) : the_post();
//            the_content();
//        endwhile; endif; 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   $args = array(
	'posts_per_page'   => 10,
	'offset'           => 0,
	'category'         => 5,
	'category_name'    => '',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
       //'paged' => $paged
);
  // $posts_array = query_posts('category=5&post_type=post&post_status=publish&posts_per_page=2&paged='. get_query_var('paged'));
$posts_array = get_posts( $args ); 
//echo '<pre>';print_r($posts_array);echo'</pre>';
    ?>
   <!--Start blog section-->
   
    <?php if( have_posts() ): 
            foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
   <div class="blogBottom">
     <div class="blogLeft"><!--Start blogLeft section-->
            <div class="blogHeader">
               <div class="calender"><i class="fa fa-calendar"></i><?php echo get_the_date(' F ', $post->ID) ?><span class="yellow"><?php echo get_the_date(' j ', $post->ID).','.get_the_date(' Y ', $post->ID) ?></span></div>
               <div class="admin"><i class="fa fa-user"></i>By <span class="yellow"><?php the_author(); ?></span></div> 
               <div class="clear"></div>
               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
               <div class="blogSubHeading">Connect2oz Blog</div>       
                
            </div>    
       </div>
       <div class="blogRight"><!--Start blogRight section-->
           <?php 
                if(get_avatar( get_the_author_meta( 'ID' )) != NULL){
                echo get_avatar( get_the_author_meta( 'ID' ) ); 
                }
                else {
                ?>
           <img src="<?php echo get_template_directory_uri(); ?>/images/blogimg1.jpg">
                <?php } ?>
       </div>  
       
       <p><?php the_excerpt('read more', 80);
               
               ?></p>
       <div class="readMore"><a href="<?php the_permalink(); ?>" href="">Read more</a></div><div class="comments"><a class="mL10" href="<?php the_permalink(); ?>" href=""><img src="images/chat.png" alt="" title=""></a></div>
    </div><!--End blog section-->   
      <?php endforeach;
      //if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function
      //custom_nextpage_links();
      
      ?>
       
<!--      <div class="navigation">
			<span class="newer"><?php //previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php //next_posts_link(__('Older »','example')) ?></span>
		</div> /.navigation -->
                <?php
wp_reset_postdata(); 
endif;
      ?>

</div>
<!--start Inner right Menu section-->
<div id="rightMenu">
            <?php // $posts = new WP_Query( 'cat=9&order=ASC' );
//                $categories=get_categories(array('parent' => '9', 'order'=> 'desc',));
//                $categories=wp_list_pages(array('child_of' => '14', 'order'=> 'desc', 'depth' => '1'));
//                echo '<pre>';print_r($categories);echo'</pre>';
            ?>
<!--            <ul class="rightMenu">-->
                
            <?php
            //foreach ($categories as $category ){
               //echo $category->cat_name.'<br>';
            ?>
                 <!--<li class="<?php //echo $category->slug; ?>"><a href="<?php //echo get_category_link( $category->term_id ); ?>"><?php// echo $category->cat_name; ?></a></li>-->
            <?php
            //}
            ?>
<!--            </ul>-->
            <?php dynamic_sidebar( 'right_area' ); ?>
</div>
<div class="clear"></div>
       
<?php
get_footer(); 
?>