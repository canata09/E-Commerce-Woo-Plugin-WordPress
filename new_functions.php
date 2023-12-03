<?php



remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

remove_action( 'woocommerce_before_cart', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_cart', 'woocommerce_output_content_wrapper_end', 10 );

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_checkout_form', 'woocommerce_output_content_wrapper_end', 10 );

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}





// In your theme's functions.php file
remove_all_actions( 'woocommerce_before_main_content' );

add_action( 'woocommerce_before_main_content', 'custom_archive_product_content', 5 );
function custom_archive_product_content() {
    if ( is_post_type_archive( 'product' ) ) {
        wc_get_template( 'archive-product.php' );
    }
}


add_action( 'woocommerce_before_single_product', 'custom_single_product_content', 5 );
function custom_single_product_content() {
    if ( is_product() ) {
        wc_get_template( 'single-product.php' );
    }
}






add_action( 'woocommerce_before_cart', 'custom_cart_content', 5 );
function custom_cart_content() {
    if ( is_cart() ) {
        wc_get_template( 'cart/cart.php' );
    }
}





add_action( 'woocommerce_before_checkout_form', 'custom_checkout_content', 5 );
function custom_checkout_content() {
    if ( is_checkout() ) {
        wc_get_template( 'checkout/form-checkout.php' );
    }
}

?>