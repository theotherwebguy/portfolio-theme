<?php
/**
 * Register assets
 *
 * @package portfolio
 */

namespace PORTFOLIO_THEME\Inc;

use PORTFOLIO_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct(){
        //load class
        $this->set_hooks();
    }

    protected function set_hooks(){
        // actions
        add_action('wp_enqueue_scripts', [$this, 'portfolio_enqueue_scripts']);

    }

    public function portfolio_enqueue_scripts(){

        wp_enqueue_style('bootstrap-css', PORTFOLIO_DIR_URI . '/assets/library/src/css/bootstrap.min.css');
        wp_enqueue_style('portfolio-css', PORTFOLIO_DIR_URI . '/style.css');

        wp_enqueue_script('bootstrap-js', PORTFOLIO_DIR_URI . '/assets/library/src/js/bootstrap.min.js', ['jquery'],null,true);
        wp_enqueue_script('main', PORTFOLIO_DIR_URI . '/assets/js/main.js',[],null,true);

    }

}
