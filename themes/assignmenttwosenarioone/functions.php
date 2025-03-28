<?php
function my_theme_setup(){
    register_nav_menus( array(
        'header'    => 'Header menu',
        'footer'    => 'Footer menu'
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup');
// Add featured image support for the posts
add_theme_support( 'post-thumbnails' );


// Add in the supposet for woocommerce
function assignmenttwosenarioone_add_woocommerce_support(){
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'assignmenttwosenarioone_add_woocommerce_support' );
// Add the cart functionality
function enqueue_wc_cart_fragments() {
    wp_enqueue_script( 'wc-cart-fragments' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_wc_cart_fragments' );

// Clear out the preset title, tabs, carts, product, etc
// Remove....
// The title
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
// The price
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
// All add to cart options
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
// All product data tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
// All product attributes
remove_action( 'woocommerce_product_additional_information', 'wc_display_product_attributes', 10 );
// All up-sale products 
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
// All related products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
// All single product variations
remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
// Al single product metadata
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Add the products back in the order of our choosing
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 15 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 15 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 15 );

add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 15 );

add_action( 'woocommerce_product_additional_information', 'wc_display_product_attributes', 15 );

add_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 15 );
// add woocommerce support
function web_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_action( 'after_setup_theme', 'web_add_woocommerce_support' );

?>