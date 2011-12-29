<?php global $up_options; gpro_create_doctype(); echo " "; language_attributes(); echo ">\n";?>
<head profile="http://gmpg.org/xfn/11">
    <?php 
    gpro_doctitle();
    gpro_create_contenttype();
    gpro_show_description();
    gpro_show_robots();
    gpro_canonical_url();
    gpro_create_stylesheet();
    gpro_show_pingback();
    gpro_show_commentreply();
	wp_enqueue_script('jquery'); 
    wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="http://localhost/sb/wp-content/themes/gallerypro/custom.css">
</head>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('#taxonomy-drill-down-3').remove();
	jQuery('#search-3 h3').remove();
});
</script>
<?php $body_class= ''; if( !is_single() && !is_page() ) $body_class = 'not-singular'; ?>
<body <?php body_class($body_class) ?>>
    <div class="shine">
        <?php gpro_before(); ?>
        <?php gpro_aboveheader(); ?>   
    
        <div id="header">
            <div id="branding">
                <div class="buffer">
					<div style="float:left;">
						<?php if(!$up_options->logo): ?>
							<div id="blog-title"><span><a href="<?php echo home_url() ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></span></div>
						<?php else: ?>
							<div><span><a href="<?php echo home_url() ?>/" title="<?php bloginfo('name') ?>" rel="home"><img src="<?php echo home_url() ?>/wp-includes/images/sb_logo.png" alt="" /></a></span></div>
						<?php endif; 
						if (is_home() || is_front_page()) { ?>
							<h1 id="blog-description"><?php bloginfo('description') ?></h1>
						<?php } else { ?>	
							<div id="blog-description"><?php bloginfo('description') ?></div>
						<?php } ?>
					</div>
					<?php if ( is_user_logged_in() ) { ?>
					<div style="float:right; padding-top: 35px; padding-right: 0px;" class="topbar">
						<i>Welcome <?php echo wp_get_current_user()->first_name; ?></i> | <a href="<?php echo wp_logout_url(); ?>">Sign out</a>
					</div>
					<?php } ?>
                </div> <!-- /.buffer -->
            </div><!-- /#branding -->
            <div id="access">                
                <?php 
                if(function_exists('wp_nav_menu')): ?>
                    <div id="page-menu" class="buffer">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'secondary_menu',
                            'menu_class' => 'buffer',
                            'menu_id' => 'page-nav',
                            'fallback_cb' => 'pagemenu',
                            'container' => false
                        ));?>
                    </div>
                <?php else:
                    pagemenu();
                endif;
                if(function_exists('wp_nav_menu')): ?>
                    <div id="category-menu" class="buffer">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                            'menu_class' => 'sf-menu',
                            'fallback_cb' => 'categorymenu',
                            'container' => false
                        ));?>
                    </div>
                <?php else: 
                    catmenu();
                endif; ?>
            </div><!-- #access -->
		</div><!-- #header-->
        <?php gpro_belowheader(); ?>		
	<div id="wrapper" class="hfeed">
        <div id="main">