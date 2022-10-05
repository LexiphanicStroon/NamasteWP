<?php 

function namaste_theme_support(){
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    }
    
    add_action('after_setup_theme', 'namaste_theme_support');

function custom_document_title_separator( $sep ) {
    return '|';
    
}
add_filter( 'document_title_separator', 'custom_document_title_separator', 10, 1 );
    
function namaste_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('namaste-style', get_template_directory_uri()."/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'namaste_register_styles');

function namaste_register_scripts() {
   
    wp_enqueue_script('namaste-style', true);
}

add_action('wp_enqueue_scripts', 'namaste_register_scripts');

function namaste_menus() {

$locations = array(
'primary' => "Desktop Primary Left Sidebar",
'footer' => "Footer Items"
);

register_nav_menus($locations);

}

add_action('init', 'namaste_menus');
?>