<?php
include "header.php";
?>
<section class="cart">
    <div class="cart-container">
        <div class="cart-top row">
            <div class="cart-top-cart cart-top-item">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="cart-top-adress cart-top-item">
                <i class="fas fa-map-marker-alt "></i>
            </div>
            <div class="cart-top-payment cart-top-item">
                <i class="fas fa-money-check-alt "></i>
            </div>
        </div>
    </div>
    <div class="cart-container">
        <div class="cart-content row">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu</th>
                        <th>Size</th>
                        <th>SL</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <?php
                        if ($show_product) {$i=0;
                            while($result = $show_product->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><img src="<?php echo $result['product_image'] ?>" alt="" width="200" height="300"></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['product_color'] ?></td>
                        <td><?php echo $result['product_size'] ?></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><?php echo $result['product_price'] ?><sup>đ</sup></td>                                   
                        <td><button>X</button></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </table>
            </div>
            <div class="cart-content-right">
                <table>
                    <?php
                        $total = 0;
                        if ($show_product) {$i=0;
                            while($result = $show_product->fetch_assoc()){$i++;
                                $total =  $total + $result['product_price'];
                    ?>
                    <tr>
                        <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                    </tr>
                    <tr>
                        <td>TỔNG SẢN PHẨM</td>
                        <td><?php echo $i ?></td>
                    </tr>
                    <tr>
                        <td>TỔNG TIỀN HÀNG</td>
                        <td><?php echo $total ?></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </table>
                <div class="cart-content-right-text">
                    <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 đ</p>
                    <p style="color: red; font-weight: bold;">Mua thêm <span style="font-size: 18px; color: red; font-weight: bold;">131.000<sup>đ</sup></span>  để được miễn phí SHIP</p>
                </div>
                <div class="cart-content-right-button">
                    <a href="product.php"><button>TIẾP TỤC MUA SẮM</button></a>
                    <a href="delivery.php"><button>THANH TOÁN</button></a> 
                </div>
                <div class="cart-content-right-dangnhap">
                    <p>Tài khoản IVY</p>
                    <p>Hãy <a href="">ĐĂNG NHẬP</a> tài khoản của bạn để được tích điểm thành viên</p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<?php
include "footer.php";
?>
