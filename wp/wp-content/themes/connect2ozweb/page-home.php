<?php
/**
* Template Name: Home Page
*/
get_header(); 
?>
 <div class="wrapper"><!--Start Wrapper-->
<?php
dynamic_sidebar( 'after_banner' ); 

?>
        <div class="ServiceSection"><!--Start ServiceSection-->
            <h1>Our <span class="yellow">SERVICES</span></h1>
            <!--Start col-one-->
		<?php
		  $page_id = "271"; //example
		  if (has_post_thumbnail($page_id) ):
		    $image = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'single-post-thumbnail' );
		   endif;
		   $image_URI = $image[0];  
		?>
                <a href="<?php echo get_permalink(271); ?>">
                <div class="col-one development" style="{background:url('<?php echo $image_URI;?>') no-repeat scroll center top} :hover {background:url('http://iprogrammer.in/clients/Ashan/website/wp-content/themes/connect2ozweb/images/Developmet_Icon_H.png') no-repeat scroll center top}">
                <h4>Website Development</h4>
                    <?php $websit_develp = get_post(271);?>
               <p><?php echo substr(strip_tags($websit_develp->post_content), 0, 100);  ?>..</p></div>
               </a>
                <!--Start col-one-->
                <a href="<?php echo get_permalink( 251 ); ?>">
                <div class="col-one seo">
                <h4>SEO Services</h4>
              <?php   $seo_services = get_post(251); ?>
               <p><?php echo substr(strip_tags($seo_services->post_content),0, 100); ?> ..</p></div>
               </a>
                <!--Start col-one-->
               <a href="<?php echo get_permalink( 524 ); ?>">
                <div class="col-one mobile">
                <h4>Mobile Applications</h4>               
              <?php   $mobo_app = get_post(524); ?>
               <p><?php echo substr(strip_tags($mobo_app->post_content),0, 100); ?> ..</p></div>
               </a>
               <a href="<?php echo get_permalink( 293 ); ?>">
                <div class="col-one logo_design">
                <h4>Logo Designing</h4>                             
              <?php   $logo_designing = get_post(293); ?>
               <p><?php echo substr(strip_tags($logo_designing->post_content),0, 100); ?> ..</p></div>
               </a>
               <!--Start col-one-->
               <a href="<?php echo get_permalink( 286 ); ?>">
                <div class="col-one branding">
                <h4>Branding Solutions</h4>
                <?php   $branding_solution = get_post(286); 
                ?>
               <p><?php echo substr(strip_tags($branding_solution->post_content),0, 100); ?> ..</p></div>
               </a>
		<!--Start col-one-->
               <a href="<?php echo get_permalink( 274 ); ?>">
                <div class="col-one content">
                <h4>Content Writing</h4><?php   $content_write = get_post(274); ?>
               <p><?php echo substr(strip_tags($content_write->post_content),0, 100); ?> ..</p></div>
               </a>
               <!--Start col-one-->
               
            <?php //endwhile; ?>
             <div class="clear"></div>
        </div>
</div><!--End Wrapper-->
<?php
global $wpdb;
dynamic_sidebar( 'our_work_process' );
//$posts_portfolio = new WP_Query( 'cat=4&posts_per_page=6&offset=0&order=ASC');
//$items = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'afp_items where item_category != "Logo" ORDER BY item_id DESC LIMIT 0,6');
$items = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'afp_items where item_client = "Australia" ORDER BY item_id DESC LIMIT 0,6');
?>
<!--Start portfolio section--> 
    <div class="fullwidth grey">       
        <div class="portfolio">
        <h1>Portfolio</h1>
        <p> Take a look at our work portfolio and know how we can do this for you.</p>
        <ul class="view">
            <?php
                $k = 1;
                foreach ($items as $item ){ ?>
            	<li class="view-tenth afp-single-item" data-id="id-'<?= $k; ?>" data-type="<?= ereg_replace("[^A-Za-z0-9]", "", $item->item_category); ?>"><img alt="" class="img-link-initial" src="<?= $item->item_thumbnail; ?>">
                <div class="mask"> 
                   <a target="_blank" href="<?= $item->item_link; ?>" class="mask_link"><?= $item->item_title ?></a><br/>
                <a target="_blank" href="<?= $item->item_link; ?>"><div class="link"><i class="fa fa-link"></i></div></a>
                    <a id="colorbox-show-<?php echo $k; ?>" class="colorbox cboxElement" title="<?= $item->item_description; ?>" href="<?= $item->item_image; ?>"><div class="search"><i class="fa fa-search"></i></div></a>
	
                </div>
            </li>
                <?php
			
            $k++;
		}
                ?>
        </ul>   
        <div class="clear"></div>
        </div>
    </div> 
        <div class="clear"></div>
        <!--End portfolio section-->
        <!--Start testimonials section--> 	
       <div class="testimonials fullwidth">
            <div class="wrapper">
       		<h1>happy <span class="cyan">customers</span></h1>
                    <?php 
                        echo do_shortcode('[testimonials_slider show_start_stop="false"]');
			//echo do_shortcode('[gs_testimonial]');
                    ?>
            
<!--                </blockquote>-->
            
                <div class="clear"></div>
            </div>
       </div><!--End testimonials section-->
       <div class="wrapper">
        <!--Start Blog section--> 
        <div class="blogSection">
        	<h1>Latest <span class="yellow">Blog</span></h1>
                <?php 
                     echo do_shortcode('[carousel-horizontal-posts-content-slider]');
                ?>
         <!-- </div> -->
            <div class="clear"></div>
        </div> <!--End Blog section--> 
       
<?php
get_footer(); 
?>
