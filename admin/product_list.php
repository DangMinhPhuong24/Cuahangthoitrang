<?php
include "../admin/giaodien/header.php";
include "../admin/giaodien/slider.php";
include "../admin/class/product_class.php";
?>
<?php
$product = new product;
$show_product = $product -> show_product();
?>
<div class="admin-content-right">
            <div class="admin-content-right-list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>ID Danh mục</th>
                        <th>ID Loại sản phẩm</th>
                        <th>ID Màu sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Giá giảm giá</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                        if ($show_product) {$i=0;
                            while($result = $show_product->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td><?php echo $result['type_product_id'] ?></td>
                        <td><?php echo $result['color_id'] ?></td>
                        <td><?php echo $result['product_price'] ?></td>
                        <td><?php echo $result['product_promotion'] ?></td>
                        <td><img src="upload/<?php echo $result['product_img'] ?>" alt="" width="200" height="200"></td>
                        <td><a href="product_list_edit.php?product_id= 
                        <?php echo $result['product_id'] ?>">Sửa</a> | <a href="product_list_delete.php?product_id= 
                        <?php echo $result['product_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>