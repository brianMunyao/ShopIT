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
defined('ABSPATH') or die('Got you Mr. Hacker!');

class AddProducts
{
    public static $error = '';
    public static $success = '';

    function __construct()
    {
        $this->add_product_to_db();
        $this->update_product_to_db();
        $this->add_product_to_cart();
        $this->increase_item_in_cart();
        $this->decrease_item_in_cart();
        $this->remove_item_from_cart();
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

    //CREATING THE PRODUCTS TABLE IN DB 
    static function create_table_to_db()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . 'products';

        $products_details = "CREATE TABLE IF NOT EXISTS " . $table_name . "(
            p_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            product_name text NOT NULL,
            product_brand text NOT NULL,
            product_description text NOT NULL,
            product_category text NOT NULL,
            initial_price int NOT NULL,
            product_price int NOT NULL,
            product_SKU text NOT NULL,
            product_image text  NOT NULL
        );";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($products_details);
    }

    // ADDING PRODUCTS TO THE DB
    function add_product_to_db()
    {
        if (isset($_POST['submitbtn'])) {

            $data = [
                'product_id' => $_POST['p_id'],
                'product_name' => $_POST['p_name'],
                'product_brand' => $_POST['p_brand'],
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
                $data['product_brand'] = '';
                $data['product_description'] = '';
                $data['product_category'] = '';
                $data['initial_price'] = '';
                $data['product_price'] = '';
                $data['product_SKU'] = '';
                $data['product_image'] = '';
            } else {
                echo "<script>alert('Product not added!');</script>";
            }
        }
    }


    //CREATING THE CART TABLE IN DB 
    static function create_cart_table_to_db()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . 'cart';

        $product_details = "CREATE TABLE IF NOT EXISTS " . $table_name . " (
             id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
             user_id int NOT NULL,
             p_id int NOT NULL,
             quantity int NOT NULL
         );";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($product_details);
    }


    // ADDING A SINGLE PRODUCT TO THE CART TABLE IN DB
    function add_product_to_cart()
    {
        if (isset($_POST['add_to_cart'])) {

            $data = [
                'user_id' => $_POST['user_id'],
                'p_id' => $_POST['p_id'],
                'quantity' => $_POST['quantity'],
            ];


            global $wpdb;

            $table_name = $wpdb->prefix . 'cart';
            $results = $wpdb->insert($table_name, $data);

            if (!$results) {
                // /git /error
            }
        }
    }

    function increase_item_in_cart()
    {
        if (isset($_POST['increase_item_in_cart'])) {
            global $wpdb;

            $table_name = $wpdb->prefix . 'cart';
            $p_id = $_POST['p_id'];
            $new_quantity = $_POST['increase_quantity'];
            $results = $wpdb->query("UPDATE $table_name SET quantity=$new_quantity WHERE p_id=$p_id");

            if (!$results) {
                // /git /error
            }
        }
    }
    function decrease_item_in_cart()
    {
        if (isset($_POST['decrease_item_in_cart'])) {
            global $wpdb;

            $table_name = $wpdb->prefix . 'cart';
            $p_id = $_POST['p_id'];
            $new_quantity = $_POST['decrease_quantity'];

            if ($new_quantity <= 0) {
                $results = $wpdb->query("DELETE FROM $table_name WHERE p_id=$p_id");
            } else {

                $results = $wpdb->query("UPDATE $table_name SET quantity=$new_quantity WHERE p_id=$p_id");
            }

            if (!$results) {
                // /git /error
            }
        }
    }

    function remove_item_from_cart()
    {
        if (isset($_POST['remove_from_cart'])) {
            global $wpdb;

            $table_name = $wpdb->prefix . 'cart';
            $p_id = $_POST['p_id'];
            $results = $wpdb->query("DELETE FROM $table_name WHERE p_id=$p_id");

            if (!$results) {
                // /git /error
            }
        }
    }

    function update_product_to_db()
    {
        if (isset($_POST['submit_edit_product'])) {
            global $wpdb;
            $table_name = $wpdb->prefix . 'products';

            $data = [
                'product_name' => $_POST['p_name'],
                'product_brand' => $_POST['p_brand'],
                'product_description' => $_POST['p_desc'],
                'product_category' => $_POST['p_category'],
                'initial_price' => $_POST['init_price'],
                'product_price' => $_POST['p_price'],
                'product_SKU' => $_POST['p_SKU'],
                'product_image' => $_POST['img_url'],
            ];

            $where = [
                "p_id" => $_POST['p_id']
            ];

            $result = $wpdb->update($table_name, $data, $where);
            AddProducts::$success = "Product updated";
            AddProducts::$error = "Product not updated";
            if ($result) {
                AddProducts::$success = "Product updated";
                sleep(3);
                AddProducts::$success = "";
                // echo "<script>
                // alert('something');
                // var search_span = document.getElementsByClassName('success-msg');
                // search_span[0].style.display = 'block';
                //     </script>";
            } else {
                AddProducts::$error = "Product not updated";
                sleep(3);
                AddProducts::$error = "";
            }
        }
        // setTimeout(function() {
        //     document.querySelector(".success").style.display = "none";
        // }, 3000);
    }


    function productsForm()
    {
        add_action('admin_menu', [$this, 'add_admin_page']);
    }
    function add_admin_page()
    {
        add_menu_page('Products', 'All Products', 'manage_options', 'all_products', [$this, 'admin_index_cb'], 'dashicons-tag', 110);
        add_submenu_page('all_products', 'Add A Product', "Add A Product", 'manage_options', 'add_products', [$this, 'admin_add_products_cb'], 111);
        add_submenu_page(' ', 'Edit A Product', "Edit A Product", 'manage_options', 'edit_products', [$this, 'admin_edit_products_cb'], null);
    }

    function admin_index_cb()
    {
        require_once plugin_dir_path(__FILE__) . 'templates/view-products.php';
    }
    function admin_add_products_cb()
    {
        require_once plugin_dir_path(__FILE__) . 'templates/add-products.php';
    }
    function admin_edit_products_cb()
    {
        require_once plugin_dir_path(__FILE__) . 'templates/edit-products.php';
    }
}

if (class_exists('AddProducts')) {
    $AddProductsInstance = new AddProducts();
}


//ACTIVATE PLUGIN
$AddProductsInstance->activateExternally();

//DEACTIVATE PLUGIN
$AddProductsInstance->deactivateExternally();

//REGISTER 
$AddProductsInstance->productsForm();
