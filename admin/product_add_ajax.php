<?php
include "../admin/class/product_class.php";
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'../admin/lib/database.php');
?>
<?php
    $product = new product;
    $cartegory_id = $_GET['cartegory_id'];
?>
<option value="">--Chọn--</option>          
<?php
    $show_type_product_ajax = $product -> show_type_product_ajax($cartegory_id);
    if ($show_type_product_ajax) {
        while ($result = $show_type_product_ajax -> fetch_assoc()) {                  
?>
<option value="<?php echo $result['type_product_id'] ?>"><?php echo $result['type_product_name'] ?></option>
<?php
        }
    } 
?>
