<?php
/*
  * @khai bao gia tri
  * @THEME_URL = lay duong dan thu muc theme
  * @CORE = lay duong dan thu muc /core
  */

define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . "/core");

/*
 * @nhung file /core/init.php
 * */
require_once (CORE . "/init.php");

/*
 * @thiet lap chieu rong cua noi dung
 * */
if(!isset($content_width)){
    $content_width = 620;
}

/*
 * @khai bao chuc nang cua theme
 * */
if(!function_exists('thanhnv_theme_setup')){
    function thanhnv_theme_setup(){
//        thiet lap textdomain
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('thanhnv', $language_folder);
        // tu dong them link RSS len <head>
        add_theme_support('automatic-feed-links');
        // them post thumbnail
        add_theme_support('post-thumbnails');
        // post format
        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link',
        ));
        // them title-tag
        add_theme_support('title-tag');
        // them custom background
        $default_background = array(
            'default-color' => '#E8E8E8'
        );
        add_theme_support('custom-background', $default_background);
        // them menu
        register_nav_menu('primary-menu', __('Primary Menu', 'thanhnv'));
        // tao sidebar
        $sidebar = array(
            'name' => __('Main Sidebar', 'thanhnv'),
            'id' => 'main_sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        );
        register_sidebar($sidebar);
    }
    add_action('init', 'thanhnv_theme_setup');
}