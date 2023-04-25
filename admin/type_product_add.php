<?php
include "../admin/giaodien/header.php";
include "../admin/giaodien/slider.php";
include "../admin/class/type_product_class.php";
?>
<?php
$type_product = new type_product;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartegory_id = $_POST['cartegory_id'];
    $type_product_name = $_POST['type_product_name'];
    $insert_type_product = $type_product -> insert_type_product($cartegory_id,$type_product_name);
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-type-product-add">
                <h1>Thêm loại sản phẩm</h1>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="#">Chọn danh mục</option>
                        <?php
                            $show_cartegory = $type_product -> show_cartegory();
                            if ($show_cartegory) {
                                while ($result = $show_cartegory -> fetch_assoc()) {                  
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                               }
                            } 
                        ?>
                    </select> <br>
                    <input required name="type_product_name" type="text" placeholder="Nhập tên loại sản phẩm">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>