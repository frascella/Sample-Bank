<?php
global $up_options, $post;
get_header();
?>
<div class="es-content-container">
<div class="es-content container">
	<div class="es-detail-container left">
		<div class="es-material-title"><h1><?php echo the_title() ?></h1></div>
		<div class="es-material-description-container">
			<div class="es-material-description"><?php echo get_post_meta($post->ID, 'custom-description', true) ?> </div>
		</div>
<?php if ($images = get_before_images()):?>
		<div class="es-after-material-container">	
			<div class="es-after-material">	
				<div class="es-after-material-header"><h2>AFTER FILES</h2></div>
				<div class="es-after-material-gallery-container">
					<div class="ad-gallery">
					  <div class="ad-image-wrapper">
					  </div>
					  <div class="ad-controls">
					  </div>
					  <div class="ad-nav">
						<div class="ad-thumbs">
						  <ul class="ad-thumb-list">
                                <?php foreach ($images as $image) {
                                    $after_imgtitle = $image->post_title;
                                    $after_imgurl =  wp_get_attachment_url($image->ID);
                                    $after_imgurl_thumbnail =  wp_get_attachment_thumb_url($image->ID,'thumbnail');
                                ?>
							<li>
							  <a href="<?php echo $after_imgurl;?>">
								<img src="<?php echo $after_imgurl_thumbnail ?>" title="A title for 9.jpg" alt="This is a nice, and incredibly descriptive, description of the image 9.jpg" class="image13"><label>25004</label>
							  </a>
							</li>
								<?php
								}
								?>
						  </ul>
						</div>
					  </div>
					</div>
				</div>
				<div class="es-button-download-container">
					<ul>
					<li><a class="es-button-download-all">Download all after</a></li>
					<li><a class="es-button-download">Download this file</a></li>
					</ul>
				</div>
			</div>
		</div>
<?php
endif;
if ($images = get_before_images()): 
?>
		<div class="es-before-material-container">
			<div class="es-before-material">	
				<div class="es-before-material-header"><h2>BEFORE FILES</h2></div>
				<div class="es-before-material-gallery-container">
					<div class="ad-gallery">
					  <div class="ad-image-wrapper">
					  </div>
					  <div class="ad-controls">
					  </div>
					  <div class="ad-nav">
						<div class="ad-thumbs">
						  <ul class="ad-thumb-list">
								<?php foreach ($images as $image) {
									$before_imgtitle = $image->post_title;
									$before_imgurl =  wp_get_attachment_url($image->ID);
									$before_imgurl_thumbnail =  wp_get_attachment_thumb_url($image->ID,'thumbnail');
								?>
							<li>
							  <a href="<?php echo $before_imgurl ?>">
								<img src="<?php echo $before_imgurl_thumbnail ?>" title="A title for 9.jpg" alt="This is a nice, and incredibly descriptive, description of the image 9.jpg" class="image13"><label>25004</label>
							  </a>
							</li>
								<?php } ?>
						  </ul>
						</div>
					  </div>
					</div>
				</div>
				<div class="es-button-download-container">
					<ul>
					<li><a class="es-button-download-all">Download all after</a></li>
					<li><a class="es-button-download">Download this file</a></li>
					</ul>
				</div>
			</div>
		</div>
<?php
endif;
?>
	</div>
<div class="es-sidebar-container right">
		<div class="es-sidebar">
			<div class="es-download-all"><a class="es-button-download-all-files">Download all files</a></div>
			<div class="es-related-material-container">
				<div class="es-related-material">
						<div class="es-related-material-header">
							<h2>RELATED MATERIAL</h2>
						</div>	
						<div class="es-related-browser-link">	<a href="#"> Browser all related material</a>					</div>
							<div class="es-related-material-items-container">
								<div class="es-related-material-items">
									<?php echo get_related_material(); ?>
								</div>
							</div>

							
				</div>
			</div>
			
		</div>
	</div>

</div>
</div>
<script type="text/javascript">
 $ = jQuery;
 $(function() {
    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
</script>
<?php

function get_before_images($size = 'thumbnail') {
	return get_children( array('post_parent' => get_the_ID(), 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'menu_order' => '0', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
}

function get_after_images($size = 'thumbnail') {
	return get_children( array('post_parent' => get_the_ID(), 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'menu_order' => '1', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
}

function get_related_material(){
	$categories=get_the_category($post->ID);
	$counter = 0;
	$result = '<ul>';
	foreach($categories as $category){ //loop through categories
	$catposts = get_posts('category='.$category->term_id);
	foreach($catposts as $single){
		$post_result .= $single->post_title;
		$counter ++;
		if ($counter > 5) break;
  	$result .='
										<li>
											<div class="es-related-material-item-container">
												<div class="es-related-material-item">
													<div class="es-rep-img"><img src="'.randomimage_mores($cat=$category->ID).'"></div>
													<div class="es-shotcut">
														<div class="es-related-item-shotcut">
														<a><img src="'.get_bloginfo('template_directory').'/images/after_img.png" class="icon"/></a>
														<a><img src="'.get_bloginfo('template_directory').'/images/before_img.png" class="icon"/></a>
														</div>
														<div class="es-related-item-title">'.$category->name.'</div>
														<div class="es-related-item-download"><a href="#"><img class="icon" src="'.get_bloginfo('template_directory').'/images/arrow_down.png"/></a></div>
														
													</div>            
												</div>
											</div>
										</li>	
											
	';
		}
	}
	$result .= '</ul>';
	return $result;
}
function randomimage_mores($size=medium,$num=1,$cat=0) {
	$posts=query_posts('cat='.$cat);
	foreach( $posts as $post ) {
		if ( $images = get_children(array(
			'post_parent' => $post->ID,
			'post_type' => 'attachment',
			'numberposts' => $num,
			'orderby' => 'rand()',
			'post_mime_type' => 'image',)))
		{
			$zeiger = 1;

			foreach( $images as $image ) {
				if ($zeiger != $num) {
					$zwischen="&nbsp;&nbsp;&nbsp;&nbsp;";
				} else {
					$zwischen = "";
					$zeiger = 1;
				}
				$attachmenturl=wp_get_attachment_url($image->ID);
				$attachmentimage=wp_get_attachment_image( $image->ID, $size );
				return $attachmenturl;
				$zeiger++;
			}
		} else {
			return "No Image";
		}
	}
}
?>
