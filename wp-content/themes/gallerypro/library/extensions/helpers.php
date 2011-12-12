<?php

// create bullet-proof excerpt for meta name="description"

function gpro_trim_excerpt($text) {
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = strip_shortcodes( $text );
        $text = str_replace(']]>', ']]&gt;', $text);
        $text = strip_tags($text);
        $text = str_replace('"', '\'', $text);
        $excerpt_length = apply_filters('excerpt_length', 55);
        $words = explode(' ', $text, $excerpt_length + 1);
        if (count($words) > $excerpt_length) {
            array_pop($words);
            array_push($words, '[...]');
            $text = implode(' ', $words);
        }
    }
    return $text;
}

function gpro_the_excerpt($deprecated = '') {
    global $post;
    $output = '';
    $output = strip_tags($post->post_excerpt);
    $output = str_replace('"', '\'', $output);
    if ( post_password_required($post) ) {
        $output = __('There is no excerpt because this is a protected post.');
        return $output;
    }
    return $output;
}

function gpro_excerpt_rss() {
    global $post;
    $output = '';
    $output = strip_tags($post->post_excerpt);
    if ( post_password_required($post) ) {
        $output = __('There is no excerpt because this is a protected post.');
        return $output;
    }
    return apply_filters('gpro_excerpt_rss', $output);
}
add_filter('gpro_excerpt_rss', 'gpro_trim_excerpt');

// create nice multi_tag_title
// Credits: Martin Kopischke for providing this code

function gpro_tag_query() {
    $nice_tag_query = get_query_var('tag'); // tags in current query
    $nice_tag_query = str_replace(' ', '+', $nice_tag_query); // get_query_var returns ' ' for AND, replace by +
    $tag_slugs = preg_split('%[,+]%', $nice_tag_query, -1, PREG_SPLIT_NO_EMPTY); // create array of tag slugs
    $tag_ops = preg_split('%[^,+]*%', $nice_tag_query, -1, PREG_SPLIT_NO_EMPTY); // create array of operators
    
    $tag_ops_counter = 0;
    $nice_tag_query = '';
    
    foreach ($tag_slugs as $tag_slug) { 
        $tag = get_term_by('slug', $tag_slug ,'post_tag');
        // prettify tag operator, if any
        if ($tag_ops[$tag_ops_counter] == ',') {
                $tag_ops[$tag_ops_counter] = ', ';
        } elseif ($tag_ops[$tag_ops_counter] == '+') {
                $tag_ops[$tag_ops_counter] = ' + ';
        }
        // concatenate display name and prettified operators
        $nice_tag_query = $nice_tag_query.$tag->name.$tag_ops[$tag_ops_counter];
        $tag_ops_counter += 1;
    }
    return $nice_tag_query;
}


// Create Header Ads
function gpro_ads_below_header(){
    global $up_options;
    if($up_options->top_ads){ ?>
        <div id="ads_below_header">
            <?php echo $up_options->top_ads; ?>
        </div>
    <?php }
}
add_action('gpro_belowheader', 'gpro_ads_below_header');

// Create Footer Ads
function gpro_ads_above_footer(){
    global $up_options;
    if($up_options->bottom_ads){ ?>
        <div id="ads_above_footer">
            <?php echo $up_options->bottom_ads; ?>
        </div>
    <?php }
}
add_action('gpro_abovefooter', 'gpro_ads_above_footer'); ?>