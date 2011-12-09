<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title>
<?php if ( is_home() ) { ?>
<?php bloginfo('description'); ?>
&nbsp;|&nbsp;
<?php bloginfo('name'); ?>
<?php } ?>
<?php if ( is_search() ) { ?>
Search Results&nbsp;|&nbsp;
<?php bloginfo('name'); ?>
<?php } ?>
<?php if ( is_author() ) { ?>
Author Archives&nbsp;|&nbsp;
<?php bloginfo('name'); ?>
<?php } ?>
<?php if ( is_single() ) { ?>
<?php wp_title(''); ?>
<?php } ?>
<?php if ( is_page() ) { ?>
<?php wp_title(''); ?>
<?php } ?>
<?php if ( is_category() ) { ?>
<?php single_cat_title(); ?>
&nbsp;|&nbsp;
<?php bloginfo('name'); ?>
<?php } ?>
<?php if ( is_month() ) { ?>
<?php the_time('F'); ?>
&nbsp;|&nbsp;
<?php bloginfo('name'); ?>
<?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?>
<?php bloginfo('name'); ?>
&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;
<?php single_tag_title("", true); } } ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_home()) { ?>
<?php if ( get_option('bizzthemes_meta_description') <> "" ) { ?>
<meta name="description" content="<?php echo stripslashes(get_option('bizzthemes_meta_description')); ?>" />
<?php } ?>
<?php if ( get_option('bizzthemes_meta_keywords') <> "" ) { ?>
<meta name="keywords" content="<?php echo stripslashes(get_option('bizzthemes_meta_keywords')); ?>" />
<?php } ?>
<?php if ( get_option('bizzthemes_meta_author') <> "" ) { ?>
<meta name="author" content="<?php echo stripslashes(get_option('bizzthemes_meta_author')); ?>" />
<?php } ?>
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

<?php if ( get_option('bizzthemes_favicon') <> "" ) { ?>
<link rel="icon" type="image/png" href="<?php echo get_option('bizzthemes_favicon'); ?>" />
<?php } ?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('bizzthemes_feedburner_url') <> "" ) { echo get_option('bizzthemes_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="<?php bloginfo('template_directory'); ?>/library/css/dropmenu.css" rel="stylesheet" type="text/css" />
<?php if ( get_option('bizzthemes_scripts_header') <> "" ) { echo stripslashes(get_option('bizzthemes_scripts_header')); } ?>
<?php wp_enqueue_script('jquery'); ?>
<script src="<?php bloginfo('template_directory'); ?>/library/js/hmenu.js" type="text/javascript"></script>

<!--[if lt IE 7]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/pngfix.js"></script>
<![endif]-->
<?php wp_head(); ?>

<?php if ( get_option('bizzthemes_customcss') ) { ?>
<link href="<?php bloginfo('template_directory'); ?>/custom.css" rel="stylesheet" type="text/css">
<?php } ?>
</head>
<body>

   <div  id="header" class="clearfix" >
     
      <ul id="nav">
        <li <?php if ( is_home() ) { ?> class="current_page_item " <?php } ?>><a href="<?php echo get_option('home'); ?>/" class="bnone"> Home </a></li>
         <?php wp_list_pages('title_li=&depth=1&exclude=' . get_inc_pages("pag_exclude_") .'&sort_column=menu_order'); ?> 
      </ul>
      
      <div class="h_left" id="logo-spot">
        <?php if ( get_option('bizzthemes_show_blog_title') ) { ?>
        <div class="blog-title"><a href="<?php echo get_option('home'); ?>/">
          <?php bloginfo('name'); ?>
          </a></div>
        <div class="blog-description">
          <?php bloginfo('description'); ?>
        </div>
        <?php } else { ?>
        <h1 class="logo"> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"> <img src="<?php if ( get_option('bizzthemes_logo_url') <> "" ) { echo get_option('bizzthemes_logo_url'); } else { echo get_bloginfo('template_directory').'/images/logo.png'; } ?>" alt="<?php bloginfo('name'); ?>" /> </a> </h1>
        <!--/logo-->
        <?php } ?>
      </div>
      <!--/logo-spot-->
      
      <div id="navmenu-h">
      <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Header Navigation') ){}else{  ?>	 
        <ul >
          <?php wp_list_categories('title_li=&exclude=9999999' . get_inc_categories("cat_exclude_") .''); ?>
        </ul>
       <?php }?>
       </div> 
       
      <?php include(TEMPLATEPATH."/searchform.php");?>
      
      
   <?php
 		global $wpdb;
 		$blogcatname = get_option('bizzthemes_blogcategory');
 		$catid = $wpdb->get_var("SELECT term_ID FROM $wpdb->terms WHERE name = '$blogcatname'");
     ?>
  
</div>
<!-- header top #end -->
