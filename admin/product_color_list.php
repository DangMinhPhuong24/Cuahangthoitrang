<?php
include "../admin/giaodien/header.php";
include "../admin/giaodien/slider.php";
include "../admin/class/product_class.php";
?>
<?php
$product = new product;
$show_product_color = $product -> show_product_color();
?>
<div class="admin-content-right">
            <div class="admin-content-right-list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tên màu</th>
                        <th>Màu sắc</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                        if ($show_product_color) {$i=0;
                            while($result = $show_product_color->fetch_assoc()){$i++;
                        
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_color_id'] ?></td>
                        <td><?php echo $result['product_color_name'] ?></td>
                        <td> <img src="upload_product_color/<?php echo $result['product_color_image_name'] ?>" alt=""> </td>
                        <td><a href="product_color_list_edit.php?product_color_id= <?php echo $result['product_color_id'] ?>">Sửa</a> | <a href="product_color_list_delete.php?product_color_id= <?php echo $result['product_color_id'] ?>">Xóa</a></td>
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