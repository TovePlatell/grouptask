<?php
function customtheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'customtheme_add_woocommerce_support');

// Enqueue styles
function antt_enqueue_styles()
{
    $uri = get_template_directory_uri();

    wp_enqueue_style('bootstrap', $uri . '/css/bootstrap.css');
    wp_enqueue_style('style', $uri . '/style.css');
}
add_action('wp_enqueue_scripts', 'antt_enqueue_styles');

// Enqueue scripts
function antt_enqueue_scripts()
{
    $uri = get_template_directory_uri();

    wp_enqueue_script('bootstrap', $uri . '/js/bootstrap.js');
}
add_action('wp_enqueue_scripts', 'antt_enqueue_scripts');




//Menus:

function hheads_menus(){
$location = array(
    'primary' => "top horizontal menu",
  
    
);
register_nav_menus($location);

}

add_action('init', 'hheads_menus');

?>