<?php
// Getting Theme and Child Theme Data
// Credits: Joern Kretzschmar

/*$themeData = get_theme_data(TEMPLATEPATH . '/style.css');
$version = trim($themeData['Version']);
if(!$version) $version = "unknown";
*/
// set theme constants
define('THEMENAME', $themeData['Title']);
define('THEMEAUTHOR', $themeData['Author']);
define('THEMEURI', $themeData['URI']);
define('THEMATICVERSION', $version);

// load jQuery
if(!is_admin())wp_enqueue_script('jquery');

// Path constants
define('THEMELIB', TEMPLATEPATH . '/library');

//Load PageNavi
if(!function_exists('wp_pagenavi')){
    //include(TEMPLATEPATH. '/wp-pagenavi/wp-pagenavi.php');
}

// Load widgets
require_once(THEMELIB . '/extensions/widgets.php');

// Load custom header extensions
require_once(THEMELIB . '/extensions/header-extensions.php');

// Load custom content filters
require_once(THEMELIB . '/extensions/content-extensions.php');

// Load custom Comments filters
require_once(THEMELIB . '/extensions/comments-extensions.php');

// Load custom Widgets
require_once(THEMELIB . '/extensions/widgets-extensions.php');

// Load the Comments Template functions and callbacks
require_once(THEMELIB . '/extensions/discussion.php');

// Load custom sidebar hooks
require_once(THEMELIB . '/extensions/sidebar-extensions.php');

// Load custom footer hooks
require_once(THEMELIB . '/extensions/footer-extensions.php');

// Need a little help from our helper functions
require_once(THEMELIB . '/extensions/helpers.php');

// Load shortcodes
require_once(THEMELIB . '/extensions/shortcodes.php');

// Get The Image Plugin by Justin Tadlock
require_once(THEMELIB . '/extensions/get-the-image.php');

// Get 
require_once(THEMELIB . '/extensions/image-list.php');

// Adds filters for the description/meta content in archives.php
add_filter( 'archive_meta', 'wptexturize' );
add_filter( 'archive_meta', 'convert_smilies' );
add_filter( 'archive_meta', 'convert_chars' );
add_filter( 'archive_meta', 'wpautop' );

// Remove the WordPress Generator – via http://blog.ftwr.co.uk/archives/2007/10/06/improving-the-wordpress-generator/
function gpro_remove_generators() { return ''; }  
add_filter('the_generator','gpro_remove_generators');

// Translate, if applicable
load_theme_textdomain('gpro', THEMELIB . '/languages');
$locale = get_locale();
$locale_file = THEMELIB . "/languages/$locale.php";
if (is_readable($locale_file)) require_once($locale_file);

//Add Theme Support
add_theme_support('automatic-feed-links');

// UpThemes Admin Functions
require_once('admin/admin.php');

function gpro_theme_init(){
    global $up_options; 
    if ( function_exists( 'add_theme_support' ) ):
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 125, 125, true ); 
        add_image_size( 'single', 500, 375, true );
        add_image_size( 'thumb_large', 300, 225, true );
        add_image_size( 'thumb_medium', 226, 180, true );
        add_image_size( 'thumb_small', 125, 125, true );
        add_image_size( 'full', 700, 9999 );
    endif;
    add_theme_support( 'nav-menus' );
    if(function_exists('register_nav_menu')):
        register_nav_menu( 'primary_menu' , 'Primary Menu' );
        register_nav_menu( 'secondary_menu' , 'Secondary Menu' );
    endif;
}
add_action('after_setup_theme','gpro_theme_init');

// Fix Thickbox image paths
function thickbox_image_paths() {
    global $post;
    wp_reset_query();
    if (is_singular()) :
        $thickbox_path = get_option('siteurl') . '/wp-includes/js/thickbox/';
        echo "<script type=\"text/javascript\">\n";
        echo "	var tb_pathToImage = \"${thickbox_path}loadingAnimation.gif\";\n";
        echo "	var tb_closeImage = \"${thickbox_path}tb-close.png\";\n";
        echo "</script>\n";
    endif;
}
add_action('wp_footer', 'thickbox_image_paths');

