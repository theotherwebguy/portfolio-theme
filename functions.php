<?php
/**
 * Theme Functions File 
 * 
 * @package portfolio
 * 
 */


if(!defined('PORTFOLIO_DIR_PATH')){
    define('PORTFOLIO_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('PORTFOLIO_DIR_URI')){
    define('PORTFOLIO_DIR_URI', untrailingslashit(get_template_directory_uri()));
}


//  adding theme styleshetts
function portfolio_enqueue_scripts(){

    wp_enqueue_style('bootstrap-css', PORTFOLIO_DIR_URI . '/assets/library/src/css/bootstrap.min.css');
    wp_enqueue_style('portfolio-css', PORTFOLIO_DIR_URI . '/style.css');


    wp_enqueue_script('bootstrapjs', PORTFOLIO_DIR_URI . '/assets/library/src/js/bootstrap.min.js', ['jquery'],null,true);
    wp_enqueue_script('main', PORTFOLIO_DIR_URI . '/assets/js/main.js',[],null,true);

}
add_action( 'wp_enqueue_scripts','portfolio_enqueue_scripts' );