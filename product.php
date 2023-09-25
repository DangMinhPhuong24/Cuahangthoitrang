<?php
include "header.php";
?>
<?php
    if ($show_product) {$i=0;
        while($result = $show_product->fetch_assoc()){$i++;
                            
?>
<section class="product">
    <div class="container">
        <div class="product-top row">
            <a href="index.php">Trang chủ</a> <span>&#10230;</span>
            <a href="cartegory.php"><?php echo $result['cartegory_name'] ?></a> <span>&#10230;</span>
            <a href="product.php?product_id=<?php echo $result['product_id'] ?>"><?php echo $result['product_name'] ?></a>
        </div>
        <div class="product-content row">
            <div class="product-content-left row">
                <div class="product-content-left-big-img">
                    <img src="<?php echo $result['product_image'] ?>">
                </div>
                <div class="product-content-left-small-img">
                    <img src="<?php echo $result['product_image-left'] ?>">
                </div>
            </div>
            <div class="product-content-right">
                <div class="product-content-right-name">
                    <h1><?php echo $result['product_name'] ?></h1>
                </div>
                <div class="product-content-right-price">
                    <p><?php echo $result['product_price'] ?><sup>đ</sup></p>
                </div>
                <div class="product-content-right-color">
                    <p><span style="font-weight: bold;">Màu sắc</span> : <?php echo $result['product_color'] ?> <span style="color: red;">*</span></p> 
                </div>
                <div class="product-content-right-pick-color row">
                    <div class="pick-color" style="background-color: red;"></div>
                    <div class="pick-color" style="background-color: green;"></div>
                    <div class="pick-color" style="background-color: blue;"></div>
                </div>
                <div class="product-content-right-size">
                    <p style="font-weight: bold;">Size</p>
                    <div class="product-size">
                        <p class="size active2"><?php echo $result['product_size'] ?></p>
                    </div>
                </div>
                <div class="quantity row">
                    <p style="font-weight: bold;">Số lượng:</p>
                    <input type="number" min="1" value="1">
                </div>
                <p style="color: red;">Vui lòng chọn size</p>
                <div class="product-content-right-button">
                    <button><a href="cart.php"><i class="fas fa-shopping-basket"></i>MUA HÀNG</a></button>
                </div>
                <div class="product-content-right-icon row">
                    <div class="product-content-right-icon-item row">
                        <i class="fa fa-phone-alt"></i> <p>Hotline</p>
                    </div>
                    <div class="product-content-right-icon-item row">
                        <i class="far fa-comments"></i> <p>Chat</p>
                    </div>
                    <div class="product-content-right-icon-item row">
                        <i class="far fa-envelope"></i> <p>Mail</p>
                    </div>
                </div>
                <div class="product-content-right-bottom">
                    <div class="product-content-right-bottom-top">
                        &#8744;
                    </div>
                    <div class="product-content-right-bottom-content-big">
                        <div class="product-content-right-bottom-content-title row">
                            <div class="product-content-right-bottom-content-title-item chitiet">
                                <p>Chi tiết</p>
                            </div>
                            <div class="product-content-right-bottom-content-title-item baoquan">
                                <p>Bảo quản</p>
                            </div>
                            <div class="product-content-right-bottom-content-title-item">
                                <p>Tham khảo size</p>
                            </div>
                        </div>
                        <div class="product-content-right-bottom-content">
                            <div class="product-content-right-bottom-content-chitiet">
                                Nằm trong BST áo dài Châu Gia, Thanh Liễu mang đến một vẻ đẹp truyền thống rất đỗi kiêu sa. Kế thừa nét đẹp của tà áo dài xưa qua các chi tiết như cổ áo cao, tà dài dáng suông, kết hợp cùng họa tiết thêu hoa thủ công tỉ mỉ đã mang đến vẻ đẹp thanh lịch, kiều diễm nhưng đúng với tên gọi - Thanh Liễu. <br> <br>

                                Bức tranh thêu hoa mẫu đơn, đây là loài hoa tượng trưng cho thanh cao và sắc đẹp, sung túc và an khang. Chi tiết 'khánh' ở eo duyên dáng mang tinh hoa xưa được các nhà thiết kế gìn giữ một cách trân quý, cách tân thêm logo thương hiệu đã khẳng định nét đặc trưng đậm tuyên ngôn thời trang riêng. <br> <br>                       
                            </div>
                            <div class="product-content-right-bottom-content-baoquan">
                                Chi tiết bảo quản sản phẩm : <br> <br>

* Các sản phẩm thuộc dòng cao cấp (Senora) và áo khoác (dạ, tweed, lông, phao) chỉ giặt khô, tuyệt đối không giặt ướt. <br> <br>

* Vải dệt kim: sau khi giặt sản phẩm phải được phơi ngang tránh bai dãn. <br> <br>

* Vải voan, lụa, chiffon nên giặt bằng tay. <br> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-related">
        <div class="product-related-title">
            <p style="font-weight: bold;">SẢN PHẨM LIÊN QUAN</p>
        </div>
        <div class="product-related-content row">
            <div class="product-related-content-item">
                <img src="<?php echo $result['product_image_propose'] ?>" alt="" width="200" height="500">
                <h1><?php echo $result['product_name_propose'] ?></h1>
                <p><?php echo $result['product_price_propose'] ?><sup>đ</sup></p>
            </div>
        </div>
    </div>
</section>
<?php
        }
    }
?>
</body>
<?php
include "footer.php";
?>
