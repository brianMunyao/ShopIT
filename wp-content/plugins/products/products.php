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
    }

    function activateExternally()
    {
        require_once plugin_dir_path(__FILE__) . 'inc/products-activation.php';
        AddProductsActivate::activate();
    }
    function deactivateExternally()
    {
        require_once plugin_dir_path(__FILE__) . 'inc/products-deactivation.php';
        AddProductsDeactivate::deactivate();
    }
}

if (class_exists('AddProducts')) {
    $AddProductsInstance = new AddProducts();
}


//ACTIVATE PLUGIN
$AddProductsInstance->activateExternally();

//DEACTIVATE PLUGIN
$AddProductsInstance->deactivateExternally(); 
