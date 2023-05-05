<?php
include "header.php";
?>
<section class="payment">
    <div class="payment-container">
        <div class="payment-top row">
            <div class="payment-top-cart payment-top-item">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="payment-top-adress payment-top-item">
                <i class="fas fa-map-marker-alt "></i>
            </div>
            <div class="payment-top-payment payment-top-item">
                <i class="fas fa-money-check-alt "></i>
            </div>
        </div>
    </div>
    <div class="payment-container">
        <div class="payment-content row">
            <div class="payment-content-left">
                <div class="payment-content-left-method">
                    <p style="font-weight: bold;">Phương thức giao hàng</p>
                    <div class="payment-content-left-method-item">
                        <input checked type="radio">
                        <label for="">Giao hàng chuyển phát nhanh</label>
                    </div>
                </div>
                <div class="payment-content-left-method-bank">
                    <p style="font-weight: bold;">Phương thức thanh toán</p>
                    <p style="font-size: 12px; color: gray;">Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                    <div class="payment-content-left-method-bank-item">
                        <input checked name="loaithe" type="radio">
                        <label for="">Thanh toán bằng thẻ tín dụng(Onepay)</label>
                    </div>
                    <div class="payment-content-left-method-bank-item-img">
                        <img src="image/visa.jpg" alt="" width="120px" height="70px">
                    </div>
                    <div class="payment-content-left-method-bank-item">
                        <input name="loaithe" type="radio">
                        <label for="">Thanh toán bằng thẻ ATM(Onepay)</label>
                    </div>
                    <div class="payment-content-left-method-bank-item-img">
                        <img src="image/bank.jpg" alt="" width="300px" height="150px">
                    </div>
                    <div class="payment-content-left-method-bank-item">
                        <input name="loaithe" type="radio">
                        <label for="">Thanh toán Momo</label>
                    </div>
                    <div class="payment-content-left-method-bank-item-img">
                        <img src="image/momo.jpg" alt="" width="120px" height="100px">
                    </div>
                    <div class="payment-content-left-method-bank-item">
                        <input name="loaithe" type="radio">
                        <label for="">Thanh toán khi giao hàng</label>
                    </div>
                </div>
                <div class="payment-content-left-back">
                    <a href="delivery.php"><p>&#171; Quay lại</p></a> 
                </div>
            </div>
            <div class="payment-content-right">
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã giảm giá / Quà tặng">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã cộng tác viên">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-mnv">
                    <select name="" id="">
                        <option value="">Chọn mã nhân viên thân thiết</option>
                        <option value="">A123</option>
                        <option value="">P291</option>
                        <option value="">P245</option>
                        <option value="">B456</option>
                    </select>
                </div>
                <div class="payment-content-right-continue row">
                    <a href=""><button>TIẾP TỤC THANH TOÁN</button></a> 
                </div>  
            </div>
        </div>
        
    </div>
</section>
</body>
<?php
include "footer.php";
?>