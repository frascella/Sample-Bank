<?php get_header(); ?>

 <div class="container"> 
 
     <?php if ( get_option( 'bizzthemes_breadcrumbs' )) { yoast_breadcrumb('<div class="breadcrumb">','</div>'); } ?>
 
 
 
  <div id="content" >
  		<div class="block">
            
        	 <div class="xsnazzy">
                <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
                <div class="xboxcontent2">
                
                
  <h1>404 Page</h1>
  
  
   <div class="pagespot">
    <div class="post archive-spot">
      <h2><?php echo get_option('bizzthemes_404error_name'); ?></h2>
      <div class="cat-spot">
        <p><?php echo get_option('bizzthemes_404solution_name'); ?></p>
      </div>
      <div class="fix"></div>
    </div>
    <!--/post-->
  </div>
  <!--/pagespot -->
 
 	</div>
                <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
                </div>
           </div> <!-- content #end -->
 	</div> <!--content #end -->
 
<?php get_sidebar(); ?>
</div>

<!--/container_12 -->
<?php get_footer(); ?>
