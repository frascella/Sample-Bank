<div id="bottom" class="clearfix">
  <div id="bottom-in">
    <?php if ( function_exists('dynamic_sidebar') && (is_sidebar_active(4) || is_sidebar_active(5) || is_sidebar_active(6) || is_sidebar_active(7) || is_sidebar_active(8)) ) { // Don't show on the front page ?>
    <div class="widget-spot">
      <?php dynamic_sidebar(4);  ?>
    </div>
    <div class="widget-spot ">
      <?php dynamic_sidebar(5);  ?>
    </div>
    <div class="widget-spot ">
      <?php dynamic_sidebar(6);  ?>
    </div>
    <div class="widget-spot ">
      <?php dynamic_sidebar(7);  ?>
    </div>
    <div class="widget-spot ">
      <?php dynamic_sidebar(8);  ?>
    </div>
    <?php } ?>
  </div>
</div>
<!-- Footer: START -->
<div id="footer" >  &copy;
  <?php the_time('Y'); ?>
  <?php bloginfo(); ?>
  , All rights reserved. 
  
<!--/copyright -->
</div>
<!--/footer -->
<!-- Footer: END -->
<?php wp_footer(); ?>
<?php if ( get_option('bizzthemes_google_analytics') <> "" ) { echo stripslashes(get_option('bizzthemes_google_analytics')); } ?>
</div>
<!--/container_12 -->
</div>
</body></html>
