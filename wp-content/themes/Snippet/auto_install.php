<?php
set_time_limit(0);
global  $wpdb;
//require_once (TEMPLATEPATH . '/delete_data.php');
/////////////// TERMS & products START ///////////////
$category_array = array('Business',array('Designer','Sub Category 1','Sub Category 2','Sub Category 3'),'Education','Science','Sports');

$dummy_image_path = get_template_directory_uri().'/images/dummy/';

$post_array = array();
$post_author = $wpdb->get_var("SELECT ID FROM $wpdb->users order by ID asc limit 1");
//====================================================================================//
$post_info = array();
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Rocks Stacked to form a Figure',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island 2',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light trails abstract pattern, digital art',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Praesent faucibus ligula luctus dolor',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Apple Slices As Oranges',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
////product 6 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island 2',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 6 end///
////product 7 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light trails abstract pattern, digital art',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 7 end///
////product 8 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Praesent faucibus ligula luctus dolor',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 8 end///
////product 9 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Apple Slices As Oranges',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 9 end///

$post_array['Business'] = $post_info;

//====================================================================================//
$post_info = array();
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Gift Shop Statues',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Cover Illustration for the Ladies',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Gift Shop Statues',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Cover Illustration for the Ladies',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
$post_array['Designer'] = $post_info;
//====================================================================================//
$post_info = array();
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Rocks Stacked to form a Figure',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island 2',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light trails abstract pattern, digital art',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Praesent faucibus ligula luctus dolor',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Apple Slices As Oranges',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Rocks Stacked to form a Figure',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island 2',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light trails abstract pattern, digital art',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Praesent faucibus ligula luctus dolor',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Apple Slices As Oranges',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
$post_array['Sub Category 1'] = $post_info;

//====================================================================================//
$post_info = array();
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Gift Shop Statues',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Cover Illustration for the Ladies',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Gift Shop Statues',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Cover Illustration for the Ladies',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
$post_array['Sub Category 2'] = $post_info;
//====================================================================================//
$post_info = array();
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Rocks Stacked to form a Figure',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island 2',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light trails abstract pattern, digital art',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Praesent faucibus ligula luctus dolor',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Apple Slices As Oranges',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Rocks Stacked to form a Figure',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island 2',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light trails abstract pattern, digital art',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Praesent faucibus ligula luctus dolor',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Apple Slices As Oranges',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
$post_array['Sub Category 3'] = $post_info;

//====================================================================================//
$post_info = array();
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Gift Shop Statues',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Cover Illustration for the Ladies',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Gift Shop Statues',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Cover Illustration for the Ladies',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
$post_array['Education'] = $post_info;
//====================================================================================//
$post_info = array();
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Rocks Stacked to form a Figure',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island 2',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light trails abstract pattern, digital art',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Praesent faucibus ligula luctus dolor',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Apple Slices As Oranges',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Rocks Stacked to form a Figure',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island 2',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light trails abstract pattern, digital art',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Praesent faucibus ligula luctus dolor',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Apple Slices As Oranges',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
$post_array['Science'] = $post_info;

//====================================================================================//
$post_info = array();
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Gift Shop Statues',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Cover Illustration for the Ladies',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
////product 1 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."5.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 1 end///
////product 2 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."4.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Light Bulb Over Statue Head',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 2 end///
////product 3 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."3.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Man Sketching Deserted Island',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 3 end///
////product 4 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."2.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Gift Shop Statues',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 4 end///
////product 5 start///
$post_meta = array();
$post_meta = array(
					"image"			=> $dummy_image_path."1.png",	
				);
$post_info[] = array(
					"post_title"	=>	'Cover Illustration for the Ladies',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. ',
					"post_meta"		=>	$post_meta,
					"post_feature"	=>	0,
					);
////product 5 end///
$post_array['Sports'] = $post_info;

///////////////////////////////////////////////////////////////////////////////////

