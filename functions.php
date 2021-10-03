<?php
function customtheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'customtheme_add_woocommerce_support');

// Enqueue styles Enqueue:


    

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
  'footer' => "footer menu",  
  
    
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
  
  
 
    



/* function antt_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'antt_widgets_init' ); */




function antt_features() {
 /*    register_nav_menu('header_nav_menu', 'Header Nav Menu'); */
    register_nav_menu('side_nav_menu', 'Side Nav Menu');
    add_theme_support('title-tag');
    add_theme_support('widgets');
  
    
}

add_action('after_setup_theme', 'get_site_features');


function antt_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'happyheads' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'happyheads' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'happyheads' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'happyheads' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'happyheads' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'happyheads' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'antt_widgets_init' );




?>