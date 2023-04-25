<?php
include "../admin/giaodien/header.php";
include "../admin/giaodien/slider.php";
include "../admin/class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory -> insert_cartegory($cartegory_name);
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-add-danhmuc">
                <h1>Thêm danh mục</h1>
                <form action="" method="POST">
                    <input required name="cartegory_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>