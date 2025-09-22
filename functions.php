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

    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'xroof'),
    ));

    remove_theme_support('widgets-block-editor');

    // add_theme_support('custom-logo', array(
    //     'height' => 60,
    //     'width' => 200,
    //     'flex-width' => true,
    //     'flex-height' => true,
    // ));

    // add_theme_support('custom-background', array(
    //     'default-color' => 'ffffff',
    //     'default-image' => '',
    // ));

    // add_theme_support('woocommerce');

    // add_theme_support('align-wide');



}

add_action('after_setup_theme', 'xroof_theme_support');


function xroof_register_footer_widgets()
{
    // Blog Details Sidebar   
    register_sidebar([
        'name' => esc_html__('Blog Details Sidebar', 'xroof'),
        'id' => 'blog-details-sidebar',
        'description' => esc_html__('Widgets in this area will be shown on the Blog Details page.', 'xroof'),
        'before_widget' => '<div id="%1$s" class="widget blog__sidebar %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="sidebar__title mb-4">',
        'after_title' => '</h5>',
    ]);

    // Footer 1 - Brand
    register_sidebar([
        'name' => esc_html__('Footer 1 - Brand', 'xroof'),
        'id' => 'footer1-brand',
        'description' => esc_html__('Add logo, description, social links for Home 1 footer.', 'xroof'),
        'before_widget' => '<div id="%1$s" class="widget footer__widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="footer__title mb-8">',
        'after_title' => '</h5>',
    ]);

    // Footer 1 - Links
    register_sidebar([
        'name' => esc_html__('Footer 1 - Quick Links', 'xroof'),
        'id' => 'footer1-links',
        'description' => esc_html__('Add navigation or quick links for Home 1 footer.', 'xroof'),
        'before_widget' => '<div id="%1$s" class="widget footer__widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="footer__title mb-8">',
        'after_title' => '</h5>',
    ]);

    // Footer 1 - Hours
    register_sidebar([
        'name' => esc_html__('Footer 1 - Working Hours', 'xroof'),
        'id' => 'footer1-hours',
        'description' => esc_html__('Add working hours for Home 1 footer.', 'xroof'),
        'before_widget' => '<div id="%1$s" class="widget footer__widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="footer__title mb-8">',
        'after_title' => '</h5>',
    ]);

    // Footer 1 - Newsletter
    register_sidebar([
        'name' => esc_html__('Footer 1 - Newsletter', 'xroof'),
        'id' => 'footer1-newsletter',
        'description' => esc_html__('Add newsletter form for Home 1 footer.', 'xroof'),
        'before_widget' => '<div id="%1$s" class="widget footer__widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="footer__title mb-8">',
        'after_title' => '</h5>',
    ]);

}
add_action('widgets_init', 'xroof_register_footer_widgets');


// Inludes File
include_once('inc/common/scripts.php');
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');
include_once('inc/widgets.php');
if (class_exists('kirki')) {
    include_once('inc/xroof-kirki.php');
}


