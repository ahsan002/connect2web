<?php //if($page_id != 547 && $page_id !=14){ ?>
<?php if(!is_page(547) && !is_page(14) && !is_404()){ ?>
</div><!--End Inner Middle section-->
<?php $page_id = get_the_ID(); 
?>

<div id="rightMenu">
<?php dynamic_sidebar( 'right_area' ); ?></div>

<div class="clear"></div>
<?php if(!is_front_page()){ ?>
</div>
<?php } ?>
<?php } ?>

<?php //if($page_id == 16){ ?>
<?php if(is_page(16)){ ?>
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
            <?php //dynamic_sidebar('footer_twitter'); ?>
            <a class="twitter-timeline" href="https://twitter.com/connect2ozweb" data-widget-id="588356893036318721">Tweets by @connect2ozweb</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        <div id="tab-2" class="tab-content">
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
	  jQuery(document).ready(function() {
    jQuery(".tabs-menu a").click(function(event) {
        event.preventDefault();
        jQuery(this).parent().addClass("current");
        jQuery(this).parent().siblings().removeClass("current");
        var tab = jQuery(this).attr("href");
        jQuery(".tab-content").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
    });
	
	jQuery('.img-link-initial').delay(100).queue(function(){
		jQuery(this).css({"display":"block"});		
		
	});


    jQuery(function() {
      jQuery('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            jQuery('html,body').animate({
              scrollTop: target.offset().top
            }, 500, 'swing');
            return false;
          }
        }
      });
    });

	var i=0;

	jQuery('.afp-single-item').find('.mask').each(function() {
		var href = jQuery(this).find("a:nth-child(1)").attr('href');
		jQuery(this).find("a").addClass('hidnext');
		if (href == '') {
			jQuery(this).find('.link').css( "display", "none" );
			 jQuery(this).find('.mask_link').replaceWith(function(){
				return jQuery("<span class='mask_link'>" + jQuery(this).html() + "</span>");
			    });
		}
	});
	

});
      </script>
<?php /*if(is_front_page()){?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
<script>
 jQuery(document).ready(function(){
     jQuery("#colorbox-show").colorbox();
 });
</script>
<?php } */?>
<?php if(is_front_page()){ ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
<script>
 jQuery(document).ready(function(){
     //jQuery("#colorbox-show").colorbox();
     jQuery(".colorbox").colorbox();
 });
 </script>
<?php } ?>
<script>
		jQuery(function() {
			var pull 		= jQuery('#pull');
				menu 		= jQuery('nav ul');
				menuHeight	= menu.height();

			jQuery(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle(10,"linear");
				//submenu.slideToggle();
				//menu.slideDown();
			});


	jQuery('.menu ul li:nth-child(2) ul.sub-menu li a, .menu ul li:nth-child(2) a').click(function(){
	window.setTimeout(function() { menu.slideToggle() }, 100);
	});
	
			jQuery(window).resize(function(){
        		var w = jQuery(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
	
	
	<?php wp_footer(); ?>
	
</body>
</html>