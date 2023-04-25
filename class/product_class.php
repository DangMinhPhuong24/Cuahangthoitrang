<?php
include "C:/xampp/htdocs/Cuahangthoitrang/lib/database.php";
?>

<?php
class product{
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }
    public function insert_product(){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $type_product_id = $_POST['type_product_id'];
        $color_id = $_POST['color_id'];
        $product_price = $_POST['product_price'];
        $product_promotion = $_POST['product_promotion'];
        $product_description = $_POST['product_description'];
        $product_img = $_FILES['product_img']['name'];

        $file_ex = basename($_FILES['product_img']['name']);
        $file_type = strtolower(pathinfo($product_img,PATHINFO_EXTENSION));
        if (file_exists("upload/$file_ex")) {
            $exist = "File đã tồn tại";
            return $exist;
        }else{
            if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
                $exist = "Chỉ chọn file ảnh";
                return $exist;
            }else {
                move_uploaded_file($_FILES['product_img']['tmp_name'],"upload/".$_FILES['product_img']['name']);
                $query = "INSERT INTO tbl_product (
                    product_name,
                    cartegory_id,
                    type_product_id,
                    color_id,
                    product_price,
                    product_promotion,
                    product_description,
                    product_img) 
                    VALUES (
                        '$product_name',
                        '$cartegory_id',
                        '$type_product_id',
                        '$color_id',
                        '$product_price',
                        '$product_promotion',
                        '$product_description',
                        '$product_img')";
                $result = $this -> db -> insert($query);
                if($result){
                    $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
                    $result = $this -> db -> select($query) -> fetch_assoc();
                    $product_id = $result['product_id'];
                    $filename = $_FILES['product_img_desc']['name'];
                    $filetmp = $_FILES['product_img_desc']['tmp_name'];
                    foreach ($filename as $key => $value) {
                        move_uploaded_file($filetmp[$key],"upload/".$value);
                        $query = "INSERT INTO tbl_product_img_desc (product_id,product_img_desc) VALUES ('$product_id','$value')";
                        $result = $this -> db -> insert($query);
                    }
                    $product_size = $_POST['product_size'];
                    foreach ($product_size as $key => $value) {
                        $query = "INSERT INTO tbl_product_size (product_id,product_size) VALUES ('$product_id','$value')";
                        $result = $this -> db -> insert($query);
                    }
                }
            }
        }
        // header('Location:type_product_list.php');
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function show_type_product(){
        // $query = "SELECT * FROM tbl_type_product ORDER BY type_product_id DESC";
        $query = "SELECT tbl_type_product.*,tbl_cartegory.cartegory_name FROM tbl_type_product 
        INNER JOIN tbl_cartegory ON tbl_type_product.cartegory_id = tbl_cartegory.cartegory_id 
        ORDER BY tbl_type_product.type_product_id DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function show_type_product_ajax($cartegory_id){
        $query = "SELECT * FROM tbl_type_product WHERE cartegory_id ='$cartegory_id' ORDER BY type_product_id DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function show_product(){
        $query = "SELECT tbl_product.*,tbl_cartegory.cartegory_name FROM tbl_product 
        INNER JOIN tbl_cartegory ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id 
        ORDER BY tbl_product.product_id DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    // public function show_product1(){
    //     $query = "SELECT tbl_product.*,tbl_type_product.type_product_name FROM tbl_product 
    //     INNER JOIN tbl_type_product ON tbl_product.type_product_id = tbl_type_product.type_product_id 
    //     ORDER BY tbl_product.product_id DESC";
    //     $result = $this -> db -> select($query);
    //     return $result;
    // }

    // -------------------------Màu sắc và ảnh màu sắc --------------
    public function insert_img($product_color_name,$product_color_image_new_name){
        $query = "INSERT INTO tbl_product_color (product_color_name,product_color_image_name) VALUES ('$product_color_name','$product_color_image_new_name')";
        $result = $this -> db -> insert($query);
        return $result;
    }
    public function show_product_color(){
        $query = "SELECT * FROM tbl_product_color ORDER BY product_color_id DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function get_product_color($product_color_id){
        $query = "SELECT * FROM tbl_product_color WHERE product_color_id ='$product_color_id'";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function update_img($product_color_name,$product_color_image_new_name,$product_color_id){
        $query = "UPDATE tbl_product_color SET product_color_name = '$product_color_name',product_color_image_name = '$product_color_image_new_name' WHERE product_color_id ='$product_color_id'";
        $result = $this -> db -> update($query);
        header('Location:product_color_list.php');
        return $result;
    }
    public function delete_product_color($product_color_id){
        $query = "DELETE FROM tbl_product_color WHERE product_color_id ='$product_color_id'";
        $result = $this -> db -> delete($query);
        header('Location:product_color_list.php');
        return $result;
    }
    public function show_product_color_list(){
        $query = "SELECT * FROM tbl_product_color ORDER BY product_color_id DESC";
        $result_product_color = $this -> db -> select($query);
        return $result_product_color;
    }
}
?>