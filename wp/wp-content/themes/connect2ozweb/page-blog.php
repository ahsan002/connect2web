<?php
/**
* Template Name: Blog Page
*/
get_header(); 
?>
  <h1>Our <span class="yellow">BLOG</span></h1>
    <?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   	$args = array(
	'offset'           => 0,
	'cat'         => 5,
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
	'suppress_filters' => true,
'posts_per_page' => 3,
  'paged' => $paged
);

$posts_array = query_posts($args); 

    ?>
   <!--Start blog section-->
   
    <?php if( have_posts() ): 
            //foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
<?php while ( have_posts() ) : the_post(); ?>
   <div class="blogBottom">
     <div class="blogLeft"><!--Start blogLeft section-->
            <div class="blogHeader">
               <div class="calender"><i class="fa fa-calendar"></i><?php echo get_the_date(' F ', $post->ID) ?><span class="yellow"><?php echo get_the_date('j', $post->ID).','.get_the_date(' Y', $post->ID) ?></span></div>
               <div class="admin"><i class="fa fa-user"></i>By <span class="yellow"><?php the_author(); ?></span></div> 
               <div class="clear"></div>
               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
               <div class="blogSubHeading">Connect2oz Blog</div>       
                
            </div>    
       </div>
       <div class="blogRight"><!--Start blogRight section-->
           <?php 
		$id = get_the_author_meta( 'ID' );
                if(get_author_image_url($id)){		
		$avatar_url = get_author_image_url($id);		
		?>
		<img src="<?php echo $avatar_url; ?>" width="150px">
                <?php
		}
                else {
                ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/blogimg1.jpg">
                <?php } ?>
       </div>  
       
       <p><?php //get_the_excerpt('read more', 80);
               the_excerpt();
               ?></p>
       <div class="readMore"><a href="<?php the_permalink(); ?>" href="">Read more</a></div><div class="comments"><a class="mL10" href="<?php the_permalink(); ?>#comments" href=""></a></div>
    </div><!--End blog section-->   
      <?php endwhile;
	wp_pagenavi(); 
	wp_reset_query(); 
	endif;
      ?>

<?php
get_footer(); 
?>
