FUNCTIONS.PHP
<?php
function mychildtheme_enqueue_styles() {

    $parent_style = 'twentyseventeen';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ));
}

add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );
wp_enqueue_script('main', get_stylesheet_directory_uri() . '/main.js',false,'1.1',"all");

?>