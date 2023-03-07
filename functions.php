<?php
/**
 * Theme Functions File 
 * 
 * @package portfolio
 * 
 */

//  adding theme styleshetts
function portfolio_enqueue_scripts(){
    wp_enqueue_style( 'portfolio_style', get_template_directory_uri() . 'style.css',[], filemtime(get_template_directory_uri(  ) . 'style.css'), 'all' );

    wp_enqueue_script( 'portfolio_js', 
    get_template_directory_uri( ) . '/assets/js/main.js',[], filemtime(), true );
}
add_action( 'wp_enqueue_scripts','portfolio_enqueue_scripts' );