$feature_cat_name = 'Today Special';
$feature_cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name=\"$feature_cat_name\"");
for($c=0;$c<count($category_array);$c++)
{
	$cat_name = $category_array[$c];
	if(is_array($cat_name))
	{
		$parent_cat_id = '0';
		$cat_name_arr = $cat_name;
		for($i=0;$i<count($cat_name_arr);$i++)
		{
			$cat_id = '';
			$cat_name = $cat_name_arr[$i];
			$cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name=\"$cat_name\"");
			if($cat_id=='')
			{
				$srch_arr = array('&amp;',"'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," ",';',',','_');
				$replace_arr = array('','','','','','','','','','','','','','','','','','','','',',','','');
				$slug = str_replace($srch_arr,$replace_arr,$cat_name);
				$cat_sql = "insert into $wpdb->terms (name,slug) values (\"$cat_name\",\"$slug\")";
				$wpdb->query($cat_sql);
				$last_cat_id = $wpdb->get_var("SELECT max(term_id) FROM $wpdb->terms");
				$cat_id  = $last_cat_id;
				$count = count($post_array[$cat_name]);
				$tt_sql = "insert into $wpdb->term_taxonomy (term_id,taxonomy,parent,count) values (\"$last_cat_id\",'category',\"$parent_cat_id\",\"$count\")";
				$wpdb->query($tt_sql);
				$last_tt_id = $wpdb->get_var("SELECT max(term_taxonomy_id) FROM $wpdb->term_taxonomy");
				if($post_array[$cat_name])
				{
					$post_info_arr = $post_array[$cat_name];
					set_post_info_autorun($post_info_arr);
				}				
			}else
			{
				$last_cat_id = $cat_id;
				$count = count($post_array[$cat_name]);
				$last_tt_id = $wpdb->get_var("SELECT tt.term_taxonomy_id FROM $wpdb->term_taxonomy tt where tt.term_id=\"$last_cat_id\" and tt.taxonomy='category'");
				if($post_array[$cat_name])
				{
					$post_info_arr = $post_array[$cat_name];
					set_post_info_autorun($post_info_arr);
				}
				$tt_update_sql = "update $wpdb->term_taxonomy set count=count+$count where term_id=\"$last_cat_id\"";
				$wpdb->query($tt_update_sql);
			}
			if($i==0)
			{
				$parent_cat_id = $last_cat_id;
			}
		}
	}else
	{
		$cat_id = '';
		$cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name=\"$cat_name\"");
		if($cat_id=='')
		{
			$srch_arr = array('&amp;',"'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," ",';',',','_');
				$replace_arr = array('','','','','','','','','','','','','','','','','','','','',',','','');
			$slug = str_replace($srch_arr,$replace_arr,$cat_name);
			$cat_sql = "insert into $wpdb->terms (name,slug) values (\"$cat_name\",\"$slug\")";
			$wpdb->query($cat_sql);
			$last_cat_id = $wpdb->get_var("SELECT max(term_id) FROM $wpdb->terms");
			$count = count($post_array[$cat_name]);
			$parent_cat_id = 0;
			$tt_sql = "insert into $wpdb->term_taxonomy (term_id,taxonomy,parent,count) values (\"$last_cat_id\",'category',\"$parent_cat_id\",\"$count\")";
			$wpdb->query($tt_sql);
			$last_tt_id = $wpdb->get_var("SELECT max(term_taxonomy_id) FROM $wpdb->term_taxonomy");
			if($post_array[$cat_name])
			{
				$post_info_arr = $post_array[$cat_name];
				set_post_info_autorun($post_info_arr);
			}	
		}else
		{
			$last_cat_id = $cat_id;
			$count = count($post_array[$cat_name]);
			$tt_update_sql = "update $wpdb->term_taxonomy set count=count+$count where term_id=\"$last_cat_id\"";
			$wpdb->query($tt_update_sql);
			$last_tt_id = $wpdb->get_var("SELECT tt.term_taxonomy_id FROM $wpdb->term_taxonomy tt where tt.term_id=\"$last_cat_id\" and tt.taxonomy='category'");
			if($post_array[$cat_name])
			{
				$post_info_arr = $post_array[$cat_name];
				set_post_info_autorun($post_info_arr);
			}
		}
	}
}
/////////////// TERMS END ///////////////
function set_post_tag($pid,$post_tags)
{
	global $wpdb;
	$post_tags_arr = explode(',',$post_tags);
	for($t=0;$t<count($post_tags_arr);$t++)
	{
		$posttag = $post_tags_arr[$t];
		$term_id = $wpdb->get_var("SELECT t.term_id FROM $wpdb->terms t join $wpdb->term_taxonomy tt on tt.term_id=t.term_id where t.name=\"$posttag\" and tt.taxonomy='post_tag'");
		if($term_id == '')
		{
			$srch_arr = array('&amp;',"'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," ",';',',','_');
				$replace_arr = array('','','','','','','','','','','','','','','','','','','','',',','','');
			$posttagslug = str_replace($srch_arr,$replace_arr,$posttag);
			$termsql = "insert into $wpdb->terms (name,slug) values (\"$posttag\",\"$posttagslug\")";
			$wpdb->query($termsql);
			$last_termsid = $wpdb->get_var("SELECT max(term_id) as term_id FROM $wpdb->terms");
		}else
		{
			$last_termsid = $term_id;
		}
		$term_taxonomy_id = $wpdb->get_var("SELECT term_taxonomy_id FROM $wpdb->term_taxonomy where term_id=\"$last_termsid\" and taxonomy='post_tag'");
		if($term_taxonomy_id=='')
		{
			$termpost = "insert into $wpdb->term_taxonomy (term_id,taxonomy,count) values (\"$last_termsid\",'post_tag',1)";
			$wpdb->query($termpost);
			$term_taxonomy_id = $wpdb->get_var("SELECT term_taxonomy_id FROM $wpdb->term_taxonomy where term_id=\"$last_termsid\" and taxonomy='post_tag'");
		}else
		{
			$termpost = "update $wpdb->term_taxonomy set count=count+1 where term_taxonomy_id=\"$term_taxonomy_id\"";
			$wpdb->query($termpost);
		}
		$termsql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$pid\",\"$term_taxonomy_id\")";
		$wpdb->query($termsql);
	}
}
function set_post_info_autorun($post_info_arr)
{
	if(count($post_info_arr)>0)
	{
		global $last_tt_id,$feature_cat_name,$post_author,$wpdb;
		for($p=0;$p<count($post_info_arr);$p++)
		{
			$post_title = $post_info_arr[$p]['post_title'];
			$post_content = $post_info_arr[$p]['post_content'];
			$post_date = date('Y-m-d H:s:i');
			$post_IDs = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like \"$post_title\" and post_type='post'");
			if($post_IDs==0)
			{
				$post_name = strtolower(str_replace(array('&amp;',"'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," ",';',',','_','/'),array('','','','','','','','','','','','','','','','','','','','',',','','',''),$post_title));
				$post_name_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_name like \"$post_name%\" and post_type='post'");
				if($post_name_count>0)
				{
					$post_name = $post_name.'-'.($post_name_count+1);
				}
				$post_sql = "insert into $wpdb->posts (post_author,post_date,post_date_gmt,post_content,post_title,post_name) values (\"$post_author\", \"$post_date\", \"$post_date\", \"$post_content\", \"$post_title\", \"$post_name\")";
				$wpdb->query($post_sql);
				$last_post_id = $wpdb->get_var("SELECT max(ID) FROM $wpdb->posts");
				$guid = get_option('siteurl')."/?p=$last_post_id";
				$guid_sql = "update $wpdb->posts set guid=\"$guid\" where ID=\"$last_post_id\"";
				$wpdb->query($guid_sql);
				if($post_info_arr[$p]['post_meta'])
				{
					foreach($post_info_arr[$p]['post_meta'] as $mkey=>$mval)
					{
						update_post_meta( $last_post_id, $mkey, $mval );
					}
				}
				update_post_meta( $last_post_id, 'pt_dummy_content', 1 );
				if($post_info_arr[$p]['post_tags'])
				{
					set_post_tag($last_post_id,$post_info_arr[$p]['post_tags']);
				}
				$ter_relation_sql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$last_post_id\",\"$last_tt_id\")";
				$wpdb->query($ter_relation_sql);
				$post_feature = $post_info_arr[$p]['post_feature'];
				$feature_cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name=\"$feature_cat_name\"");
				
				if($post_feature && $feature_cat_id)
				{
					$ter_relation_sql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$last_post_id\",\"$feature_cat_id\")";
					$wpdb->query($ter_relation_sql);
					$tt_update_sql = "update $wpdb->term_taxonomy set count=count+1 where term_id=\"$feature_cat_id\"";
					$wpdb->query($tt_update_sql);
				}
			}
		}
	}
}
$pages_array = array('Archive','Sitemap');
$page_info_arr = array();

set_page_info_autorun($pages_array,$page_info_arr);
/////////////// Design Settings START ///////////////
update_option("posts_per_page",'13');
update_option("bizzthemes_alt_stylesheet",'1-brown.css');
update_option("bizzthemes_feedburner",'http://feeds2.feedburner.com/templatic');
update_option("bizzthemes_ad_image_1",$dummy_image_path.'advt_160x125.png');
update_option("bizzthemes_ad_url_1",'http://www.templatic.com');
update_option("bizzthemes_ad_image_3",$dummy_image_path.'ad-125x125.png');
update_option("bizzthemes_ad_url_3",'http://www.templatic.com');
update_option("bizzthemes_ad_image_4",$dummy_image_path.'ad-125x125.png');
update_option("bizzthemes_ad_url_4",'http://www.templatic.com');
update_option("cat_exclude_1",'1');
update_option("bizzthemes_home_name",'Home'); ////
update_option("bizzthemes_search_name",'Search');
update_option("bizzthemes_search_nothing_found",'Nothing found, please search again.');
update_option("bizzthemes_general_tags_name",'Tags');
update_option("bizzthemes_browsing_category",'Browsing Category');
update_option("bizzthemes_browsing_tag",'Browsing Tag');
update_option("bizzthemes_browsing_author",'Browsing Posts of Author');
update_option("bizzthemes_browsing_search",'Browsing Posts filed under Search Term');
update_option("bizzthemes_browsing_day",'Browsing Day');
update_option("bizzthemes_browsing_month",'Browsing Month');
update_option("bizzthemes_browsing_year",'Browsing Year');
update_option("bizzthemes_404error_name",'Error 404 | Nothing found!');
update_option("bizzthemes_404solution_name",'Sorry, but you are looking for something that is not here.');
update_option("bizzthemes_password_protected_name",'This post is password protected. Enter the password to view comments.');
update_option("bizzthemes_comment_responsesa_name",'No Comments');
update_option("bizzthemes_comment_responsesb_name",'One Comment');
update_option("bizzthemes_comment_responsesc_name",'% Comments');
update_option("bizzthemes_comment_trackbacks_name",'Trackbacks For This Post');
update_option("bizzthemes_comment_moderation_name",'Your comment is awaiting moderation.');
update_option("bizzthemes_comment_conversation_name",'Be the first to start a conversation');
update_option("bizzthemes_comment_closed_name",'Comments are closed.');
update_option("bizzthemes_comment_off_name",'Comments are off for this post');
update_option("bizzthemes_comment_reply_name",'Leave a Reply');
update_option("bizzthemes_comment_mustbe_name",'You must be');
update_option("bizzthemes_comment_loggedin_name",'logged in');
update_option("bizzthemes_comment_postcomment_name",'to post a comment.');
update_option("bizzthemes_comment_name_name",'Name');
update_option("bizzthemes_comment_mail_name",'Mail');
update_option("bizzthemes_comment_website_name",'Website');
update_option("bizzthemes_comment_addcomment_name",'Add Comment');
update_option("bizzthemes_comment_justreply_name",'Reply');
update_option("bizzthemes_comment_edit_name",'Edit');
update_option("bizzthemes_comment_delete_name",'Delete');
update_option("bizzthemes_comment_spam_name",'Spam');
update_option("bizzthemes_pagination_first_name",'First');
update_option("bizzthemes_pagination_last_name",'Last');
/////////////// Design Settings END ///////////////
/////////////// WIDGET SETTINGS START ///////////////
$recent_info = array();
$recent_comments_info[1] = array(
					"title"				=>	'Latest Blog Posts',
					"category"			=>	'',
					"post_number"		=>	'4',
					"post_link"			=>	'more blog post link',
					);
$recent_comments_info['_multiwidget'] = '1';
update_option('widget_widget_posts',$recent_comments_info);
$recent_comments_info = get_option('widget_widget_posts');
krsort($recent_comments_info);
foreach($recent_comments_info as $key1=>$val1)
{
	$recent_comments_info_key = $key1;
	if(is_int($recent_comments_info_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-1"] = array('widget_posts-'.$recent_comments_info_key);
//////////////////////////////////////////////////////
$recent_info = array();
$recent_comments_info[1] = array(
					"title"				=>	'Recent Comments',
					"number"			=>	'5',
					);
$recent_comments_info['_multiwidget'] = '1';
update_option('widget_recent-comments',$recent_comments_info);
$recent_comments_info = get_option('widget_recent-comments');
krsort($recent_comments_info);
foreach($recent_comments_info as $key1=>$val1)
{
	$recent_comments_info_key = $key1;
	if(is_int($recent_comments_info_key))
	{
		break;
	}
}
$flicker_info = array();
$flicker_info = array(
					"id"				=>	'15184611@N00',
					"number"			=>	'6',
					);
update_option('widget_flickrwidget',$flicker_info);
$sidebars_widgets["sidebar-2"] = array('pt-ads-160x125-125x125','recent-comments-'.$recent_comments_info_key,'pt-flickr-photos');
//////////////////////////////////////////////////////
$posts_info = array();
$posts_info[1] = array(
					"title"				=>	'Latest Blog Posts',
					"category"			=>	'',
					"post_number"		=>	'4',
					"post_link"			=>	'more blog post link',
					);
$posts_info['_multiwidget'] = '1';
update_option('widget_widget_posts',$posts_info);
$posts_info = get_option('widget_widget_posts');
krsort($posts_info);
foreach($posts_info as $key1=>$val1)
{
	$posts_info_key = $key1;
	if(is_int($posts_info_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-1"] = array('widget_posts-'.$posts_info_key);
//////////////////////////////////////////////////////
$recent_info = array();
$recent_comments_info[] = array(
					"title"				=>	'Recent Comments',
					"number"			=>	'5',
					);
$recent_comments_info['_multiwidget'] = '1';
update_option('widget_recent-comments',$recent_comments_info);
$recent_comments_info = get_option('widget_recent-comments');
krsort($recent_comments_info);
foreach($recent_comments_info as $key1=>$val1)
{
	$recent_comments_info_key = $key1;
	if(is_int($recent_comments_info_key))
	{
		break;
	}
}
$flicker_info = array();
$flicker_info = array(
					"id"				=>	'15184611@N00',
					"number"			=>	'6',
					);
update_option('widget_flickrwidget',$flicker_info);
$sidebars_widgets["sidebar-2"] = array('pt-ads-160x125-125x125','recent-comments-'.$recent_comments_info_key,'pt-flickr-photos');
//////////////////////////////////////////////////////
$posts_info = array();
$posts_info = array(
					"title"				=>	'Contact Us',
					"image"				=>	'Questions or Comments? want you? rbhavesh@gmail.com',
					"quote"				=>	'Company Name here',
					"text"				=>	'This wordpress theme automatically resizes it is column to fit your browser width. Also it will increase/decrease columns to fit monitor size',
					"email"				=>	' 0261 - 252 525 65',
					"main"				=>	'',
					"sub"				=>	'Welcome to Esoftflow Gallery Materials',
					);
update_option('widget_textbuttonwidget3',$posts_info);
$sidebars_widgets["sidebar-3"] = array('pt-about-us');
//////////////////////////////////////////////////////
$posts_info = array();
$posts_info = array(
					"title"				=>	'Contact Us',
					"image"				=>	'Questions or Comments? want you? rbhavesh@gmail.com',
					"quote"				=>	'Company Name here',
					"text"				=>	'Lorem ipsum dolor sit amet,  consectetuer - 395002. adipiscing elit.',
					"phone"				=>	' 0261 - 252 525 65',
					"fax"				=>	'0261 - 222 222 65',
					"email"				=>	'rbhavesh@gmail.com',
					);
update_option('widget_textbuttonwidget2',$posts_info);
$sidebars_widgets["sidebar-4"] = array('pt-contact-us');
//////////////////////////////////////////////////////
$archives_info = array();
$archives_comments_info[1] = array(
					"title"				=>	'',
					"count"			 	=>	'0',
					"dropdown"			 =>	'0',
					);
$archives_comments_info['_multiwidget'] = '1';
update_option('widget_archives',$archives_comments_info);
$archives_comments_info = get_option('widget_archives');
krsort($archives_comments_info);
foreach($archives_comments_info as $key1=>$val1)
{
	$archives_info_key = $key1;
	if(is_int($archives_info_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-5"] = array("archives-$archives_info_key");
//////////////////////////////////////////////////////
$categories_info = array();
$categories_comments_info[1] = array(
					"title"				=>	'',
					"count"			 	=>	'0',
					"hierarchical"		 =>	'0',
					"dropdown"			 =>	'0',
					);
$categories_comments_info['_multiwidget'] = '1';
update_option('widget_categories',$categories_comments_info);
$categories_comments_info = get_option('widget_categories');
krsort($categories_comments_info);
foreach($categories_comments_info as $key1=>$val1)
{
	$categories_info_key = $key1;
	if(is_int($categories_info_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-6"] = array("categories-$categories_info_key");
//////////////////////////////////////////////////////
$links_info = array();
$links_comments_info[1] = array(
					"images"			=>	'1',
					"name"			 	=>	'1',
					"description"		 =>	'1',
					"rating"			 =>	'0',

					"category"			 =>	'0',
					);
$links_comments_info['_multiwidget'] = '1';
update_option('widget_links',$links_comments_info);
$links_comments_info = get_option('widget_links');
krsort($links_comments_info);
foreach($links_comments_info as $key1=>$val1)
{
	$links_info_key = $key1;
	if(is_int($links_info_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-7"] = array("links-$links_info_key");
//////////////////////////////////////////////////////
$links_info = array();
$links_comments_info = array(
					"title"				=>	'Follow us',
					"rss"			 	=>	'#',
					"twitter"			 =>	'#',
					"facebook"			 =>	'#',
					"del"				 =>	'#',
					"digg"				 =>	'#',
					);
update_option('widget_textbuttonwidget1',$links_comments_info);
$sidebars_widgets["sidebar-8"] = array("pt-follow-us");
//////////////////////////////////////////////////////
update_option('sidebars_widgets',$sidebars_widgets);  //save widget iformations
/////////////// WIDGET SETTINGS END ///////////////
function set_page_info_autorun($pages_array,$page_info_arr_arg)
{
	global $post_author,$wpdb;
	$last_tt_id = 1;
	if(count($pages_array)>0)
	{
		$page_info_arr = array();
		for($p=0;$p<count($pages_array);$p++)
		{
			if(is_array($pages_array[$p]))
			{
				for($i=0;$i<count($pages_array[$p]);$i++)
				{
					$page_info_arr1 = array();
					$page_info_arr1['post_title'] = $pages_array[$p][$i];
					$page_info_arr1['post_content'] = $page_info_arr_arg[$pages_array[$p][$i]];
					$page_info_arr1['post_parent'] = $pages_array[$p][0];
					$page_info_arr[] = $page_info_arr1;
				}
			}
			else
			{
				$page_info_arr1 = array();
				$page_info_arr1['post_title'] = $pages_array[$p];
				$page_info_arr1['post_content'] = $page_info_arr_arg[$pages_array[$p]];
				$page_info_arr1['post_parent'] = '';
				$page_info_arr[] = $page_info_arr1;
			}
		}

		if($page_info_arr)
		{
			for($j=0;$j<count($page_info_arr);$j++)
			{
				$post_title = $page_info_arr[$j]['post_title'];
				$post_content = addslashes($page_info_arr[$j]['post_content']);
				$post_parent = $page_info_arr[$j]['post_parent'];
				if($post_parent!='')
				{
					$post_parent_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like \"$post_parent\" and post_type='page'");
				}else
				{
					$post_parent_id = 0;
				}
				$post_date = date('Y-m-d H:s:i');
				$post_name = strtolower(str_replace(array('&amp;',"'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," ",';',',','_','/'),array('','','','','','','','','','','','','','','','','','','','',',','','',''),$post_title));
				$post_name_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_title like \"$post_title\" and post_type='page'");
				if($post_name_count>0)
				{
					echo '';
				}else
				{
					$post_sql = "insert into $wpdb->posts (post_author,post_date,post_date_gmt,post_title,post_content,post_name,post_parent,post_type) values (\"$post_author\", \"$post_date\", \"$post_date\",  \"$post_title\", \"$post_content\", \"$post_name\",\"$post_parent_id\",'page')";
					$wpdb->query($post_sql);
					$last_post_id = $wpdb->get_var("SELECT max(ID) FROM $wpdb->posts");
					$guid = get_option('siteurl')."/?p=$last_post_id";
					$guid_sql = "update $wpdb->posts set guid=\"$guid\" where ID=\"$last_post_id\"";
					$wpdb->query($guid_sql);
					$ter_relation_sql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$last_post_id\",\"$last_tt_id\")";
					$wpdb->query($ter_relation_sql);
					update_post_meta( $last_post_id, 'pt_dummy_content', 1 );
				}
			}
		}
	}
}
$photo_page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title='Archive' and post_type='page'");
update_post_meta( $photo_page_id, '_wp_page_template', 'page-archives.php' );
$photo_page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title='Sitemap' and post_type='page'");
update_post_meta( $photo_page_id, '_wp_page_template', 'page-sitemap.php' );
?>
