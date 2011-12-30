<?php
global $up_options;
get_header(); ?>
<div id="container">
    <div id="content">
        <?php
        gpro_navigation_above();
        get_sidebar('index-top');
        gpro_above_indexloop();
        gpro_page_title();
        $preset = $up_options->thumbnail ? $up_options->thumbnail : 'full';
        $thumbnail_width = get_thumbnail_width(true);
        $thumbnail_height = get_thumbnail_height(true);
        $thumbcontainer_width = get_thumbnail_width()+9 . "px";
		$a_height = $thumbnail_height - 10;
        /* Count the number of posts so we can insert a widgetized area */ $count = 1;
        while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class( is_video_post() ); ?>>
				<div class="entry-content" style="width:<?php echo $thumbcontainer_width; ?>; margin: 0 6px 6px 0;">
					<?php childtheme_post_header();
					if($up_options->directlink=="yes" && get_post_meta($post->ID,'web-url',true)){
						$thumblink = get_post_meta($post->ID,'web-url',true);
					}
					$thumblink = empty($thumblink) ? get_permalink() : $thumblink; ?>
					<div style="border: 1px solid lightgray; padding: 5px 5px 0px 5px; width: auto;">
						<div>
							<a href="<?php echo $thumblink ?>" style="width: auto; height: <?php echo $a_height ?>px;">
								<!-- <span class="slide-title"><?php //the_title(); ?></span> -->
								<?php if (function_exists('get_the_image')){                                    
									get_the_image(array(
										'width'         => (int)$thumbnail_width,
										'height' 	    => (int)$thumbnail_height,
										'default_image' => get_bloginfo('template_directory') . "/images/default_".$preset.".jpg",
										'default_size'  => $preset,
										'link_to_post'  => false
									));
								}
								else{ ?>
									<img class="thumbnail" src="<?php bloginfo('template_directory'); ?>/images/default_<?php echo $preset;?>.jpg" alt="<?php the_title(); ?>" style="width:<?php echo $thumbnail_width; ?>;height:<?php echo $thumbnail_height; ?>" />
								<?php } ?>
							</a>
						</div>
						<div id="boxcontroller" style="height: 20px; margin-top: 2px;">
							<span><a href="#"><img style="float: left;"; src="<?php echo home_url() ?>/wp-content/themes/gallerypro/images/light/image.png" alt="View before image"/></a></span>
							<span><a href="#"><img style="float: left; opacity:0.6; margin-left: 2px;"; src="<?php echo home_url() ?>/wp-content/themes/gallerypro/images/light/image.png" alt="View after image" /></a></span>
							<span style="float: left; padding-top: -10px; margin-top: -2px; width: auto;"><small><?php echo substr(get_the_title(), 0, 10); ?></small></span>
							<span style="float: right;"><a href="#"><img id="dl" style = "float: right; padding-top: 1px;" src="<?php echo home_url() ?>/wp-content/themes/gallerypro/images/light/download.png" alt="Download related materials" /></a></span>
						</div>
					</div>
				</div>
            </div><!-- .post -->
            <?php comments_template();
            if ($count==$up_options->insert_position) {
                get_sidebar('index-insert');
            }
            $count = $count + 1;
            $thumblink = '';
            
        endwhile;
        gpro_below_indexloop();
        //get_sidebar('index-bottom');
        gpro_navigation_below();?>
    </div><!-- #content -->
</div><!-- #container -->
<?php gpro_sidebar() ?>
<?php get_footer() ?>