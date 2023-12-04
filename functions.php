<?php



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
