<?php
include "../admin/class/product_class.php";
?>
<?php
    $product = new product;
    if (!isset($_GET['product_color_id']) || $_GET['product_color_id'] == NULL) {
        echo "<script> window.location = 'product_color_list.php' </script>";
    }else{
        $product_color_id = $_GET['product_color_id'];
    }
    $delete_product_color = $product -> delete_product_color($product_color_id);
    
?>