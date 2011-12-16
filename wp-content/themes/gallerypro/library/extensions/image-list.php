<?php
/**
 * Thu Dec 15, 2011 15:36:18 added by Thanh Son 
 * Email: thanhson1085@gmail.com 
 */

function view_material_box() {
    global $post;
    echo '<div>'.ajax_material_items($post->ID).'</div>';
}
function ajax_material_items($post_id){
	echo '
	<div id="ajax-image-list"></div>
	<iframe frameborder="0" hspace="0" src="media-upload.php?post_id='.$post_id.'&amp;type=image&amp;" id="TB_iframeContent" name="TB_iframeContent185" onload="tb_showIframe()" style="width: 100%; height: 500px; ">This feature requires inline frames. You have iframes disabled or your browser does not support them.</iframe>
	</script>';
}

function material_box() {
//    global $theme_name;
    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'image-boxes', 'Material List', 'view_material_box', 'post', 'normal', 'high' );
    }
}

add_action('admin_menu', 'material_box');

