<?php
include "../admin/giaodien/header.php";
include "../admin/giaodien/slider.php";
include "../admin/class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory -> show_cartegory();
?>
<div class="admin-content-right">
            <div class="admin-content-right-list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                        if ($show_cartegory) {$i=0;
                            while($result = $show_cartegory->fetch_assoc()){$i++;
                        
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td><?php echo $result['cartegory_name'] ?></td>
                        <td><a href="cartegory_list_edit.php?cartegory_id= <?php echo $result['cartegory_id'] ?>">Sửa</a> | <a href="cartegory_list_delete.php?cartegory_id= <?php echo $result['cartegory_id'] ?>">Xóa</a></td>
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