// Function to get width of thumbnails
function get_thumbnail_width($px=false){
    
    global $up_options;
    if($up_options->thumbnail_w):
        $thumbnail_width = (int)$up_options->thumbnail_w;
    else:
        $thumbnail_width = '125';
    endif;
  
    if($px==true):
        return $thumbnail_width . 'px';
    else:
        return $thumbnail_width;
    endif;
}

// Function to get height of thumbnails
function get_thumbnail_height($px=false){
    global $up_options;
    if(isset($up_options->thumbnail_h)):
        $thumbnail_height = (int)$up_options->thumbnail_h;
    else:
        $thumbnail_height = '125';
    endif;
    if($px==true):
        return $thumbnail_height . 'px';
    else:
        return $thumbnail_height;
    endif;
}

function set_thumbnail_h_w(){
    global $up_options;	
    if(isset($_POST['up_save'])):
        if($up_options->thumbnail_h):
            update_option("thumbnail_size_h",$up_options->thumbnail_h);
        endif;
        if($up_options->thumbnail_w):
            update_option("thumbnail_size_w",$up_options->thumbnail_w);
        endif;	
    endif;
}
add_action('init','set_thumbnail_h_w');

//  Gallery Child Theme Functions
function childtheme_menu_args($args) {
    $args = array(
        'show_home' => 'Home',
        'sort_column' => 'menu_order',
        'menu_class' => 'menu',
        'echo' => true
    );
    return $args;
}
add_filter('wp_page_menu_args', 'childtheme_menu_args');

// 
function theme_footer($themelink) {
    global $up_options;
    return $up_options->footertext;
}
add_filter('gpro_footertext', 'theme_footer');

// Remove sidebar on gallery-style pages
function remove_sidebar() {
    global $post, $up_options;
    if(!is_single()){
        if(!isset($up_options->enablesidebar)){
            return TRUE;
        } else {
            return FALSE;
        }
    } elseif(get_post_meta($post->ID,"custom_post_template",true) == "blog.php"){
        return TRUE;
    }
}
add_filter('gpro_sidebar', 'remove_sidebar');

//get thumbnail
function postimage($size=medium) {
    global $post;
    global $up_options;
    
    if ( $images = get_children(array(
            'post_parent' => get_the_ID(),
            'post_type' => 'attachment',
            'numberposts' => 1,
            'order' => 'ASC',
            'post_mime_type' => 'image',))){
        foreach( $images as $image ) {
            $attachmentimage_thumb_src=wp_get_attachment_image_src( $image->ID, 'thumbnail' );
            $attachmentimage_medium=wp_get_attachment_image( $image->ID, 'medium' );
            $attachmentimage_src=wp_get_attachment_image_src( $image->ID, $size );
            if($up_options->timthumb == 'yes'){
                    echo '<img src="' . $attachmentimage_thumb_src[0] . '" ' . $attributes . ' class="thumbnail" alt="' . attribute_escape($post->post_title) . '" />';
            } else {
                echo '<img src="' . get_bloginfo('template_directory') . '/timthumb/timthumb.php?src=' . $attachmentimage_src[0] . '&w=' . get_thumbnail_width() . '&h=' . get_thumbnail_height() . ' &zc=1" ' . $attributes . ' class="thumbnail" alt="' . attribute_escape($post->post_title) . '" />';
            }
        }
    } 
}

