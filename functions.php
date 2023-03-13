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

require_once PORTFOLIO_DIR_PATH . '/inc/helpers/autoloader.php';

//get theme instance
function portfolio_get_theme_instance(){
    \PORTFOLIO_THEME\inc\PORTFOLIO_THEME::get_instance();
}
portfolio_get_theme_instance();



