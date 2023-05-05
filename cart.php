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
                    <tr>
                        <td><img src="image/sanpham1.jpg" alt="" width="200" height="300"></td>
                        <td><p>Quần sooc bò đen</p></td>
                        <td><p class="cart-color" ></p></td>
                        <td><p>L</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>790.000<sup>đ</sup></p></td>                                    
                        <td><span>X</span></td>
                    </tr>
                    <tr>
                        <td><img src="image/sanpham2.jpg" alt="" width="200" height="300"></td>
                        <td><p>Quần sooc bò đen</p></td>
                        <td><p class="cart-color" ></p></td>
                        <td><p>L</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>790.000<sup>đ</sup></p></td>                                    
                        <td><span>X</span></td>
                    </tr>
                </table>
            </div>
            <div class="cart-content-right">
                <table>
                    <tr>
                        <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                    </tr>
                    <tr>
                        <td>TỔNG SẢN PHẨM</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TỔNG TIỀN HÀNG</td>
                        <td><p>790.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>TẠM TÍNH</td>
                        <td><p style="font-weight: bold;">790.000<sup>đ</sup></p></td>
                    </tr>
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