<?php get_header(); ?>
<?php if (is_paged()) $is_paged = true; ?>
<?php
		
			if(isset($_GET['author_name'])) :
			$curauth = get_userdatabylogin($author_name);
			else :
			$curauth = get_userdata(intval($author));
			endif;
			
	?>

<div class="container">

<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery-latest.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('a[href^="http://"]')	.attr({ target: "" });
	function smartColumns() {
		$("ul.column").css({ 'width' : "100%"});
		var colWrap = $("ul.column").width();
		var colNum = Math.floor(colWrap / 200);
		var colFixed = Math.floor(colWrap / colNum);
		$("ul.column").css({ 'width' : colWrap});
		$("ul.column li").css({ 'width' : colFixed});
	}	
	smartColumns();	
	$(window).resize(function () {
		smartColumns();
	}); 
});
</script>

 <?php if ( get_option( 'bizzthemes_breadcrumbs' )) { yoast_breadcrumb('<div class="breadcrumb">','</div>'); } ?>
 
    <h1> <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>				
	<?php echo single_cat_title(); ?>
	
 	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	Posts Tagged &#8216;<?php single_tag_title(); ?>

	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	Archive for <?php the_time('F jS, Y'); ?>
		
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	Archive for <?php the_time('F, Y'); ?>

	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	Archive for <?php the_time('Y'); ?>
		
	<?php /* If this is a search */ } elseif (is_search()) { ?>
	Search Results
		
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	Author Archive

	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	Blog Archives

	<!--do not delete-->
	<?php } ?>
	</h1>

    <ul class="column"> 
     <?php if(have_posts()) : ?>
   	   <?php while(have_posts()) : the_post() ?>
        <li> 
            <div class="block">
            
        	 <div class="xsnazzy">
                <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
                <div class="xboxcontent">
             
                <?php if ( get_post_meta($post->ID,'image', true) ) { ?>
        <a title="Link to <?php the_title(); ?>" href="<?php the_permalink() ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=138&amp;w=154&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>" class="post_img" style="margin-top:5px; margin-right:10px" /></a>
        <?php } ?>
              
              
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
              <?php the_title(); ?>
              </a>  </h2> 
                 
             <p> <?php echo bm_better_excerpt(180, ' ... '); ?> </p>
                   
            </div>
            <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
            </div>

          </div>
        </li> 
           <?php endwhile; ?>
           
            <div class="pagination">
      <?php if (function_exists('wp_pagenavi')) { ?>
      <?php wp_pagenavi(); ?>
      <?php } ?>
    </div>
           
      <?php endif; ?>
           
     </ul>

</div> <!-- container #end -->

 
<?php get_footer(); ?>
