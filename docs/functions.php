<?php

// Add WooCommerce Theme Support
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
} add_action( 'after_setup_theme', 'woocommerce_support' );




// Enqueuing custom styles or scripts to enhance your WooCommerce pages
function custom_woocommerce_styles() {
    wp_enqueue_style('custom-woocommerce', get_template_directory_uri() . '/css/custom-woocommerce.css');
} add_action('wp_enqueue_scripts', 'custom_woocommerce_styles');



// In your theme's functions.php file
/*
Here's an example of how you might customize the single product page:

This code removes all the default actions for the single product summary and then adds them back in a different order.
You can customize this to suit your needs.
*/

/**
 * Remove the default WooCommerce content wrapper
 *
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );

// Define your custom function
function woocommerce_output_content_wrapper() {
    if ( is_post_type_archive( 'product' ) ) {
        wc_get_template( 'archive-product.php' );
    }
}
// Add your custom function to the action hook
add_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 5 );


/**
 * Remove the default WooCommerce content end wrapper
 *
 *
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
*/







/**
 * Remove the before single product
 *
 */
remove_action( 'woocommerce_before_single_product', 'woocommerce_output_content_wrapper', 10 );

// Define your custom function
function woocommerce_output_content_wrapper() {
    if ( is_product() ) {
        wc_get_template( 'single-product.php' );
    }
}
// Add your custom function to the action hook
add_action( 'woocommerce_before_single_product', 'woocommerce_output_content_wrapper', 5 );




/**
 * Remove the summary of single product
 *
 */
function custom_single_product_layout() {
    if ( is_product() ) {
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

        // Add them back in the order you want
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
    }
} add_action( 'woocommerce_single_product_summary', 'custom_single_product_layout', 2 );





/**
 * Remove the actions Before Cart content
 *
 */
remove_action( 'woocommerce_before_cart', 'woocommerce_output_content_wrapper', 10 );

// Define your custom function
function woocommerce_output_content_wrapper() {
    if ( is_cart() ) {
        wc_get_template( 'cart/cart.php' );
    }
}
// Add your custom function to the action hook
add_action( 'woocommerce_before_cart', 'woocommerce_output_content_wrapper', 5 );


/**
 * Remove the default WooCommerce content end wrapper
 *
 *
remove_action( 'woocommerce_after_cart', 'woocommerce_output_content_wrapper_end', 10 );
*/








/**
 * Remove the before Checkout Form
 *
 */
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_output_content_wrapper', 10 );

// Define your custom function
function woocommerce_output_content_wrapper() {
    if ( is_checkout() ) {
        wc_get_template( 'checkout/form-checkout.php' );
    }
}
// Add your custom function to the action hook
add_action( 'woocommerce_before_checkout_form', 'woocommerce_output_content_wrapper', 5 );


/**
 * Remove the default WooCommerce content end wrapper
 *
 *
remove_action( 'woocommerce_after_checkout_form', 'woocommerce_output_content_wrapper_end', 10 );
*/


?>
