<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header(); ?>
<?php $is_page = true; ?>



 <div class="container"> 
 
     <?php if ( get_option( 'bizzthemes_breadcrumbs' )) { yoast_breadcrumb('<div class="breadcrumb">','</div>'); } ?>
 
 <?php get_sidebar(); ?>
 
  <div id="content" >
  		<div class="block">
            
        	 <div class="xsnazzy">
                <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
                <div class="xboxcontent2">


    
    <h1>
      <?php the_title(); ?>
    </h1>
    <div id="post-<?php the_ID(); ?>" class="post archive-spot">
      <div class="arclist box">
        <ul class="list">
          <?php query_posts('showposts=60'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
            <div class="archives-time">
              <?php the_time('M j Y') ?>
            </div>
            <a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
            </a> - <?php echo $post->comment_count ?> </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
      <!--/arclist -->
    </div>
    <!--/post -->
 	</div>
                <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
                </div>
           </div> <!-- content #end -->
 	</div> <!--content #end -->
 

</div>

<!--/container_12 -->
<?php get_footer(); ?>
