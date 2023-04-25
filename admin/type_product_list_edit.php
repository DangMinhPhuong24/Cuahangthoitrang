<?php
include "../admin/giaodien/header.php";
include "../admin/giaodien/slider.php";
include "../admin/class/type_product_class.php";
?>
<?php
    $type_product = new type_product;
    if (!isset($_GET['type_product_id']) || $_GET['type_product_id'] == NULL) {
        echo "<script> window.location = 'type_product_list.php' </script>";
    }else{
        $type_product_id = $_GET['type_product_id'];
    }
    $get_type_product = $type_product -> get_type_product($type_product_id);
    if ($get_type_product) {
        $resultA = $get_type_product -> fetch_assoc();
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cartegory_id = $_POST['cartegory_id'];
        $type_product_name = $_POST['type_product_name'];
        $update_type_product = $type_product -> update_type_product($cartegory_id,$type_product_name,$type_product_id);
}
?>
<style>
    select{
        height: 40px;
        width : 300px;
        font-size: 18px;
        padding-left:12px;
        margin-top:20px;
    }
</style>
<div class="admin-content-right">
            <div class="admin-content-right-add-danhmuc">
                <h1>Sửa loại sản phẩm</h1>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="#">Chọn loại sản phẩm</option>
                        <?php
                            $show_cartegory = $type_product -> show_cartegory();
                            if ($show_cartegory) {
                                while ($result = $show_cartegory -> fetch_assoc()) {                  
                        ?>
                        <option <?php if($resultA['cartegory_id'] == $result['cartegory_id']) { echo "SELECTED"; }?> value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                               }
                            } 
                        ?>
                    </select> <br>
                    <input required name="type_product_name" type="text" placeholder="Nhập tên loại sản phẩm" 
                    value="<?php echo $resultA['type_product_name'] ?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>