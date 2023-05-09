<?php

/**
 * @package AddProducts
 */

/*
    Plugin Name: Adding Products
    Plugin URI: http://..........
    Description: A plugin used to add products to the db
    version: 1.0.0
    Author: ShopIT

  */

//security check
defined('ABSPATH') or die('Got you Mr. "Hacker"!');

class AddProducts
{

    function __construct()
    {
        $this->add_product_to_db();

    }

    function activateExternally()
    {
        require_once plugin_dir_path(__FILE__) . 'inc/products-activate.php';
        AddProductsActivate::activate();
    }
    function deactivateExternally()
    {
        require_once plugin_dir_path(__FILE__) . 'inc/products-deactivate.php';
        AddProductsDeactivate::deactivate();
    }

    //CREATING THE TABLE IN DB 
    static function create_table_to_db()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . 'products';

        $product_details = "CREATE TABLE IF NOT EXISTS " . $table_name . "(
            p_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            product_name text NOT NULL,
            product_description text NOT NULL,
            product_category text NOT NULL,
            initial_price text NOT NULL,
            product_price int NOT NULL,
            product_SKU text NOT NULL,
            product_image text  NOT NULL
        );";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($product_details);
    }

    // ADDING STOCK
    function add_product_to_db()
    {
        if (isset($_POST['submitbtn'])) {
            var_dump($_POST);
            $data = [
                'product_name' => $_POST['p_name'],
                'product_description' => $_POST['p_desc'],
                'product_category' => $_POST['p_category'],
                'initial_price' => $_POST['init_price'],
                'product_price' => $_POST['p_price'],
                'product_SKU' => $_POST['p_SKU'],
                'product_image' => $_POST['img_url'],
            ];

            global $wpdb;

            $table_name = $wpdb->prefix . 'products';

            $result = $wpdb->insert($table_name, $data, $format = NULL);

            if ($result == true) {
                echo "<script> alert('Product added successfully!');</script>";

                $data['product_name'] = '';
                $data['product_description'] = '';
                $data['product_category'] = '';
                $data['initial_price'] = '';
                $data['product_price'] = '';
                $data['product_SKU'] = '';
                $data['product_image'] = '';
            } else {
                echo "<script>alert('Product not added!');</script>";
            }
        } else {
            // echo "<script>alert('All fields are required');</script>";
        }
    }

 
    function product_form()
    {
        add_action('add_menu', 'add_admin_page');
    }
    function add_admin_page()
    {
        add_menu_page('Add Products', 'Add stock', 'manage_options', 'add_products', [$this, 'admin_index_callback'], 'dashicons-tag', 100);
    }

    function admin_index_callback()
    {
        require_once plugin_dir_path(__FILE__) . 'templates/products.php';
    }
}

if (class_exists('AddProducts')) {
    $AddProductsInstance = new AddProducts();
}


//ACTIVATE PLUGIN
$AddProductsInstance->activateExternally();

//DEACTIVATE PLUGIN
$AddProductsInstance->deactivateExternally();
