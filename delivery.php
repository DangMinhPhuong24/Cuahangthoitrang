<?php
include "header.php";
?>
<section class="delivery">
    <div class="delivery-container">
        <div class="delivery-top row">
            <div class="delivery-top-cart delivery-top-item">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="delivery-top-adress delivery-top-item">
                <i class="fas fa-map-marker-alt "></i>
            </div>
            <div class="delivery-top-payment delivery-top-item">
                <i class="fas fa-money-check-alt "></i>
            </div>
        </div>
    </div>
    <div class="delivery-container">
        <div class="delivery-content row">
            <div class="delivery-content-left">

                <p style="font-weight: bold;">Vui lòng chọn địa chỉ giao hàng</p>
                <div class="delivery-content-left-dangnhap row">
                    <i class="fas fa-sign-in-alt"></i>
                    <a href="login.php"><p>Đăng nhập (Nếu bạn đã có tài khoản)</p></a>
                </div>
                <div class="delivery-content-left-khachle row">
                    <input checked name="loaikhach" type="radio">
                    <p><span>Khách lẻ</span> (Nếu bạn không muốn lưu thông tin)</p>
                </div>
                <div class="delivery-content-left-dangky row">
                    <input name="loaikhach" type="radio">
                    <a href="register.php"><p><span>Đăng ký</span> (Tạo mới tài khoản với thông tin bên dưới)</p></a>
                </div>
    
                <div class="delivery-content-left-input-top row">
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Họ tên <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Điện thoại <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                </div>
                <div class="delivery-content-left-input-top row">
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Tỉnh/Thành phố <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                </div>
                <div class="delivery-content-left-input-bottom">
                    <label for="">Địa chỉ <span style="color: red;">*</span></label>
                    <input type="text">
                </div>
                <div class="delivery-content-left-back">
                    <a href="cart.php"><p>&#171; Quay lại giỏ hàng</p></a> 
                </div>
            </div>
            <div class="delivery-content-right">
                <table>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                        $total = 0;
                        if ($show_product) {$i=0;
                            while($result = $show_product->fetch_assoc()){$i++;
                                $total =  $total + $result['product_price'];
                                $thue = $total/10;
                                $totalproduct =  $total - $thue;
                    ?>
                    <tr>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['product_promotion'] ?></td>
                        <td><?php echo $result['product_amount'] ?></td>
                        <td><?php echo $result['product_price'] ?><sup>đ</sup></td>
                    </tr>
                    
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng</td>
                        <td style="font-weight: bold;" ><p><?php echo $total ?><sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Thuế VAT</td>
                        <td style="font-weight: bold;" ><p><?php echo $thue ?><sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                        <td style="font-weight: bold;" ><p><?php echo $totalproduct ?><sup>đ</sup></p></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </table>
                <div class="delivery-content-right-continue row">
                    <a href="payment.php"><button>THANH TOÁN VÀ GIAO HÀNG</button></a> 
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<?php
include "footer.php";
?>
