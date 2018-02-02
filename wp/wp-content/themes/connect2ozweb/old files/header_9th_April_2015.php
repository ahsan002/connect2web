<!doctype html>
<html>
<head>
<meta charset="utf-8">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Connect 2Oz Web</title>
<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/connect2ozweb-responsive.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/normalize.css" type="text/css" rel="stylesheet">
<!--Start font Awsome-->
<link href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="icon" href="<?php echo site_url(); ?>/favicon.ico" type="image/x-icon"/>
<link href="<?php echo get_template_directory_uri(); ?>/css/colorbox.css" type="text/css" rel="stylesheet">
<?php
global $page_id;
$page_id = $post->ID; 
?>
<!--[if IE 7]>
<link href="font-awesome-4.3.0/font-awesome-4.3.0/css/font-awesome-ie7.min.css" rel="stylesheet" type="text/css">
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
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
            <div class="patten-banner">
            <div class="wrapper">
            <?php
                $parent_id_new = wp_get_post_parent_id( $post_id );
                $ancestors = get_post_ancestors( $post_id );
                
                if($page_id == "10"){
                    echo '<div class="homesl">'; layerslider(1); echo '</div><div class="bannerBottom"><!--Start bannerBottom-->
            	<h2>Welcome to Connect 2Oz Web</h2>
            </div>';                    
                }
                elseif ($page_id == "14") {
                    layerslider(2);
                }
                elseif ($page_id == "20") {
                    layerslider(9);
                }
                elseif ($page_id == "251" ||  $ancestors[0] == '251') {
                    layerslider(10);
                }
                elseif ($page_id == "18") {
                    layerslider(11);
                }
                elseif ($page_id == "291" ||  $ancestors[0] == '291') {
                    layerslider(12);
                }
//                elseif ($page_id == "278") {
//                    layerslider(13);
//                }
                elseif ($page_id == "16") {
                    layerslider(17);
                }
                elseif ($page_id == "12") {
                    layerslider(16);
                }
                elseif ($page_id == "271" ||  $ancestors[0] == '271') {
                    layerslider(18);
                }
                elseif ($page_id == "284" ||  $ancestors[0] == '284') {
                    layerslider(19);
                }
                else{
                    layerslider(16);
                }            
            ?>
            </div><!--End Wrapper-->
            </div><!--End patten-banner-->
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
    showCategoryPage($page_id);   
    if($page_id != 20){
//    <!--start Inner Content section-->
    echo '<div class="innerContent">';
    }
    }
    }
    ?>
   
     
