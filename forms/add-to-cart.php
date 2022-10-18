<?php
    
    $current_page = isset ($POST['product_id']) ? $POST['product_id'] : 1;
    $search_key = isset ($POST['quantity']) ? $POST['quantity'] : 1;
    $search_key = isset ($POST['type']) ? $POST['type'] : "";

    
?>