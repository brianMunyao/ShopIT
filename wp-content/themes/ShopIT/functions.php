<?php

function shopittheme_script_enqueue(){
    
}

add_action('wp_enqueue_scripts', 'shopittheme_script_enqueue');

// menu and footer
function shopittheme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header');
    register_nav_menu('secondary', 'Footer Navigation');
}
add_action('init', 'shopittheme_setup');