//get images hoang
function postimages($size = 'single') {
    
    global $up_options;
    /* Insert Image from Custom Field Full-Width Option */
    global $featured_slider_image;
    $string = '';
    if($featured_slider_image) echo '<div class="jFlowSlideContainer"><a class="thickbox" rel="' . get_the_ID() . '" href="' . $featured_slider_image['large'] . '">' . $featured_slider_image['single'] . '</a></div>';
    
    /* Insert Image from Custom Field Full-Width Option */
    global $custom_field_slider_image;
    if($custom_field_slider_image):
        $string .= '<div class="jFlowSlideContainer"><a class="thickbox" rel="' . get_the_ID() . '" href="' . $custom_field_slider_image . '"><img src="' . $custom_field_slider_image . '" height="375" width="500" alt="'.get_the_title().'" /></a></div>';
        $has_image = true;
    endif;
    
    if ($images = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'order' => 'ASC', 'post_mime_type' => 'image',))){
        /* Insert Images from Attachments */
        foreach( $images as $image ) {
            if ($image->menu_order == 0)
            {
                $attachmentimage_medium = wp_get_attachment_image( $image->ID, 'single' ); 
                $attachmentimage_src = wp_get_attachment_image_src( $image->ID, $size );
                $attachmentimage_large_src = wp_get_attachment_image_src( $image->ID, 'large' );
                if($attachmentimage_medium != $featured_slider_image['single']):
                    $string .= '<div class="jFlowSlideContainer"><a class="thickbox" rel="' . get_the_ID() . '" href="' . $attachmentimage_large_src[0] . '">' . $attachmentimage_medium . '</a></div>';
                endif;
            }
        }
        $has_image = true;
    }
    
    /* Insert Images from the Content Area */
    global $content_slider_images;
    if(is_array($content_slider_images)):
        foreach($content_slider_images as $image):
            $string .= '<div class="jFlowSlideContainer"><a class="thickbox" rel="' . get_the_ID() . '" href="' . $image . '"><img src="' . $image . '" height="375" width="500" alt="'.get_the_title().'" /></a></div>';
        endforeach;
        $has_image = true;
    endif;
    
    /* Default Image */
    if(empty($has_image)):
        $string .= '<img src="' . get_bloginfo('template_directory') . '/images/default_single.jpg" alt=""/>';
    endif;
	echo $string; 
}

//check any attachment 
function checkimage($size=medium) {
    if ( $images = get_children(array(
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'numberposts' => 1,
        'post_mime_type' => 'image',)))
    {
        foreach( $images as $image ) {
            $attachmentimage=wp_get_attachment_image( $image->ID, $size );
            return $attachmentimage;
        }
    } 
}

// Remove Navigation Above & Below
function remove_navigation() {
    remove_action('gpro_navigation_above', 'gpro_nav_above', 2);
    remove_action('gpro_navigation_below', 'gpro_nav_below', 2);
}
add_action('init', 'remove_navigation');

// re-create gpro_nav_below
function gallery_nav_below() {
    if (!(is_single())) { ?>
        <div id="nav-below" class="navigation">
            <?php if(function_exists('wp_pagenavi')) { ?>
                <?php wp_pagenavi(); ?>
            <?php } else { ?>  
                <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'gpro')) ?></div>
                <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'gpro')) ?></div>
	    <?php } ?>
	</div>	
    <?php }
}
add_action('gpro_navigation_below', 'gallery_nav_below');

// Filter the Page Title
function gallery_page_title ($content) {
  if (is_category()) {
    $content = '<h1 class="page-title"><span>';
    $content .= single_cat_title("", false);
    $content .= '</span></h1>';
    if ( !(''== category_description()) ) {
	$content .= '<div class="archive-meta">';
	$content .= apply_filters('archive_meta', category_description());
	$content .= '</div>';
    }
  } elseif (is_tag()) {
    $content = '<h1 class="page-title"><span>';
    $content = gpro_tag_query();
    $content = '</span></h1>';
  }
  return $content;
}
add_filter('gpro_page_title', 'gallery_page_title');
// End of Filter the Page Title

// Custom post header
function childtheme_post_header(){
    global $up_options;
    if($up_options->new):
        $time = $up_options->new;
    else:
        $time = 3;
    endif;
    if ( (time()-get_the_time('U')) <= ($time*86400) ) : // The number 3 is how many days to keep posts marked as new
        echo '<div class="new"></div>';
    endif;
}

