<?php
include "../admin/giaodien/header.php";
include "../admin/giaodien/slider.php";
include "../admin/class/product_class.php";
?>
<?php
    $product = new product;
    if (!isset($_GET['product_id']) || $_GET['product_id'] == NULL) {
        echo "<script> window.location = 'product_list.php' </script>";
    }else{
        $product_id = $_GET['product_id'];
    }
    $get_product = $product -> get_product($product_id);
    if ($get_product) {
        $resultA = $get_product -> fetch_assoc();
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $type_product_id = $_POST['type_product_id'];
        $color_id = $_POST['color_id'];
        $product_price = $_POST['product_price'];
        $product_promotion = $_POST['product_promotion'];
        $product_description = $_POST['product_description'];
        $product_img = $_FILES['product_img']['name'];
        move_uploaded_file($_FILES['product_img']['tmp_name'],"upload/".$_FILES['product_img']['name']);
        $update_product = $product -> update_product($product_name,$cartegory_id,$type_product_id,$color_id,$product_price,$product_promotion,$product_description,$product_img,$product_id);
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Sửa sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm<span style="color: red;">*</span></label>
                    <input name="product_name" required type="text" placeholder="Nhập tên sản phẩm" value="<?php echo $resultA['product_name'] ?>">
                    <!-- Chọn sản phẩm -->
                    <label for="">Chọn sản phẩm<span style="color: red;">*</span></label>
                    <select name="cartegory_id" id="cartegory_id">
                        <option value="#">--Chọn--</option>
                        <?php
                            $show_cartegory = $product -> show_cartegory();
                            if ($show_cartegory) {
                                while ($result = $show_cartegory -> fetch_assoc()) {                  
                        ?>
                        <option <?php if($resultA['cartegory_id'] == $result['cartegory_id']) { echo "SELECTED"; }?> value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                               }
                            } 
                        ?>
                    </select>
                    <!-- Chọn loại sản phẩm -->
                    <label for="">Chọn loại sản phẩm<span style="color: red;">*</span></label>
                    <select required name="type_product_id" id="type_product_id">
                        <?php
                            $show_type_product = $product -> show_type_product();
                            if ($show_type_product) {
                                while ($result = $show_type_product -> fetch_assoc()) {                  
                        ?>
                        <option <?php if($resultA['type_product_id'] == $result['type_product_id']) { echo "SELECTED"; }?> value="<?php echo $result['type_product_id'] ?>"><?php echo $result['type_product_name'] ?></option>
                        <?php
                               }
                            } 
                        ?>
                    </select>
                    <!-- Chọn màu sản phẩm -->        
                    <label for="">Chọn màu sản phẩm<span style="color: red;">*</span></label>
                    <select name="color_id" id="color_id">
                        <option value="#">--Chọn--</option>
                        <?php 
                            $show_product_color_list = $product -> show_product_color_list();
                            if ($show_product_color_list) {
                                while ($result_product_color = $show_product_color_list -> fetch_assoc()) {                  
                        
                        ?>
                        <option <?php if($resultA['color_id'] == $result_product_color['product_color_id']) { echo "SELECTED"; }?> value="<?php echo $result_product_color['product_color_id'] ?>"><?php echo $result_product_color['product_color_name'] ?></option>
                        <?php 
                                }
                            } 
                        ?>
                    </select>
                    <!-- Chọn size sản phẩm -->
                    <label for="">Chọn size sản phẩm<span style="color: red;">*</span></label>
                    <div name="product_size" class="product_size row">
                        <p>S</p> <input type="checkbox" name="product_size[]" value="S">
                        <p>M</p> <input type="checkbox" name="product_size[]" value="M">
                        <p>L</p> <input type="checkbox" name="product_size[]" value="L">                       
                        <p>XL</p> <input type="checkbox" name="product_size[]" value="XL">                       
                        <p>XXL</p> <input type="checkbox" name="product_size[]" value="XXL">
                    </div>

                    <label for="">Giá<span style="color: red;">*</span></label>
                    <input name="product_price" required type="text" placeholder="Giá sản phẩm"  value="<?php echo $resultA['product_price'] ?>">
                    <input name="product_promotion" required type="text" placeholder="Giá khuyến mãi" value="<?php echo $resultA['product_promotion'] ?>">
                    <label for="">Mô tả<span style="color: red;">*</span></label>
                    <textarea name="product_description" required id="" cols="40" rows="10" placeholder="Mô tả sản phẩm" ><?php echo $resultA['product_description'] ?></textarea> <br>
                    
                    <label for="">Ảnh sản phẩm<span style="color: red;">*</span></label>
                    <input name="product_img" required type="file">
                    <label for="">Các ảnh mô tả sản phẩm<span style="color: red;">*</span></label>
                    <input name="product_img_desc[]" required multiple type="file">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>

<!-- chọn SẢN PHẨM thì tự động hiện ra LOẠI SẢN PHẨM (xử lý trong product_add_ajax.php) -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script>
    $(document).ready(function(){
        $("#cartegory_id").change(function(){
            // alert($(this).val())
            var x = $(this).val()
            $.get("../admin/product_add_ajax.php",{cartegory_id:x},function (data) {
                $("#type_product_id").html(data);
            })
        })
    })
</script>
</html>