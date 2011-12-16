<?php
/**
 * Thu Dec 15, 2011 15:36:18 added by Thanh Son 
 * Email: thanhson1085@gmail.com 
 */
function get_image_item( $attachment_id, $args = null ) {
	global $redir_tab,$form_fields;
    $form_fields = array(
        'post_title'   => array(
            'label'      => __('Title'),
            'value'      => $edit_post->post_title
        ),
        'image_alt'   => array(),
        'post_excerpt' => array(
            'label'      => __('Caption'),
            'value'      => $edit_post->post_excerpt
        ),
        'post_content' => array(
            'label'      => __('Description'),
            'value'      => $edit_post->post_content,
            'input'      => 'textarea'
        ),
        'url'          => array(
            'label'      => __('Link URL'),
            'input'      => 'html',
            'html'       => image_link_input_fields($post, get_option('image_default_link_type')),
            'helps'      => __('Enter a link URL or click above for presets.')
        ),
        'menu_order'   => array(
            'label'      => __('Order'),
            'value'      => $edit_post->menu_order
        ),
        'image_url' => array(
            'label'      => __('File URL'),
            'input'      => 'html',
            'html'       => "<input type='text' class='text urlfield' readonly='readonly' name='attachments[$post->ID][url]' value='" . esc_attr($image_url) . "' /><br />",
            'value'      => wp_get_attachment_url($post->ID),
            'helps'      => __('Location of the uploaded file.')
        )
    );


	if ( ( $attachment_id = intval( $attachment_id ) ) && $thumb_url = wp_get_attachment_image_src( $attachment_id, 'thumbnail', true ) )
		$thumb_url = $thumb_url[0];
	else
		$thumb_url = false;

	$post = get_post( $attachment_id );

	$default_args = array( 'errors' => null, 'send' => $post->post_parent ? post_type_supports( get_post_type( $post->post_parent ), 'editor' ) : true, 'delete' => true, 'toggle' => true, 'show_title' => true );
	$args = wp_parse_args( $args, $default_args );
	$args = apply_filters( 'get_media_item_args', $args );
	extract( $args, EXTR_SKIP );

	$toggle_on  = __( 'Show' );
	$toggle_off = __( 'Hide' );

	$filename = esc_html( basename( $post->guid ) );
	$title = esc_attr( $post->post_title );

	if ( $_tags = get_the_tags( $attachment_id ) ) {
		foreach ( $_tags as $tag )
			$tags[] = $tag->name;
		$tags = esc_attr( join( ', ', $tags ) );
	}

	$post_mime_types = get_post_mime_types();
	$keys = array_keys( wp_match_mime_types( array_keys( $post_mime_types ), $post->post_mime_type ) );
	$type = array_shift( $keys );
	$type_html = "<input type='hidden' id='type-of-$attachment_id' value='" . esc_attr( $type ) . "' />";

	$form_fields = get_attachment_fields_to_edit( $post, $errors );

	if ( $toggle ) {
		$class = empty( $errors ) ? 'startclosed' : 'startopen';
		$toggle_links = "
	<a class='toggle describe-toggle-on' href='#'>$toggle_on</a>
	<a class='toggle describe-toggle-off' href='#'>$toggle_off</a>";
	} else {
		$class = 'form-table';
		$toggle_links = '';
	}

	$display_title = ( !empty( $title ) ) ? $title : $filename; // $title shouldn't ever be empty, but just in case
	$display_title = $show_title ? "<div class='filename new'><span class='title'>" . wp_html_excerpt( $display_title, 60 ) . "</span></div>" : '';

	//$gallery = ( ( isset( $_REQUEST['tab'] ) && 'gallery' == $_REQUEST['tab'] ) || ( isset( $redir_tab ) && 'gallery' == $redir_tab ) );
	$order = '';

	foreach ( $form_fields as $key => $val ) {
		if ( 'menu_order' == $key ) {
            $image_type = (esc_attr( $val['value'] ) == '0')? "Before Image": "After Image"; 
			$order = $image_type;
			unset( $form_fields['menu_order'] );
			break;
		}
	}

	$media_dims = '';
	$meta = wp_get_attachment_metadata( $post->ID );
	if ( is_array( $meta ) && array_key_exists( 'width', $meta ) && array_key_exists( 'height', $meta ) )
		$media_dims .= "<span id='media-dims-$post->ID'>{$meta['width']}&nbsp;&times;&nbsp;{$meta['height']}</span> ";
	$media_dims = apply_filters( 'media_meta', $media_dims, $post );

    $image_src = wp_get_attachment_image_src( $attachment_id,300);
	$attachment_url = get_permalink( $attachment_id );

	$item = "<div id='image-list-box'>
	$type_html
	$display_title
	<table class='slidetoggle describe $class'>
		<thead class='media-item-info' id='media-head-$post->ID'>
		<tr valign='top'>
			<td class='A1B1' id='thumbnail-head-$post->ID'>
			<p><a href='".$image_src[0]."' target='_blank'><img class='thumbnail' src='$thumb_url' alt='' style='margin-top: 3px' /></a></p>
			</td>
			<td>
			<p><strong>" . __('Title:') . "</strong> $title</p>
			<p><strong>" . __('Image Type:') . "</strong> $order</p>
			<p><strong>" . __('File name:') . "</strong> $filename</p>
			<p><strong>" . __('File type:') . "</strong> $post->post_mime_type</p>
			<p><strong>" . __('Upload date:') . "</strong> " . mysql2date( get_option('date_format'), $post->post_date ). '</p>';
			if ( !empty( $media_dims ) )
				$item .= "<p><strong>" . __('Dimensions:') . "</strong> $media_dims</p>\n";

			$item .= "</td></tr>\n</thead></table></div>";

	return $item;
}
// Image List
function get_image_items( $post_id, $errors ) {
    $attachments = array();
    if ( $post_id ) {
        $post = get_post($post_id);
        if ( $post && $post->post_type == 'attachment' )
            $attachments = array($post->ID => $post);
        else
            $attachments = get_children( array( 'post_parent' => $post_id, 'post_type' => 'attachment', 'orderby' => 'menu_order ASC, ID', 'order' => 'DESC') );
    } else {
        if ( is_array($GLOBALS['wp_the_query']->posts) )
            foreach ( $GLOBALS['wp_the_query']->posts as $attachment )
                $attachments[$attachment->ID] = $attachment;
    }

    $output = '';
    foreach ( (array) $attachments as $id => $attachment ) {
        if ( $attachment->post_status == 'trash' )
            continue;
        if ( $item = get_image_item( $id, array( 'errors' => isset($errors[$id]) ? $errors[$id] : null) ) )
            $output .= "\n<div id='image-item-$id' class='image-item child-of-$attachment->post_parent preloaded'><div class='progress'><div class='bar'></div></div><div id='image-upload-error-$id'></div><div class='filename'></div>$item\n</div>";
    }

    return $output;
}

function view_image_boxes() {
    global $post;
    echo '<div>'.get_image_items($post->ID, $error).'</div>';
}
function ajax_image_box(){
echo '
<script type="text/javascript">
	jQuery(document).ready(function(){
	jQuery.ajaxSetup({cache:false});
	//$("h2 a").click(function(){
		//var post_id = $(this).attr("rel")
		jQuery("#TB_window").html("loading...");
		jQuery("#TB_window").load("http://localhost/sb/wp-admin/media-upload.php?post_id='.$post->ID.'&type=image&TB_iframe=1&width=640&height=314","");
		//return false;
	//});
});
</script>';
}

function image_box() {
//    global $theme_name;
    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'TB_window', 'Image List', 'ajax_image_box', 'post', 'normal', 'high' );
    }
}

//add_action('admin_menu', 'image_box');

