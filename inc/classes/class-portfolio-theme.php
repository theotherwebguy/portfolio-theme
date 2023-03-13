<?php
/**
 * Bootsteaps them theme
 *
 * @package portfolio
 */
namespace PORTFOLIO_THEME\Inc;

use PORTFOLIO_THEME\Inc\Traits\Singleton;

class PORTFOLIO_THEME {

    use Singleton;

    protected function __construct(){

        //load other classes
//        Menus::get_instance();
        Assets::get_instance();

        $this->setup_hooks();
        $this->theme_setup();
    }

    public function setup_hooks(){
        //call hooks and filters

    }


    public function theme_setup(){

        add_theme_support('title-tag');

        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 480,
            'width' => 720,
            'flex-height' => true,
            'flex-width' => true,
        ]);

        add_theme_support('custom-background', [
            'default-color' => '000000',
            'default-image' => MSIZI_DIR_URI . '/images/background.jpg',
        ]);

        /**
         * Register image sizes
         */
        add_image_size( 'featured-large', 350, 121, true);

        add_theme_support('post-thumbnails');

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('automatic-feed-links');

        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
        // to hook tinyMCE stylesheet
        add_editor_style();

        add_theme_support('wp-block-styles');

        add_theme_support('align-wide');
    }

}