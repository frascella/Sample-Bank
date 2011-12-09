<?php

// Register widgetized areas
if ( function_exists('register_sidebar') ) {
    register_sidebars(1,array('name' => 'Sidebar Left','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
    register_sidebars(1,array('name' => 'Sidebar right','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(1,array('name' => 'Front About','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));	
	register_sidebars(5,array('name' => 'Footer Content %d','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'
));
	register_sidebars(1,array('name' => 'Header Navigation','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
}
	
// Check for widgets in widget-ready areas http://wordpress.org/support/topic/190184?replies=7#post-808787
// Thanks to Chaos Kaizer http://blog.kaizeku.com/
function is_sidebar_active( $index = 1){
	$sidebars	= wp_get_sidebars_widgets();
	$key		= (string) 'sidebar-'.$index;
 
	return (isset($sidebars[$key]));
}


// =============================== Ads 125x125 widget ======================================

function adsWidget()
{
$img_url[1] = get_option('bizzthemes_ad_image_1');
$dest_url[1] = get_option('bizzthemes_ad_url_1');
$img_url[2] = get_option('bizzthemes_ad_image_2');
$dest_url[2] = get_option('bizzthemes_ad_url_2');
$img_url[3] = get_option('bizzthemes_ad_image_3');
$dest_url[3] = get_option('bizzthemes_ad_url_3');
$img_url[4] = get_option('bizzthemes_ad_image_4');
$dest_url[4] = get_option('bizzthemes_ad_url_4');
$img_url[5] = get_option('bizzthemes_ad_image_5');
$dest_url[5] = get_option('bizzthemes_ad_url_5');
$img_url[6] = get_option('bizzthemes_ad_image_6');
$dest_url[6] = get_option('bizzthemes_ad_url_6');

?>

<div class="ad-box2">

<?php if ( get_option('bizzthemes_show_ads_top12') ) { ?>
       
    <div class="ads123456"> 
        
        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$dest_url[1]"; ?>"><img src="<?php echo "$img_url[1]"; ?>" alt="" /></a>
         
    </div>
	
	<div class="fix"></div>
                
<?php } ?>

<?php if ( get_option('bizzthemes_show_ads_top34') ) { ?>
       
    <div class="ads123456"> 
        
        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$dest_url[3]"; ?>"><img src="<?php echo "$img_url[3]"; ?>" alt="" /></a>

        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$dest_url[4]"; ?>"><img src="<?php echo "$img_url[4]"; ?>" alt="" class="last" /></a>
        
    </div> 

    <div class="fix"></div>	

<?php } ?>


</div>
<!--/ad-box -->

<?php }

register_sidebar_widget('PT &rarr; Ads 160x125 & 125x125', 'adsWidget');

function adsWidgetAdmin() {

	echo '<input type="hidden" id="update_ads" name="update_ads" value="1" />';

}

register_widget_control('PT &rarr; Ads 160x125 & 125x125 ', 'adsWidgetAdmin', 200, 200);




// =============================== Popular Posts Widget ======================================

function PopularPostsSidebar()
{

    $settings_pop = get_option("widget_popularposts");

	$name = $settings_pop['name'];
	$number = $settings_pop['number'];
	if ($name <> "") { $popname = $name; } else { $popname = 'Popular Posts'; }
	if ($number <> "") { $popnumber = $number; } else { $popnumber = '10'; }

?>

<div class="widget popular">

	<h3 class="hl"><span><?php echo $popname; ?></span></h3>
	
		<ul>
			 
			<?php
			global $wpdb;
            $now = gmdate("Y-m-d H:i:s",time());
            $lastmonth = gmdate("Y-m-d H:i:s",gmmktime(date("H"), date("i"), date("s"), date("m")-12,date("d"),date("Y")));
            $popularposts = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS 'stammy' FROM $wpdb->posts, $wpdb->comments WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish' AND post_date < '$now' AND post_date > '$lastmonth' AND comment_status = 'open' GROUP BY $wpdb->comments.comment_post_ID ORDER BY stammy DESC LIMIT $popnumber";
            $posts = $wpdb->get_results($popularposts);
            $popular = '';
            if($posts){
                foreach($posts as $post){
	                $post_title = stripslashes($post->post_title);
		               $guid = get_permalink($post->ID);
					   
					      $first_post_title=substr($post_title,0,26);
            ?>
		        <li>
                    <a href="<?php echo $guid; ?>" title="<?php echo $post_title; ?>"><?php echo $first_post_title; ?></a> [...]
                    <br style="clear:both" />
                </li>
            <?php } } ?>

		</ul>
</div>

<?php
}
function PopularPostsAdmin() {

	$settings_pop = get_option("widget_popularposts");

	// check if anything's been sent
	if (isset($_POST['update_popular'])) {
		$settings_pop['name'] = strip_tags(stripslashes($_POST['popular_name']));
		$settings_pop['number'] = strip_tags(stripslashes($_POST['popular_number']));

		update_option("widget_popularposts",$settings_pop);
	}

	echo '<p>
			<label for="popular_name">Title:
			<input id="popular_name" name="popular_name" type="text" class="widefat" value="'.$settings_pop['name'].'" /></label></p>';
	echo '<p>
			<label for="popular_number">Number of popular posts:
			<input id="popular_number" name="popular_number" type="text" class="widefat" value="'.$settings_pop['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_popular" name="update_popular" value="1" />';

}

register_sidebar_widget('PT &rarr; Popular Posts', 'PopularPostsSidebar');
register_widget_control('PT &rarr; Popular Posts', 'PopularPostsAdmin', 250, 200);






// Show textbutton widget 
function textbuttonWidget1() {

	$settings = get_option("widget_textbuttonwidget1");

	$title = $settings['title'];
	$rss = $settings['rss'];
	$twitter = $settings['twitter'];
	$facebook = $settings['facebook'];
	$del = $settings['del'];
	$digg = $settings['digg'];
?>
 
	<div class="widget">

        <h3><?php echo $title; ?></h3>
        
        <ul>
         <?php if ( $rss <> "" ) { ?>
        <li class="i_rss"><a href="<?php echo $rss; ?>">RSS Feed</a> </li>
		<?php } ?>
         <?php if ( $twitter <> "" ) { ?>
        <li class="i_twitter"><a href="<?php echo $twitter; ?>">Follow Us On Twitter</a> </li>
		<?php } ?>
         <?php if ( $facebook <> "" ) { ?>
        <li class="i_facebook"><a href="<?php echo $facebook; ?>">Join me at Facebook</a> </li>
		<?php } ?>
         <?php if ( $del <> "" ) { ?>
        <li class="i_del"><a href="<?php echo $del; ?>">Join me at Del.icoio.us</a> </li>
		<?php } ?>
         <?php if ( $digg <> "" ) { ?>
        <li class="i_digg"><a href="<?php echo $digg; ?>">Join me at Digg</a> </li>
		<?php } ?>
        </ul>
		
	</div>
 
    
<?php
}

function textbuttonadmin1() {

	$settings = get_option("widget_textbuttonwidget1");

	// check if anything's been sent
	if (isset($_POST['update_textbutton'])) {
		$settings['title'] = strip_tags(stripslashes($_POST['textbutton_title']));
		$settings['rss'] = strip_tags(stripslashes($_POST['textbutton_rss']));
		$settings['twitter'] = strip_tags(stripslashes($_POST['textbutton_twitter']));
		$settings['facebook'] = strip_tags(stripslashes($_POST['textbutton_facebook']));
		$settings['del'] = strip_tags(stripslashes($_POST['textbutton_del']));
		$settings['digg'] = strip_tags(stripslashes($_POST['textbutton_digg']));
  
		update_option("widget_textbuttonwidget1",$settings);
	}

	echo '<p>
			<label for="textbutton_title">Title:
			<input id="textbutton_title" name="textbutton_title" type="text" class="widefat" value="'.$settings['title'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_rss">RSS Feed URL (including <code>http://</code>, will be auto resized):
			<input id="textbutton_rss" name="textbutton_rss" type="text" class="widefat" value="'.$settings['rss'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_twitter">Twitter URL (including <code>http://</code>, will be auto resized):
			<input id="textbutton_twitter" name="textbutton_twitter" type="text" class="widefat" value="'.$settings['twitter'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_facebook">Facebook URL (including <code>http://</code>, will be auto resized):
			<input id="textbutton_facebook" name="textbutton_facebook" type="text" class="widefat" value="'.$settings['facebook'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_del">Del.icoio.us URL (including <code>http://</code>, will be auto resized):
			<input id="textbutton_del" name="textbutton_del" type="text" class="widefat" value="'.$settings['del'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_digg">Digg URL (including <code>http://</code>, will be auto resized):
			<input id="textbutton_digg" name="textbutton_digg" type="text" class="widefat" value="'.$settings['digg'].'" /></label></p>';
 	echo '<input type="hidden" id="update_textbutton" name="update_textbutton" value="1" />';

}

register_sidebar_widget('PT &rarr; Follow us', 'textbuttonwidget1');
register_widget_control('PT &rarr; Follow us', 'textbuttonadmin1', 400, 200);


// Show About us widget 
function textbuttonWidget3() {

	$settings = get_option("widget_textbuttonwidget3");

	$title = $settings['title'];
 	$main = $settings['main'];
	$sub = $settings['sub'];
	$text = $settings['text']; 
?>

 
 
 <li>
 <div class="xasnazzy">
                <b class="xatop"><b class="xab1"></b><b class="xab2"></b><b class="xab3"></b><b class="xab4"></b></b>
                <div class="xaboxcontent">
 
				<div class="widget">

               
                
             
                
                <?php if ( $sub <> "" ) { ?>
                <h5> <?php echo $sub; ?>  </h5>
                <?php } ?>
                
                
                 <?php if ( $text <> "" ) { ?>
                <p> <?php echo $text; ?>  </p>
                <?php } ?>
        
        
        
         </div> 
         
        	</div>
            <b class="xabottom"><b class="xab4"></b><b class="xab3"></b><b class="xab2"></b><b class="xab1"></b></b>
            </div>
       </li>
    
<?php
}

function textbuttonadmin3() {

	$settings = get_option("widget_textbuttonwidget2");

	// check if anything's been sent
	if (isset($_POST['update_textbutton'])) {
		$settings['title'] = strip_tags(stripslashes($_POST['textbutton_title']));
		$settings['main'] = strip_tags(stripslashes($_POST['textbutton_main']));
		$settings['sub'] = strip_tags(stripslashes($_POST['textbutton_sub']));
		$settings['text'] = strip_tags(stripslashes($_POST['textbutton_text']));
  
		update_option("widget_textbuttonwidget3",$settings);
	}

	echo '<p>
			<label for="textbutton_title">Title:
			<input id="textbutton_title" name="textbutton_title" type="text" class="widefat" value="'.$settings['title'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_sub">Subline Here
			<input id="textbutton_sub" name="textbutton_sub" type="text" class="widefat" value="'.$settings['sub'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_text">Description 
			<input id="textbutton_text" name="textbutton_text" type="text" class="widefat" value="'.$settings['text'].'" /></label></p>';
	echo '<p>';
 	echo '<input type="hidden" id="update_textbutton" name="update_textbutton" value="1" />';

}

register_sidebar_widget('PT &rarr; About Us', 'textbuttonwidget3');
register_widget_control('PT &rarr; About Us', 'textbuttonadmin3', 400, 200);


// Show textbutton widget 
function textbuttonWidget2() {

	$settings = get_option("widget_textbuttonwidget2");

	$title = $settings['title'];
	$image = $settings['image'];
	$quote = $settings['quote'];
	$text = $settings['text'];
	$btnname = $settings['btnname'];
	$email = $settings['email'];
	$phone = $settings['phone'];
	$fax = $settings['fax'];
 
?>
 
	<div class="widget">

        <h3><?php echo $title; ?></h3>
        
        <p> <?php echo $btnname; ?>  <?php echo $image; ?>  <br />
       
        <?php if ( $email <> "" ) { ?>
        <span> <a href="mailto:<?php echo $email; ?>"> <?php echo $email; ?></a> </span>
		<?php } ?>
        
        </p>
        
        
		
 		<p class="companytitle"><b><?php echo $quote; ?></b></p>
 		<p><?php echo $text; ?></p>
 
         <?php if ( $phone <> "" ) { ?>
        <p>Phone : <?php echo $phone; ?></p>
		<?php } ?>
        
        <?php if ( $fax <> "" ) { ?>
        <p>FAX : <?php echo $fax; ?></p>
		<?php } ?>
        
	</div>
   
    
<?php
}

function textbuttonadmin2() {

	$settings = get_option("widget_textbuttonwidget2");

	// check if anything's been sent
	if (isset($_POST['update_textbutton'])) {
		$settings['title'] = strip_tags(stripslashes($_POST['textbutton_title']));
		$settings['image'] = strip_tags(stripslashes($_POST['textbutton_image']));
		$settings['quote'] = strip_tags(stripslashes($_POST['textbutton_quote']));
		$settings['text'] = strip_tags(stripslashes($_POST['textbutton_text']));
		$settings['phone'] = strip_tags(stripslashes($_POST['textbutton_phone']));
		$settings['fax'] = strip_tags(stripslashes($_POST['textbutton_fax']));
		$settings['email'] = strip_tags(stripslashes($_POST['textbutton_email']));
  
		update_option("widget_textbuttonwidget2",$settings);
	}

	echo '<p>
			<label for="textbutton_title">Title:
			<input id="textbutton_title" name="textbutton_title" type="text" class="widefat" value="'.$settings['title'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_image">Description Here 
			<input id="textbutton_image" name="textbutton_image" type="text" class="widefat" value="'.$settings['image'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_quote">Company Name
			<input id="textbutton_quote" name="textbutton_quote" type="text" class="widefat" value="'.$settings['quote'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_text">Address Here
			<input id="textbutton_text" name="textbutton_text" type="text" class="widefat" value="'.$settings['text'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_email">Email
			<input id="textbutton_email" name="textbutton_email" type="text" class="widefat" value="'.$settings['email'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_phone">Phone
			<input id="textbutton_phone" name="textbutton_phone" type="text" class="widefat" value="'.$settings['phone'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_fax">FAX
			<input id="textbutton_fax" name="textbutton_fax" type="text" class="widefat" value="'.$settings['fax'].'" /></label></p>';

 	echo '<input type="hidden" id="update_textbutton" name="update_textbutton" value="1" />';

}

register_sidebar_widget('PT &rarr; Contact Us', 'textbuttonwidget2');
register_widget_control('PT &rarr; Contact Us', 'textbuttonadmin2', 400, 200);







// =============================== Latest Posts Widget (particular category) ======================================

class LatestPostsParticular2 extends WP_Widget {

	function LatestPostsParticular2() {
	//Constructor
	
		$widget_ops = array('classname' => 'widget latest posts', 'description' => 'List of latest menus in particular category' );
		$this->WP_Widget('widget_posts', 'PT &rarr; Latest Posts', $widget_ops);
	}
 
	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
 
		echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$category = empty($instance['category']) ? '&nbsp;' : apply_filters('widget_category', $instance['category']);
		$post_number = empty($instance['post_number']) ? '&nbsp;' : apply_filters('widget_post_number', $instance['post_number']);
		$post_link = empty($instance['post_link']) ? '&nbsp;' : apply_filters('widget_post_link', $instance['post_link']);
 
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
		echo '<ul class="postlist">';
		        ?>
                
 			    <?php 
			        global $post;
			        $latest_menus = get_posts('numberposts='.$post_number.'postlink='.$post_link.'&category='.$category.'');
                    foreach($latest_menus as $post) :
                    setup_postdata($post);
			    ?>
			  
			    <li>
 					 <h4> <a class="widget-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
  			        <p class="featured-excerpt"><?php echo bm_better_excerpt(120, ' ... '); ?> <span class="comments"> [<?php comments_popup_link ('0 comments','1 comments','% comments','CSSclass'); ?>] </span> </p>
 			    </li>
			  
			    <?php endforeach; ?>
			    <?php
	    echo '</ul>';
			
			echo '<p class="more ">'; ?>
                 <a href="<?php echo $post_link; ?>" > More Blog Posts &raquo; </a>
  			  <?php
	    echo '</p>';
		
		echo $after_widget;
		
	}
 
	function update($new_instance, $old_instance) {
	//save the widget
	
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = strip_tags($new_instance['category']);
		$instance['post_number'] = strip_tags($new_instance['post_number']);
		$instance['post_link'] = strip_tags($new_instance['post_link']);
		return $instance;
	}
 
	function form($instance) {
	//widgetform in backend

		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'category' => '', 'post_number' => '' ) );
		$title = strip_tags($instance['title']);
		$category = strip_tags($instance['category']);
		$post_number = strip_tags($instance['post_number']);
		$post_link = strip_tags($instance['post_link']);
?>
			<p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('category'); ?>">Categories (<code>IDs</code> separated by commas): <input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo attribute_escape($category); ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('post_number'); ?>">Number of posts: <input class="widefat" id="<?php echo $this->get_field_id('post_number'); ?>" name="<?php echo $this->get_field_name('post_number'); ?>" type="text" value="<?php echo attribute_escape($post_number); ?>" /></label></p>
             <p><label for="<?php echo $this->get_field_id('post_link'); ?>">More Blog Post Link: <input class="widefat" id="<?php echo $this->get_field_id('post_link'); ?>" name="<?php echo $this->get_field_name('post_link'); ?>" type="text" value="<?php echo attribute_escape($post_link); ?>" /></label></p>
<?php
	}
}
register_widget('LatestPostsParticular2');

// =============================== Flickr widget ======================================

function flickrWidget()
{
	$settings = get_option("widget_flickrwidget");

	$id = $settings['id'];
	$number = $settings['number'];

?>

<div class="widget flickr">
			
        <h3><span>flickr</span></h3>
				
		<div class="fix"></div>
            			
            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $id; ?>"></script>  
		
		<div class="fix"></div>
		
</div>		

<?php
}
function flickrWidgetAdmin() {

	$settings = get_option("widget_flickrwidget");

	// check if anything's been sent
	if (isset($_POST['update_flickr'])) {
		$settings['id'] = strip_tags(stripslashes($_POST['flickr_id']));
		$settings['number'] = strip_tags(stripslashes($_POST['flickr_number']));

		update_option("widget_flickrwidget",$settings);
	}

	echo '<p>
			<label for="flickr_id">Flickr ID (<a href="http://www.idgettr.com">idGettr</a>):
			<input id="flickr_id" name="flickr_id" type="text" class="widefat" value="'.$settings['id'].'" /></label></p>';
	echo '<p>
			<label for="flickr_number">Number of photos:
			<input id="flickr_number" name="flickr_number" type="text" class="widefat" value="'.$settings['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_flickr" name="update_flickr" value="1" />';

}

register_sidebar_widget('PT &rarr; Flickr Photos', 'flickrWidget');
register_widget_control('PT &rarr; Flickr Photos', 'flickrWidgetAdmin', 250, 200);

// =============================== Widget Title ======================================

class SimpleTitle extends WP_Widget {

	function SimpleTitle() {
	//Constructor
	
		$widget_ops = array('classname' => 'widget title', 'description' => 'Title for widget (used in Restaurant Hours)' );
		$this->WP_Widget('widget_stitle', 'PT &rarr; Widget Title', $widget_ops);
	}
 
	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
 
		echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
 
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };

		echo $after_widget;
		
	}
 
	function update($new_instance, $old_instance) {
	//save the widget
	
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
 
		return $instance;
	}
 
	function form($instance) {
	//widgetform in backend

		$instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
		$title = strip_tags($instance['title']);
?>
			<p><label for="<?php echo $this->get_field_id('title'); ?>">Widget Title (i.e. Restaurant Hours): <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
	}
}
register_widget('SimpleTitle');