function single_postmedia_handler(){
    global $up_options; 
    if(function_exists('p75HasVideo')):
        if(p75HasVideo(get_the_ID())):
            echo p75GetVideo(get_the_ID());
            $p75 = true;
        endif;
    endif;
    
    if(empty($p75)){?>
        <div id="featured-wrapper">
            <div id="featured">
                <div id="mySlides">
                    <?php postimages('single'); ?>
                </div><!--/#mySlides-->
                <div id="myController"></div><!--/#myController-->
            </div><!--/#featured-wrapper-->
        </div><!--/#products-->
    <?php }

}
add_action('single_postmedia','single_postmedia_handler');

function rssfeed(){ ?>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> &raquo; <?php _e('Feed','gpro'); ?>" href="<?php upfw_rss(); ?>" />
<?php }
add_action( 'wp_head','rssfeed', 1 );

function gpro_images_from_content(){
    $search_pattern = '~<img [^>]* />~';
    /* Place all images into an array */
    preg_match_all($search_pattern, get_the_content(), $images );
    $images_num = count($images[0]);
    $output = array();
    $images = $images[0];
    if ( $images_num > 0 ) { 
        foreach($images as $image):
            /* Find the image src attr value */
            $search_pattern = '/<\s*img [^\>]*src\s*=\s*[\""\']?([^\""\'\s>]*)/i';
            preg_match_all($search_pattern, $image, $src);
            /* Add image URL to array */
            $output[] = $src[1][0];
        endforeach;
        /* Make Image Array Available to postimages() function */
        GLOBAL $content_slider_images;
        $content_slider_images = $output;
    };
}

function gpro_image_from_custom_field(){
    $image = get_post_meta(get_the_ID(), 'full-image', true);
    if($image):
        GLOBAL $custom_field_slider_image;
        $custom_field_slider_image = $image;
    endif;
}

function gpro_featured_image(){
    if(has_post_thumbnail()): 
        GLOBAL $featured_slider_image;
        $featured_slider_image['single'] = wp_get_attachment_image( get_post_thumbnail_id(get_the_ID()), 'single' );
        $large = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
        $featured_slider_image['large'] = $large[0];
    endif;
}


function gpro_strip_images_from_content(){
    $search_pattern = '~<img [^>]* />~';
    /* Strip Images out of Content */
    $content = preg_replace($search_pattern, '', get_the_content());
    /* Add Paragraph Tags to New Lines */
    return wpautop($content);
}

/*  Tue Dec 13, 2011 08:46:56 added by Thanh Son */
// Custom Taxonomy Code  
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy( 'country', 'post', array( 'hierarchical' => true, 'label' => 'Countries', 'query_var' => true, 'rewrite' => true ) );
    register_taxonomy( 'mtype', 'post', array( 'hierarchical' => true, 'label' => 'Material Type', 'query_var' => true, 'rewrite' => true ) );
}

/*add_action( 'admin_head_media_upload_gallery_form', 'mfields_remove_gallery_setting_div' );
if( !function_exists( 'mfields_remove_gallery_setting_div' ) ) {
    function mfields_remove_gallery_setting_div() {
        print '
            <style type="text/css">
                #gallery-settings *{
                	display:none;
                }
            </style>';
    }
}
add_action('admin_init','remove_post_editor');
function remove_post_editor(){
        print '
            <style type="text/css">
                #preview-action, #editor-toolbar, #edButtonHTML, #edButtonPreview, #post-status-info, #editorcontainer, #add_media, #add_audio, #add_video{
                    
                }
				#draft-ajax-loading, #ajax-loading{
					display:none;	
				}
            </style>';

}*/
add_filter('media_upload_tabs', 'remove_media_type_url_tab');
function remove_media_type_url_tab($tabs) {
    unset($tabs['type_url']);
    return $tabs;
}
add_filter('media_upload_tabs', 'remove_media_library_tab');
function remove_media_library_tab($tabs) {
    unset($tabs['library']);
    return $tabs;
}
add_action('admin_init','allow_contributor_uploads');
function allow_contributor_uploads() {
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
    $contributor->remove_cap('publish_posts');
    $contributor->remove_cap('manage_categories');
    $contributor->remove_cap('edit_pages');
    $contributor->remove_cap('manage_comments');
}
add_action('admin_init','editor_permission');
function editor_permission() {
    $editor = get_role('editor');
    $editor->remove_cap('edit_pages');
    $editor->remove_cap('moderate_comments');
    $editor->remove_cap('edit_comments');
}

