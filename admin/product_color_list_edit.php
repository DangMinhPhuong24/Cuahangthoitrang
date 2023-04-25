<?php
include "../admin/giaodien/header.php";
include "../admin/giaodien/slider.php";
include "../admin/class/product_class.php";
?>
<?php
    $product = new product;
    if (!isset($_GET['product_color_id']) || $_GET['product_color_id'] == NULL) {
        echo "<script> window.location = 'product_color_list.php' </script>";
    }else{
        $product_color_id = $_GET['product_color_id'];
    }
    $get_product_color = $product -> get_product_color($product_color_id);
    if ($get_product_color) {
        $resultA = $get_product_color -> fetch_assoc();
    }
?>
<?php
    $product = new product;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $product_color_name = $_POST['product_color_name'];
        $file_name = $_FILES['product_color_image_name']['name'];
        $file_temp = $_FILES['product_color_image_name']['tmp_name'];
        $div = explode('.',$file_name);
        $file_ext = strtolower(end($div));
        $product_color_image_new_name = substr(md5(time()),0,10).'.'.$file_ext;
        $upload_image = "upload_product_color/".$product_color_image_new_name;
        move_uploaded_file($file_temp,$upload_image);
        $update_img = $product -> update_img($product_color_name,$product_color_image_new_name,$product_color_id);
    }
?>
<div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Tên màu<span style="color: red;">*</span></label> <br>
                    <input type="text" value="<?php echo $resultA['product_color_name'] ?>" name="product_color_name" id="" placeholder="Nhập tên màu">
                    <br> 
                    <label for="">Ảnh cũ</label> <br>
                    <img src="upload_product_color/<?php echo $resultA['product_color_image_name'] ?>" alt="" srcset="">
                    <br> <br> 
                    <label for="">Vui lòng chọn ảnh mới<span style="color: red;">*</span></label> <br>
                    <input required multiple name="product_color_image_name" type="file">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>