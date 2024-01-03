<?php


/**
 * Remove the default WooCommerce content wrapper
 *
 */
remove_action( 'woocommerce_before_main_content', 'my_theme_wrapper_start', 10 );

// Define your custom function
function my_theme_wrapper_start() {
    echo '<section id="gain">';
}

// Add your custom function to the action hook
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);







/**
 * Remove the default WooCommerce content wrapper
 *
 */
remove_action( 'woocommerce_after_main_content', 'my_theme_wrapper_end', 10 );

// Define your custom function
function my_theme_wrapper_end() {
    echo '</section>';
}

// Add your custom function to the action hook
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

?>