<?php


function xroof_theme_support()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));
    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('post-formats', array(
        'image',
        'video',
        'audio',
        'gallery',
        'quote',
    ));

    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 200,
        'flex-width' => true,
        'flex-height' => true,
    ));

    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));

    add_theme_support('woocommerce');

    add_theme_support('align-wide');

    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'xroof'),
    ));

    remove_theme_support('widgets-block-editor');
}

add_action('after_setup_theme', 'xroof_theme_support');

// Inludes File
include_once('inc/common/scripts.php');
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');
if (class_exists('kirki')) {
    include_once('inc/xroof-kirki.php');
}


