<?php

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


?>
