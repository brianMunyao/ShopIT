<?php

function shopit_theme_script_enqueue()
{
    wp_register_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', [], '5.2.3', 'all');

    wp_enqueue_style('bootstrapcss');

    wp_register_script('jsbootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', [], '5.2.3', false);
    wp_enqueue_script('jsbootstrap');

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', [], '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'shopit_theme_script_enqueue');

// menu and footer
function shopit_theme_setup()
{
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header');
    register_nav_menu('secondary', 'Footer Navigation');
}
add_action('init', 'shopit_theme_setup');

// ADDING NAVWALKER CLASS
if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('init', 'shopit_theme_setup');
