<?php
include "../admin/giaodien/header.php";
include "../admin/giaodien/slider.php";
include "../admin/class/product_class.php";
?>
<?php
$product = new product;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST,$_FILES);
    // echo '<pre>';
    // echo print_r($_POST);
    // echo print_r($_FILES['product_img_desc']['name']);
    // echo '<pre>';
    $insert_product = $product -> insert_product($_POST,$_FILES);
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm<span style="color: red;">*</span></label>
                    <input name="product_name" required type="text" placeholder="Nhập tên sản phẩm">
                    <!-- Chọn sản phẩm -->
                    <label for="">Chọn sản phẩm<span style="color: red;">*</span></label>
                    <select name="cartegory_id" id="cartegory_id">
                        <option value="#">--Chọn--</option>
                        <?php
                            $show_cartegory = $product -> show_cartegory();
                            if ($show_cartegory) {
                                while ($result = $show_cartegory -> fetch_assoc()) {                  
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                               }
                            } 
                        ?>
                    </select>
                    <!-- Chọn loại sản phẩm -->
                    <label for="">Chọn loại sản phẩm<span style="color: red;">*</span></label>
                    <select required name="type_product_id" id="type_product_id">
                        <option value="">--Chọn--</option>
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
                        <option value="<?php echo $result_product_color['product_color_id'] ?>"><?php echo $result_product_color['product_color_name'] ?></option>
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
                    <input name="product_price" required type="text" placeholder="Giá sản phẩm">
                    <input name="product_promotion" required type="text" placeholder="Giá khuyến mãi">
                    <label for="">Mô tả<span style="color: red;">*</span></label>
                    <textarea name="product_description" required id="" cols="40" rows="10" placeholder="Mô tả sản phẩm"></textarea> <br>
                    <label for="">Ảnh sản phẩm<span style="color: red;">*</span></label>
                    <span style="color:red;"><?php if(isset($insert_product)){
                        echo ($insert_product);
                    } ?></span>
                    <input name="product_img" required type="file">
                    <label for="">Các ảnh mô tả sản phẩm<span style="color: red;">*</span></label>
                    <input name="product_img_desc[]" required multiple type="file">
                    <button type="submit">Thêm</button>
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