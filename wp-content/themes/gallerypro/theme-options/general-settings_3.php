<?php
/*  Array Options:
   
   name (string)
   desc (string)
   id (string)
   type (string) - text, color, image, select, multiple, textarea, page, pages, category, categories
   value (string) - default value - replaced when custom value is entered - (text, color, select, textarea, page, category)
   options (array)
   attr (array) - any form field attributes
   url (string) - for image type only - defines the default image
    
*/

$options = array (

    array(  "name" => "Should thumbnails link to custom URL instead of single post?",
            "desc" => "Enable this if you want all gallery thumbnail items on the home page to link directly to a custom URL (when set).",
            "id" => "directlink",
            "type" => "select",
            "default_text" => "No",
            "options" => array("Yes" => "yes")
         ),
    
    array(  "name" => "Enable images from the content to be inserted into the single post slideshow?",
            "desc" => "Enable this if you want to include images via URL in the content area. (Images attached to the post will be added automatically and prioritized first.)",
            "id" => "contentimages",
            "type" => "select",
            "default_text" => "No",
            "options" => array("Yes" => "yes")
         ),

    array(  "name" => "Twitter",
            "desc" => "Add your Twitter username (without the @ please). This is used when someone tweets one of your entries.",
            "id" => "twitter",
            "type" => "text"),
    
    array(  "name" => "Feedburner",
            "desc" => "Add your username to redirect RSS feeds to Feedburner",
            "id" => "feedburner",
            "type" => "text"),
    
    
    /* Deprecated - please use Appearance->Menus to add your menus */
    //array(  "name" => "Pages to Exclude from Page List",
    //        "desc" => "Select the pages you want to exclude from the top page menu. Important Note: This only works for standard page menus, not the new WordPress 3.0 Menus.",
    //        "id" => "excludepages",
    //        "type" => "pages"),

    //array(  "name" => "Categories to Exclude from Category List",
    //        "desc" => "Select the categories you want to exclude from the top category menu. Important Note: This only works for standard page menus, not the new WordPress 3.0 Menus.",
    //        "id" => "excludecats",
    //        "type" => "categories"),

    array(  "name" => "Hide Home Icon/Link",
            "desc" => "Do you want to hide the home icon on the main navigation?",
            "id" => "hide_home_link",
            "type" => "select",
            "default_text" => "No",
            "options" => array("Yes" => "yes")
         ),

    array(  "name" => "Number of Days to Keep Posts as New",
            "desc" => "Enter the number of days to keep posts as new.",
            "id" => "new",
            "type" => "text",
            "value" => "3"),
                                    
    //Depracated 3/8/11
    //array(  "name" => "Disable TimThumb",
    //        "desc" => "Disable this if you experience issues with thumbnails being generated by TimThumb",
    //        "id" => "timthumb",
    //        "type" => "select",
    //        "default_text" => "No",
    //        "options" => array("Yes" => "yes")
    //     ),

    array(  "name" => "Disable LazyLoad",
            "desc" => "Lazyload allows you to load only images within the user's view.",
            "id" => "lazyload",
            "type" => "select",
            "default_text" => "No",
            "options" => array("Yes" => "yes")
         ),
            
    array(
    		"name" => "Custom Metadata to Gallery Items",
            "desc" => "Add custom fields to gallery items.",
            "id" => "custom_metadata",
            "type" => "text_list"
    ),
    
    array(  "name" => "Footer Text",
            "desc" => "Enter the text you'd like to have in the footer.",
            "id" => "footertext",
            "type" => "textarea",
            "value" => "&copy; Copyright ".date('Y').' - '.get_bloginfo('name')."",
            "attr" => array("rows" => "8"))
);

/* ------------ Do not edit below this line ----------- */

//Check if theme options set
global $default_check;
global $default_options;

if(!$default_check):
    foreach($options as $option):
        if($option['type'] != 'image'):
            $default_options[$option['id']] = $option['value'];
        else:
            $default_options[$option['id']] = $option['url'];
        endif;
    endforeach;
    $update_option = get_option('up_themes_'.UPTHEMES_SHORT_NAME);
    if(is_array($update_option)):
        $update_option = array_merge($update_option, $default_options);
        update_option('up_themes_'.UPTHEMES_SHORT_NAME, $update_option);
    else:
        update_option('up_themes_'.UPTHEMES_SHORT_NAME, $default_options);
    endif;
endif;

render_options($options);

?>