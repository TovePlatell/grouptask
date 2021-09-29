<?php
function customtheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'customtheme_add_woocommerce_support');

// Enqueue styles


//Enqueue:


    

function antt_enqueue_styles()
{
  

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
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

function antt_menus(){
$location = array(
    'primary' => "top horizontal menu",
    
  
    
);
register_nav_menus($location);

}

add_action('init', 'antt_menus');




function antt_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'antt_widgets_init' );


?>


