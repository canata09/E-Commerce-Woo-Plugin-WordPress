<?php

include get_template_directory() . '/restore-functions.php';

?>
<?php
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
?>
<?php
// In your theme's functions.php file
add_action( 'wp_enqueue_scripts', 'enqueue_woocommerce_styles' );
function enqueue_woocommerce_styles() {
    if ( is_woocommerce() ) {
        wp_enqueue_style( 'custom-woocommerce-styles', get_template_directory_uri() . '/css/custom-woocommerce-styles.css' );
    }
}






/*





GitHub Copilot: To customize the layout of a specific WooCommerce page in your theme, you can override the WooCommerce template files in your theme. Here's the step-by-step pseudocode:

1. Identify the WooCommerce template file that corresponds to the page you want to customize. These files are located in the `wp-content/plugins/woocommerce/templates` directory of your WordPress installation.
2. Copy the template file to your theme's directory, maintaining the same directory structure. For example, if you're customizing the single product page, you would copy `wp-content/plugins/woocommerce/templates/single-product.php` to `wp-content/themes/your-theme/woocommerce/single-product.php`.
3. Open the copied file in your theme's directory and make your desired changes.

Here's an example of how you might customize the single product page:


This code removes all the default actions for the single product summary and then adds them back in a different order. You can customize this to suit your needs.
*/










// In your theme's functions.php file
add_action( 'woocommerce_single_product_summary', 'custom_single_product_layout', 2 );
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
}













?>