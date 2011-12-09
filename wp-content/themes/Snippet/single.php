<?php get_header(); ?>
   <div class="container"> 
  
  <script src="<?php bloginfo('template_directory'); ?>/library/js/mootools.v1.1.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/slimbox.js" type="text/javascript"></script>
<link href="<?php bloginfo('template_directory'); ?>/library/css/slimbox.css" rel="stylesheet" type="text/css" />

 
     <?php if ( get_option( 'bizzthemes_breadcrumbs' )) { yoast_breadcrumb('<div class="breadcrumb">','</div>'); } ?>
 
   <?php get_sidebar(); ?>
 
  <div id="content" >
  		<div class="block">
            
        	 <div class="xsnazzy">
                <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
                <div class="xboxcontent2 clearfix">
                
                
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post() ?>
   
    <div id="post-<?php the_ID(); ?>" class="posts ">
      <div class="post_top">
      
       <p class="postedby"> Posted on <span class="month">
              <?php the_time('M'); ?>
              </span>
              <?php the_time('d'); ?>
              ,
              <?php the_time('Y'); ?>
              in <span class="category">
              <?php the_category(" &amp; "); ?>
              </span></p>
              
         <div class="post_title "> 
          <div class="post_top">
            <h3>
              <?php the_title(); ?>
            </h3>
            
            <span class="post_comments"><a href="#comments"><?php comments_number('0 Comments', '1  Comments', '%  Comments'); ?></a></span>
           
          </div>
        </div>
      </div>
      <!-- posttop #end -->
      <div class="post_content ">
      
      	 
      
						<?php if ( get_post_meta($post->ID,'image', true) ) { ?>
                       <!--div class="post_img clearfix"> <img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=500&amp;w=500&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>"    />   
                        <a href="<?php echo get_post_meta($post->ID, "image", $single = true); ?>" rel="lightbox" title="<?php the_title(); ?>" class="i_zoom2"> <img src="<?php echo bloginfo('template_url'); ?>/images/i_zoom.png" alt="" /> </a> </div-->
                        
                        
                        
                        <?php } ?>
                        
                        <p class="price"><b> <?php echo strip_tags(get_the_term_list( $post->ID, 'menu_price', '', ', ', '' )); ?> </b></p>
                        
                        <?php the_content(); ?>
                      </div>
                    </div>
                    <!--/posts-->
                    
                    <!-- AdSense Comments: START -->
                    <?php if (get_option('bizzthemes_comment_adsense') <> "") { ?>
                    <br/>
                    <div class="adsense-468"> <?php echo stripslashes(get_option('bizzthemes_comment_adsense')); ?> </div>
                    <br/>
                    <br/>
                    <?php } ?>
                    <!-- AdSense Comments: END -->
                    
                    <div id="comments">
                      <?php comments_template(); ?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
    
    
    
 					</div>
                <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
                </div>
           </div> 
 		</div> <!-- content #end -->
 



</div>

<!--/container_12 -->
<?php get_footer(); ?>
