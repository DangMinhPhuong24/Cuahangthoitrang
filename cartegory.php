<?php
include "header.php";
?>
<section class="cartegory">
    <div class="container">
        <div class="cartegory-top row">
            <a href="index.php">Trang chủ</a> <span>&#10230;</span>
            <a href="cartegory.php">Nữ</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="cartegory-left">
                <ul>
                    <li class="cartegory-left-li"><a href="#">Hàng mới về</a></li>
                    <li class="cartegory-left-li "><a href="#">Collection</a></li>
                    <li class="cartegory-left-li"><a href="">Áo</a>
                        <ul>
                            <li><a href="">Áo sơ mi</a></li>
                            <li><a href="">Áo thun</a></li>
                            <li><a href="">Áo khoác</a></li>
                            <li><a href="">Áo len</a></li>
                        </ul>
                    </li>
                    <li class="cartegory-left-li"><a href="">Quần</a>
                        <ul>
                            <li><a href="">Quần jean</a></li>
                            <li><a href="">Quần lửng</a></li>
                            <li><a href="">Quần dài</a></li>
                        </ul>
                    </li>
                </ul>
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
                    <div class="row">
                        <div class="cartegory-right-content-item">
                            <a href="product.php"><img src="image/sanpham1.jpg" alt="" width="200" height="450"></a>
                            <h1>Đầm Lụa Xếp Ly Xòe</h1>
                            <p>790.000<sup>đ</sup></p>
                        </div>
                        <div class="cartegory-right-content-item">
                            <a href=""><img src="image/sanpham2.jpg" alt="" width="200" height="450"></a>
                            <h1>Đầm Lụa Xếp Ly Xòe</h1>
                            <p>790.000<sup>đ</sup></p>
                        </div>
                        <div class="cartegory-right-content-item">
                            <a href=""><img src="image/sanpham3.jpg" alt="" width="200" height="450"></a>
                            <h1>Đầm Lụa Xếp Ly Xòe</h1>
                            <p>790.000<sup>đ</sup></p>
                        </div>
                        <div class="cartegory-right-content-item">
                            <a href=""><img src="image/sanpham4.jpg" alt="" width="200" height="450"></a>
                            <h1>Đầm Lụa Xếp Ly Xòe</h1>
                            <p>790.000<sup>đ</sup></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="cartegory-right-content-item">
                            <a href=""><img src="image/sanpham5.jpg" alt="" width="200" height="450"></a>
                            <h1>Đầm Lụa Xếp Ly Xòe</h1>
                            <p>790.000<sup>đ</sup></p>
                        </div>
                        <div class="cartegory-right-content-item">
                            <a href=""><img src="image/sanpham6.jpg" alt="" width="200" height="450"></a>
                            <h1>Đầm Lụa Xếp Ly Xòe</h1>
                            <p>790.000<sup>đ</sup></p>
                        </div>
                        <div class="cartegory-right-content-item">
                            <a href=""><img src="image/sanpham7.jpg" alt="" width="200" height="450"></a>
                            <h1>Đầm Lụa Xếp Ly Xòe</h1>
                            <p>790.000<sup>đ</sup></p>
                        </div>
                        <div class="cartegory-right-content-item">
                            <a href=""><img src="image/sanpham8.jpg" alt="" width="200" height="450"></a>
                            <h1>Đầm Lụa Xếp Ly Xòe</h1>
                            <p>790.000<sup>đ</sup></p>
                        </div>
                    </div>
                </div>
                <div class="cartegory-right-bot row">
                    <div class="cartegory-right-bot-item">
                        <p>Hiện thị 2 | 4 trang</p>
                    </div>
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