function get_user_role() {
    global $current_user;

    $user_roles = $current_user->roles;
    $user_role = array_shift($user_roles);

    return $user_role;
}
add_action('admin_init','es_remove_menu_entries');
function es_remove_menu_entries () {
    // with WP 3.1 and higher
    if (get_user_role() != 'administrator'){
    if ( function_exists( 'remove_menu_page' ) ) {
        remove_menu_page( 'upload.php' );
        remove_menu_page( 'tools.php' );
        remove_menu_page( 'link-manager.php' );
        remove_menu_page( 'edit-comments.php' );
        remove_submenu_page( 'upload.php', 'media-new.php' );
		remove_element ( '#es-bulk-actions' );
		//remove_element ( '.author.column-author, .manage-column.column-author, .manage-column.column-comments, .comments.column-comments' );
    } else {
    // unset comments
        unset( $GLOBALS['menu'][10] );
    // unset menuentry Discussion
        unset( $GLOBALS['submenu']['upload.php'][10] );
    }
    }
}
function remove_element($s){
	print '
		<style type="text/css">
			'.$s.'{
				display:none;
			}
		</style>';
}
function es_meta_boxes() {
    global $post, $new_meta_boxes, $up_options;
    if($up_options->custom_metadata):
        foreach($up_options->custom_metadata as $metadata){
            $metaslug = "custom-".strtolower(preg_replace('/ /', '_', $metadata));
            $metabox = array(
              "name" => $metaslug,
              "std" => "",
              "title" => $metadata,
              "description" => "");
            if (sizeof($new_meta_boxes)==sizeof($up_options->custom_metadata))
                break;
            $new_meta_boxes[] = $metabox;
        }
    endif;
    foreach($new_meta_boxes as $meta_box) {
        $meta_box_value = get_post_meta($post->ID, $meta_box['name'], true);
        if($meta_box_value == "") $meta_box_value = $meta_box['std'];
        echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
        echo'<label style="font-weight: bold; display: block; padding: 5px 0 2px 2px" for="'.$meta_box['name'].'">'.$meta_box['title'].'</label>';
        //echo'<input type="text" name="'.$meta_box['name'].'" value="'.$meta_box_value.'" size="55" /><br />';
        echo '<textarea name="'.$meta_box['name'].'" cols="60" rows="3">'.$meta_box_value.'</textarea><br />';
        echo'<p><label for="'.$meta_box['name'].'">'.$meta_box['description'].'</label></p>';
    }
}

function create_meta_box() {
//    global $theme_name;
    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'es-meta-boxes', 'Material Information', 'es_meta_boxes', 'post', 'normal', 'high' );
    }
}

function save_postdata( $post_id ) {
    global $post, $new_meta_boxes, $up_options;
    if($up_options->custom_metadata):
        foreach($up_options->custom_metadata as $metadata){
            $metaslug = "custom-".strtolower(preg_replace('/ /', '_', $metadata));
            $metabox = array(
                "name" => $metaslug,
                "std" => "",
                "title" => $metadata,
                "description" => "");
            $new_meta_boxes[] = $metabox;
        }
    endif;
    foreach($new_meta_boxes as $meta_box) {
        // Verify
        if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
            return $post_id;
        }

        if ( 'page' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id )) return $post_id;
        } else {
            if ( !current_user_can( 'edit_post', $post_id )) return $post_id;
        }
        $data = $_POST[$meta_box['name']];
        if(get_post_meta($post_id, $meta_box['name']) == "") add_post_meta($post_id, $meta_box['name'], $data, true);
        elseif($data != get_post_meta($post_id, $meta_box['name'], true)) update_post_meta($post_id, $meta_box['name'], $data);
        elseif($data == "") delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));
    }
}
add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');
// remove update notice
add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );

?>
