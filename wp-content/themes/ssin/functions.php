<?php
if( !class_exists( 'ReduxFramewrk' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxCore/framework.php' );
}
if( !isset( $redux_demo ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxCore/theme-option.php');
}

if ( STYLESHEETPATH == TEMPLATEPATH ) {
    define('OF_FILEPATH', TEMPLATEPATH);
    define('OF_DIRECTORY', get_template_directory_uri());
} else {
    define('OF_FILEPATH', STYLESHEETPATH);
    define('OF_DIRECTORY', get_stylesheet_directory_uri());
}

include "bfi_thumb/BFI_Thumb.php";
include 'inc/procedure.php';
include 'inc/duplicate_post.php';

if (function_exists('register_nav_menus')) {
    register_nav_menus (
        array(

            'main-nav' => 'The Main Menu',
            'footer-nav-left' => 'The Footer Menu Left',
            'footer-nav-right' => 'The Footer Menu Right',

        )
    );
}

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'main-nav') {
        $classes[] = 'menu-procedure';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

if(function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');

}
function get_featured_img($post_id){
    $img_id = get_post_thumbnail_id($post_id);
    $images=wp_get_attachment_image_src( $img_id, false, false );
    return $images[0];
}
function thumb_img($post_id,$h,$w,$q){

    // echo bloginfo('template_url');
    // echo '/timthumb.php?src='.get_featured_img($post_id).'&amp;h='.$h.'&amp;w='.$w.'&amp;q='.$q;
    $params = array( 'width' => $w, 'height' => $h ,'crop' => false,'opacity' =>$q);
    echo bfi_thumb( get_featured_img($post_id), $params );
}
