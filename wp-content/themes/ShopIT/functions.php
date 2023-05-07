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
    add_theme_support('post-thumbnails', ['products']);
}
add_action('init', 'shopit_theme_setup');


function products_post_type()
{

    $labels = [
        'name' => 'Products',
        'singular_name' => 'Products',
        'add_new' => 'Add Product Item',
        'edit_item' => 'Edit Product Item',
        'update_item' => 'Update Product Item',
        'all_items' => 'All Products',
        'add_new_item' => 'Edit Item',
        'new_item' => 'New Items',
        'view_item' => 'View Item',
        'search_item' => 'Search Product',
        'not_found' => 'No Products Found',
        'parent_item_colon' => 'Parent Item'
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'publicly_queryable' => true,
        'query_variable' => true,
        'rewrite' => array('slug' => 'products'),
        'capability' => 'post',
        'supports' => array('title', 'editor', 'categories', 'author', 'thumbnail', 'comments'),
        'menu_icon' => 'dashicons-tag',
        // 'taxonomies' => [
        //     'product_group'
        // ]
    ];
    register_post_type('products', $args);
}
add_action('init', 'products_post_type');


function categories_taxonomy()
{
    $labels = [
        'name' => 'Product Categories',
        'singular_name' => 'Product Category',
        'search_items' => 'Search Product Categories',
        'all_items' => 'All Product Categories',
        'parent_item' => 'Parent Product Category',
        'parent_item_colon' => 'Parent Product Category',
        'edit_item' => 'Edit Product Category',
        'update_item' => 'Update Product Category',
        'add_new_item' => 'Add New Product Category',
        'new_item_name' => 'New Product Category Name',
        'menu_name' => 'Product Categories',
    ];

    $args = [
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'product-category']
    ];

    register_taxonomy('product_category', ['products'], $args);
}


add_action('init', 'categories_taxonomy');

function my_disable_admin_bar()
{
    if (!current_user_can('manage_options')) {
        add_filter('show_admin_bar', '__return_false');
    }
}
add_action('after_setup_theme', 'my_disable_admin_bar');


// ADDING NAVWALKER CLASS
if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('init', 'shopit_theme_setup');
