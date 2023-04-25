<?php
include "C:/xampp/htdocs/Cuahangthoitrang/lib/database.php";
?>

<?php
class type_product{
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }
    public function insert_type_product($cartegory_id,$type_product_name){
        $query = "INSERT INTO tbl_type_product (cartegory_id,type_product_name) VALUES ('$cartegory_id','$type_product_name')";
        $result = $this -> db -> insert($query);
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
    public function get_type_product($type_product_id){
        $query = "SELECT * FROM tbl_type_product WHERE type_product_id ='$type_product_id'";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function update_type_product($cartegory_id,$type_product_name,$type_product_id){
        $query = "UPDATE tbl_type_product SET type_product_name = '$type_product_name',cartegory_id = '$cartegory_id' WHERE type_product_id ='$type_product_id'";
        $result = $this -> db -> update($query);
        header('Location:type_product_list.php');
        return $result;
    }
    public function delete_type_product($type_product_id){
        $query = "DELETE FROM tbl_type_product WHERE type_product_id ='$type_product_id'";
        $result = $this -> db -> delete($query);
        header('Location:type_product_list.php');
        return $result;
    }
}
?>