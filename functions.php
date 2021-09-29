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




// Our custom post type function
function create_posttype() {
 
  register_post_type( 'stores',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Stores' ),
              'singular_name' => __( 'Store' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'stores'),
          'show_in_rest' => true,

      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );





add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Köp nu', 'woocommerce' );
}

?>