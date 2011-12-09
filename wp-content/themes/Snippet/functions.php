<?php 

/*************************************************************
* Do not modify unless you know what you're doing, SERIOUSLY!
*************************************************************/
error_reporting(E_ERROR);
global $blog_id;
if($blog_id)
{
	$upload_folder_path = "wp-content/blogs.dir/$blog_id/files/";
}else
{
	$upload_folder_path = "wp-content/uploads/";
}
global $blog_id;
if($blog_id){ $thumb_url = "&bid=$blog_id";}

if ( function_exists( 'add_theme_support' ) ){
	add_theme_support( 'post-thumbnails' );
	}

add_action('admin_init','allow_contributor_uploads');
function allow_contributor_uploads() {
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
}
function get_user_role() {
    global $current_user;

    $user_roles = $current_user->roles;
    $user_role = array_shift($user_roles);

    return $user_role;
}
function es_remove_menu_entries () {
    // with WP 3.1 and higher
    if (get_user_role() != 'administrator'){
    if ( function_exists( 'remove_menu_page' ) ) {
        remove_menu_page( 'upload.php' );
        remove_submenu_page( 'upload.php', 'media-new.php' );
    } else {
    // unset comments
        unset( $GLOBALS['menu'][10] );
    // unset menuentry Discussion
        unset( $GLOBALS['submenu']['upload.php'][10] );
    }
    }
}

/* Admin framework version 2.0 by Zeljan Topic */

// Theme variables
require_once (TEMPLATEPATH . '/library/functions/theme_variables.php');

//** ADMINISTRATION FILES **//

    // Theme admin functions
    require_once ($functions_path . 'admin_functions.php');

    // Theme admin options
    require_once ($functions_path . 'admin_options.php');

    // Theme admin Settings
    require_once ($functions_path . 'admin_settings.php');

   
//** FRONT-END FILES **//

    // Widgets
    require_once ($functions_path . 'widgets_functions.php');

    // Custom
    require_once ($functions_path . 'custom_functions.php');

    // Comments
    require_once ($functions_path . 'comments_functions.php');
	
	// Yoast's plugins
    require_once ($functions_path . 'yoast-breadcrumbs.php');
	
    require_once ($functions_path . 'yoast-posts.php');
	
	require_once ($functions_path . 'yoast-canonical.php');
	
	if('themes.php' == basename($_SERVER['SCRIPT_FILENAME']) && $_REQUEST['template']=='' && $_GET['page']=='') 
	{
		if($_REQUEST['dummy']=='del')
		{
			delete_dummy_data();	
			$dummy_deleted = '<p><b>All Dummy data has been removed from your database successfully!</b></p>';
		}
		if($_REQUEST['dummy_insert'])
		{
			require_once (TEMPLATEPATH . '/auto_install.php');
		}
		if($_REQUEST['activated']=='true')
		{
			$theme_actived_success = '<p class="message">Theme activated successfully.</p>';	
		}
		$post_counts = $wpdb->get_var("select count(post_id) from $wpdb->postmeta where (meta_key='pt_dummy_content' || meta_key='tl_dummy_content') and meta_value=1");
		if($post_counts>0)
		{
			$dummy_data_msg = '<p> <b>Sample data has been populated on your site. Wish to delete sample data?</b> <br />  <a class="button_delete" href="'.get_option('siteurl').'/wp-admin/themes.php?dummy=del">Yes Delete Please!</a><p>';
		}else
		{
			$dummy_data_msg = '<p> <b>Would you like to auto install this theme and populate sample data on your site?</b> <br />  <a class="button_insert" href="'.get_option('siteurl').'/wp-admin/themes.php?dummy_insert=1">Yes, insert sample data please</a></p>';
		}


		define('THEME_ACTIVE_MESSAGE','
	<style>
	.highlight { width:60% !important; background:#FFFFE0 !important; overflow:hidden; display:table; border:2px solid #558e23 !important; padding:15px 20px 0px 20px !important; -moz-border-radius:11px  !important;  -webkit-border-radius:11px  !important; } 
	.highlight p { color:#444 !important; font:15px Arial, Helvetica, sans-serif !important; text-align:center;  } 
	.highlight p.message { font-size:13px !important; }
	.highlight p a { color:#ff7e00; text-decoration:none !important; } 
	.highlight p a:hover { color:#000; }
	.highlight p a.button_insert 
		{ display:block; width:230px; margin:10px auto 0 auto;  background:#5aa145; padding:10px 15px; color:#fff; border:1px solid #4c9a35; -moz-border-radius:5px;  -webkit-border-radius:5px;  } 
	.highlight p a:hover.button_insert { background:#347c1e; color:#fff; border:1px solid #4c9a35;   } 
	.highlight p a.button_delete 
		{ display:block; width:140px; margin:10px auto 0 auto; background:#dd4401; padding:10px 15px; color:#fff; border:1px solid #9e3000; -moz-border-radius:5px;  -webkit-border-radius:5px;  } 
	.highlight p a:hover.button_delete { background:#c43e03; color:#fff; border:1px solid #9e3000;   } 
	#message0 { display:none !important;  }
	</style>
	
	<div class="updated highlight fade"> '.$theme_actived_success.$dummy_deleted.$dummy_data_msg.'</div>');
		echo THEME_ACTIVE_MESSAGE;
		
	}
	
	function delete_dummy_data()
	{
		global $wpdb;
		delete_option('sidebars_widgets'); //delete widgets
		$productArray = array();
		$pids_sql = "select p.ID from $wpdb->posts p join $wpdb->postmeta pm on pm.post_id=p.ID where (meta_key='pt_dummy_content' || meta_key='tl_dummy_content') and meta_value=1";
		$pids_info = $wpdb->get_results($pids_sql);
		foreach($pids_info as $pids_info_obj)
		{
			$productArray[] = $pids_info_obj->ID; 
		}
		if($productArray)
		{
			$product_ids = implode(',',$productArray);
			$commentsql = "delete from $wpdb->comments where comment_post_ID in ($product_ids)";
			$wpdb->query($commentsql);
			$postmetasql = "delete from $wpdb->postmeta where post_id in ($product_ids)";
			$wpdb->query($postmetasql);
			$postmetasql = "delete from $wpdb->term_relationships where object_id in ($product_ids)";
			$wpdb->query($postmetasql);
			$postmetasql = "delete from $wpdb->posts where ID in ($product_ids)";
			$wpdb->query($postmetasql);
		}
	}

?>
