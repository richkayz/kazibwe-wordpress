
<?php
/**
 * Kazibwe Foundation School theme functions.
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup.
 */
function kfs_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    register_nav_menus(array(
        'primary' => __('Main Navigation', 'kazibwe-foundation'),
    ));
}
add_action('after_setup_theme', 'kfs_theme_setup');


/**
 * Load theme styles and scripts.
 */
function kfs_enqueue_assets() {

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'kfs-main-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    wp_enqueue_script(
        'kfs-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'kfs_enqueue_assets');
