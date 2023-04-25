<?php
include "../admin/class/type_product_class.php";
?>
<?php
    $type_product = new type_product;
    if (!isset($_GET['type_product_id']) || $_GET['type_product_id'] == NULL) {
        echo "<script> window.location = 'type_product_list.php' </script>";
    }else{
        $type_product_id = $_GET['type_product_id'];
    }
    $delete_type_product = $type_product -> delete_type_product($type_product_id);
    
?>