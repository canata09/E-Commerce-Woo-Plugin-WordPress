<?php

$args = array(
    'limit' => 5, // Limit to 5 products
    'status' => 'publish', // Retrieve only published products
    // Other parameters as needed
);

$products = wc_get_products($args);

foreach ($products as $product) {
    // Access product details like $product->get_name(), $product->get_price(), etc.
    echo $product->get_name() . ' - ' . $product->get_price() . '<br>';
}

?>