<?php

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

?>