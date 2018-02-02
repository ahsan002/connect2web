</div><!--End Inner Middle section-->
<?php $page_id = get_the_ID(); if(is_single() ){?><div id="rightMenu"><?php dynamic_sidebar( 'right_area' ); ?></div><?php } ?>
<div class="clear"></div>
</div>
<?php if($page_id == 16){ ?>
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
<?php } ?>
<!--Start footer section--> 
        <div class="footer fullwidth bgCyan">
        	<div class="wrapper">
            <div class="footerBg"></div>
            <div class="footerSection1"><!--Start footerSection1--> 
            <h1>Useful Links</h1>
            <?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?> 

                <?php wp_nav_menu( array('menu' => 'Footer Second Menu' )); ?> 
                <div class="clear"></div>    
                </div><!--End footerSection1--> 
                <div class="footerSection2"><!--Start footerSection2--> 
                	<?php dynamic_sidebar('footer_middel'); ?>
                </div>
                
                 <div class="footerSection3"><!--Start footerSection2-->
                 <div id="tabs-container">
                <ul class="tabs-menu">
                    <li class="current twitter"><a href="#tab-1">Latest Tweets</a></li>
                    <li class="facebook"><a href="#tab-2 ">Facebook</a></li>
                </ul>
    	<div class="tab">
        <div id="tab-1" class="tab-content">
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet purus urna. Proin dictum fringilla enim, sit amet suscipit dolor dictum in. Maecenas porttitor, est et malesuada congue, ligula elit fermentum massa, sit amet porta odio est at velit. Sed nec turpis neque. Fusce at mi felis, sed interdum tortor. Nullam pretium, est at congue mattis, nibh eros pharetra lectus </p>-->
            <a class="twitter-timeline"  href="https://twitter.com/abusufiyanshk" data-widget-id="577777217914085376">Tweets by @abusufiyanshk</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
            <?php //dynamic_sidebar('footer_twitter'); ?>
        </div>
        <div id="tab-2" class="tab-content">
            <!--<p>Donec semper dictum sem, quis pretium sem malesuada non. Proin venenatis orci vel nisl porta sollicitudin. Pellentesque sit amet massa et orci malesuada facilisis vel vel lectus. Etiam tristique volutpat auctor. Morbi nec massa eget sem ultricies fermentum id ut ligula. Praesent aliquet adipiscing dictum. Suspendisse dignissim dui tortor. Integer faucibus interdum justo, mattis commodo elit tempor id.</p>-->
            <?php dynamic_sidebar('footer_facebook'); ?>
        </div>
      
    </div>
</div>
                 </div>
                
                <div class="clear"></div>
            </div> <!--End Wrapper--> 
            <div class="darkCyanBg">
            <?php dynamic_sidebar('footer_copyright'); ?>
            </div>
        </div>
        
        
      
      <!--script for Tabber-->
      <script type="text/javascript">
//	  jQuery(document).ready(function() {
//    jQuery(".tabs-menu a").click(function(event) {
//        event.preventDefault();
//        jQuery(this).parent().addClass("current");
//        jQuery(this).parent().siblings().removeClass("current");
//        var tab = $(this).attr("href");
//        jQuery(".tab-content").not(tab).css("display", "none");
//        jQuery(tab).fadeIn();
//    });
//});
      </script>
</body>
</html>

<div class=""></div>
<?php wp_footer(); ?>
