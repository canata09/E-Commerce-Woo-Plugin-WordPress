<?php



/**
 * Remove the default WooCommerce content wrapper
 *
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );

// Define your custom function
function my_custom_content_wrapper_start() {
    echo '<div id="my-custom-content-wrapper">'; // Replace this with your custom HTML
}

// Add your custom function to the action hook
add_action( 'woocommerce_before_main_content', 'my_custom_content_wrapper_start', 10 );






/**
 * Remove the default WooCommerce content end wrapper
 *
 *
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
*/




/**
 * Remove the default WooCommerce content end wrapper
 *
 *

// In your theme's functions.php file
remove_all_actions( 'woocommerce_before_main_content' );

add_action( 'woocommerce_before_main_content', 'custom_archive_product_content', 5 );
function custom_archive_product_content() {
    if ( is_post_type_archive( 'product' ) ) {
        wc_get_template( 'archive-product.php' );
    }
}
*/





/**
 * Remove the default WooCommerce content end wrapper
 *
 *
add_action( 'woocommerce_before_single_product', 'custom_single_product_content', 5 );
function custom_single_product_content() {
    if ( is_product() ) {
        wc_get_template( 'single-product.php' );
    }
}
*/




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