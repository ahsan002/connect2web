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
            <?php
                $posts = new WP_Query( 'cat=3&posts_per_page=6&offset=0&order=ASC' );

                while($posts->have_posts()) : $posts->the_post();
                //echo '<pre>';print_r($posts);echo'</pre>';
                setup_postdata( $posts );
            ?>
            <!--Start col-one-->
             <a href="<?php the_permalink() ?>">
             <div <?php
             if($post->post_name === "website-development"){post_class('col-one development' ); }
             elseif($post->post_name === "seo-services"){post_class( 'col-one seo' ); }
             elseif($post->post_name === "mobile-applications"){post_class( 'col-one mobile' ); }
             elseif($post->post_name === "logo-designing"){post_class( 'col-one logo_design' ); }
             elseif($post->post_name === "branding-solutions"){post_class( 'col-one branding' ); }
             elseif($post->post_name === "content-writing"){post_class( 'col-one content' );}
             ?>>
             <h4><?php the_title(); ?></h4>
             <p><?php echo substr($post->post_content,0,110); ?>...</p></div>
            </a>
            <?php endwhile; ?>
             <div class="clear"></div>
        </div>
</div><!--End Wrapper-->
<?php
dynamic_sidebar( 'our_work_process' );
$posts_portfolio = new WP_Query( 'cat=4&posts_per_page=6&offset=0&order=ASC');
?>
<!--Start portfolio section--> 
    <div class="fullwidth grey">       
        <div class="portfolio">
        <h1>Portfolio</h1>
        <p> Take a look at our work portfolio and know how we can do this for you.</p>
        <ul class="view">
            <?php
                echo do_shortcode('[af-portfolio]');
//                while($posts_portfolio->have_posts()) : $posts_portfolio->the_post();
//                //echo '<pre>';print_r($posts_portfolio);echo'</pre>';
//                setup_postdata( $posts_portfolio );
//                get_post_custom_values("portfolio_link_url", get_the_ID());
//                $meta = get_post_custom_values("portfolio_link_url", get_the_ID());
//                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
            ?>
<!--            <li class="view-tenth"><?php //the_post_thumbnail('full');  ?>
         	<div class="mask">
                    <a href="<?php //echo $meta[0]; ?>" target="_blank"><div class="link"><i class="fa fa-link"></i></div></a>
                        <a href="<?php //echo $large_image_url[0]; ?>" rel='lightbox'><div class="search"><i class="fa fa-search"></i></div></a>
            </div>
            </li>-->
        <?php 
        //endwhile;
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
<!--                <div class="testimonialsLeft">
                <img src="<?php //echo get_template_directory_uri(); ?>/images/testimonial_img.jpg">
                </div>-->
            
<!--                <blockquote class="testimonialsRight">-->
           
<!--                    <i class="fa fa-quote-left quote-left"></i><p> Connect2Ozweb did a very beautiful and professional gallery update for me on my website in short span.Very impressive and mind blowing service.<i class="fa fa-quote-right quote-right"></i></p>
                    <div class="name">Gad Peretz</div>
                    <div class="profile">MD, ygconstruction</div>-->
                    <?php 
                        echo do_shortcode('[testimonials_slider]');
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
            
<!--            <h3>Responsive Site and Viewport Tag</h3>
            <div class="blogBottom"><div class="calender"><i class="fa fa-calendar"></i>March 15, 2015</div><div class="admin"><i class="fa fa-user"></i>
admin</div></div>
            <p>The purpose of this blog entry is not to write a tutorial but to give an understanding of what responsive Website is and what technology use can make your website responsive. In layman's term you can say it's a website which would work on all mobile devices ...</p> 
            <div><a class="readMore" href="">Read More</a></div>-->
        </div>
            <div class="clear"></div>
        </div> <!--End Blog section--> 
       
<?php
get_footer(); 
?>