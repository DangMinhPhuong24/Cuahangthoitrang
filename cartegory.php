<?php
include "header.php";
?>
<section class="cartegory">
    <div class="container">
        <div class="cartegory-top row">
            <a href="index.php">Trang chủ</a> <span>&#10230;</span>
            <a href="cartegory.php"><?php echo $result['cartegory_name'] ?></a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="cartegory-left">
                <?php
                    if ($show_type_product) {$i=0;
                        while($result = $show_type_product->fetch_assoc()){$i++;
                        
                ?>
                <ul>
                    <li class="cartegory-left-li"><a href="type_product_name.php?type_product_id= <?php echo $result['type_product_id'] ?>"><?php echo $result['type_product_name'] ?></a>
                        <?php
                            if ($show_product) {$i=0;
                                while($result = $show_product->fetch_assoc()){$i++;
                            
                        ?>
                        <ul>
                            <li><a href="product_name.php?product_id= <?php echo $result['product_id'] ?>"><?php echo $result['product_name'] ?></a></li>
                        </ul>
                        <?php
                                }
                            }
                        ?>
                    </li>
                </ul>
                <?php
                        }
                    }
                ?>
            </div>
            <div class="cartegory-right">
                <div class="cartegory-right-top row">
                    <div class="cartegory-right-top-item">
                        <p>Hàng mới về</p>
                    </div>
                    <div class="cartegory-right-top-item">
                        <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
                    </div>
                    <div class="cartegory-right-top-item">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>
                            <option value="">Giá cao đến thấp</option>
                            <option value="">Giá thấp đến cao</option>
                        </select>
                    </div>
                    
                </div>
                <div class="cartegory-right-content">
                    <?php
                        if ($show_product) {$i=0;
                            while($result = $show_product->fetch_assoc()){$i++;
                            
                    ?>
                    <div class="row">
                        <div class="cartegory-right-content-item">
                            <a href="product.php"><img src="<?php echo $result['product_image'] ?>" alt="" width="200" height="450"></a>
                            <h1><?php echo $result['product_name'] ?></h1>
                            <p><?php echo $result['product_price'] ?><sup>đ</sup></p>
                        </div>
                       
                    </div>
                    <?php
                            }
                        }
                    ?>
                    
                </div>
                <div class="cartegory-right-bot row">
                    <div class="cartegory-right-bot-item">
                        <p>&#171; 1 2 3 4 5 &#187; Trang cuối</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<?php
include "footer.php";
?>
