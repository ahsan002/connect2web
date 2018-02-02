<?php
/**
* Template Name: Services Page
*/
get_header(); 
?>

<h1>Our <span class="yellow">SERVICES</span></h1>
    <?php
        if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile; endif; 
    ?>
</div>
<!--start Inner right Menu section-->
<div id="rightMenu">
            <?php // $posts = new WP_Query( 'cat=9&order=ASC' );
                //$categories=get_categories(array('parent' => '9', 'order'=> 'desc',));
                //$pagekids = get_pages("child_of=14&sort_column=menu_order");
                $args = array(
	'authors'      => '',
	'child_of'     => 14,
	'date_format'  => get_option('date_format'),
	'depth'        => 1 ,
	'echo'         => 1,
	'exclude'      => '',
	'include'      => '284,251,291,271',
	'link_after'   => '',
	'link_before'  => '',
	'post_type'    => 'page',
	'post_status'  => 'publish',
	'show_date'    => '',
	'sort_column'  => 'menu_order, post_title',
        'sort_order'   => 'desc',
	'title_li'     => __(''), 
	'walker'       => ''
); 
                 
//                 echo '<pre>';print_r($children);echo'</pre>';
//                echo '<pre>';print_r($pagekids);echo'</pre>';
            ?>
            <ul class="rightMenu">
             <?php 
             $children = wp_list_pages( $args );
            if($children != Null){
        echo $children;
     }
     ?>
            </ul>
            <?php dynamic_sidebar( 'right_area' ); ?>
</div>
<div class="clear"></div>
</div>



<?php
get_footer(); 
?>
