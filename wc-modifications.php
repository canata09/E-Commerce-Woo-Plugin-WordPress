<?php
function open_container_row_div_classes(){
    // add container & row class
    echo "<div class='container'><div class='row'>";
}
add_action("woocommerce_before_main_content","open_container_row_div_classes");

function close_container_row_div_classes(){
    // add container & row class
    echo "</div></div>";
}
add_action("woocommerce_after_main_content","close_container_row_div_classes");

function load_template_layout(){
    if (is_shop()){
        add_action("woocommerce_before_main_content","open_product_column_grid", 9);
        function open_product_column_grid(){
            // add container class
            echo "<div class='container'>";
        }
        
        add_action("woocommerce_before_main_content","close_product_column_grid", 10);
        function close_product_column_grid(){
            // add container class
            echo "</div>";
        }
    }
}
add_action("template_redirect","load_template_layout");

/**
 * Page Title Removed From This Page
 */
add_filter("woocommerce_show_page_title","toggle_page_title");
function toggle_page_title ($val) {
    $val = false;
    return $val;
}

/**
 * Sort Description of Each of Product Inside of Shop Page
 */
add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt' );

/**
 * Hook: woocommerce_before_main_content.
 * Removing elements from archive-product
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
remove_action( 'woocommerce_before_main_content' , 'woocommerce_breadcrumb', 20);
?>
