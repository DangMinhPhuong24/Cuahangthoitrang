<?php
include "../admin/giaodien/header.php";
include "../admin/giaodien/slider.php";
include "../admin/class/type_product_class.php";
?>
<?php
$type_product = new type_product;
$show_type_product = $type_product -> show_type_product();
?>
<div class="admin-content-right">
            <div class="admin-content-right-list">
                <h1>Danh sách loại sản phẩm</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Cartegory_ID</th>
                        <th>Cartegory_name</th>
                        <th>Type_product_ID</th>
                        <th>Loại sản phẩm</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                        if ($show_type_product) {$i=0;
                            while($result = $show_type_product->fetch_assoc()){$i++;
                        
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td><?php echo $result['cartegory_name'] ?></td>
                        <td><?php echo $result['type_product_id'] ?></td>
                        <td><?php echo $result['type_product_name'] ?></td>

                        <td><a href="type_product_list_edit.php?type_product_id= 
                        <?php echo $result['type_product_id'] ?>">Sửa</a> | <a href="type_product_list_delete.php?type_product_id= 
                        <?php echo $result['type_product_id'] ?>">Xóa</a></td>
                        
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