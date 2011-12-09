<?php get_header(); ?>

 <div class="container"> 
 
     <?php if ( get_option( 'bizzthemes_breadcrumbs' )) { yoast_breadcrumb('<div class="breadcrumb">','</div>'); } ?>

   <?php get_sidebar(); ?>
 
  <div id="content" >
  
   		 
   
        	 <div class="xsnazzy ">
                <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
                <div class="xboxcontent2 ">
        
  

					<?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post() ?>
                    <div id="post-<?php the_ID(); ?>" class="page">
                      <h1>
                        <?php the_title(); ?>
                      </h1>
                      <?php the_content(); ?>
                    </div>
                    
                  </div>
                  <!--/post-->
  
    			 
                <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
                </div>
             
  
  <?php endwhile; else : ?>
  <div class="post box">
    <div class="entry-head">
      <h2><?php echo get_option('bizzthemes_404error_name'); ?></h2>
    </div>
    <div class="entry-content">
      <p><?php echo get_option('bizzthemes_404solution_name'); ?></p>
    </div>
  </div>
  
  <?php endif; ?>
 
 
   
 
</div>




</div>

<!--/container #end  -->
<?php get_footer(); ?>
