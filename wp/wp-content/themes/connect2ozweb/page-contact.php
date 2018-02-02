<?php
/**
* Template Name: Contact Page
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>::Connect 2Oz Web::</title>
<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/connect2ozweb-responsive.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/normalize.css" type="text/css" rel="stylesheet">
<!--Start font Awsome-->
<link href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<?php
//$page_id = get_the_ID(); if($page_id == "10"){?>
<script src="<?php echo get_template_directory_uri(); ?>/jquery-1.11.1.js"></script>
<?php //} ?>
<!-- test -->
<script>
    //jQuery( ".ls-l" ).wrap( "<div class='slider_content'></div>" );
    //$( ".ls-l" ).wrapAll( "<div class='slider_content' />");
//    jQuery(function(){
//        jQuery( "img.ls-bg" ).wrap( "<div class='new'></div>" );
//
//    })
</script>
<script>
$.noConflict();
// Code that uses other library's $ can follow here.
</script>
<!--[if IE 7]>
<link href="font-awesome-4.3.0/font-awesome-4.3.0/css/font-awesome-ie7.min.css" rel="stylesheet" type="text/css">
<![endif]-->
<!--[if lte IE 9]>#btm_main .btm_top{ height:auto; } <![endif]-->
<?php wp_head(); ?>
</head>
<body>
<header>
<div id="topBanner"><!--Start topBanner-->
	
    	
            <?php dynamic_sidebar( 'top_header' ); ?>
            <div class="clear"></div>
        
    <!--End Wrapper-->
    <div class="navbar"><!--Start Navbar-->
    	<div class="wrapper">
        	<div class="logo"><a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/images/logo1.png" alt="Connect 2Oz Web" title="Connect 2Oz Web"></a></div>
            <nav class="menu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>
            <div class="clear"></div>
            </div>
            </div><!--End navbar-->
            <div class="wrapper">
            <?php
                
                if($page_id == "10"){
                    echo '<div class="homesl">'; layerslider(1); echo '</div><div class="bannerBottom"><!--Start bannerBottom-->
            	<h2>Welcome to Connect 2Oz Web</h2>
            </div>';                    
                }
                elseif ($page_id == "14") {
                    layerslider(2);
                ?>
                    <?php
                }else{
                    layerslider(8);
                }            
            ?>
            </div><!--End Wrapper-->
     		<!--End bannerBottom-->
     <!--End Wrapper-->
    </div><!--End topBanner-->
    </header>
    <?php if($page_id != "10" ){?>
    <!--start Inner Middle section-->
    <div class="innerMiddle">
    <?php 
    $thiscat =  get_query_var('cat'); // The id of the current category
    $catobject = get_category($thiscat,false); // Get the Category object by the id of current category
    //echo '<pre>';print_r($catobject);echo'</pre>';
    $parentcat = $catobject->category_parent; // the id of the parent category
    $cat_tree = get_category_parents($catobject->term_id, FALSE, ':', TRUE);
    //if($parentcat == "9"){
    //if($cat_tree){?>
    <div class="breadcrumbs">
    <?php 
    if(function_exists('bcn_display'))
    {
        bcn_display();
    }
   //dynamic_sidebar( 'breadcrumb' ); 
   // the_breadcrumb();
    ?>
    </div>
    <?php //}
    if($page_id){
    //showCategory($thiscat);}
    
    
    showCategoryPage($page_id);
    if($page_id != "20"){
    ?>
        
    <!--start Inner Content section-->
    <div class="innerContent">
    <?php
    }
    }
    }
    ?>
   
     	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php $page_id = get_the_ID(); //if(is_single() ){?>
        <div id="rightMenu">fff<?php dynamic_sidebar( 'right_area' ); ?></div>
            <?php //} ?>
</div><!--End Inner Middle section-->
<div class="clear"></div>
</div>       
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
            <?php dynamic_sidebar('footer_twitter'); ?>
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
	  jQuery(document).ready(function() {
    jQuery(".tabs-menu a").click(function(event) {
        event.preventDefault();
        jQuery(this).parent().addClass("current");
        jQuery(this).parent().siblings().removeClass("current");
        var tab = jQuery(this).attr("href");
        jQuery(".tab-content").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
    });
});
      </script>
</body>
</html>

<div class=""></div>
<?php wp_footer(); ?>

?>