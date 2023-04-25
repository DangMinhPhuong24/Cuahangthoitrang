<?php
include "class/cartegory_class.php";
include "title.php";
?>
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory -> show_cartegory();
?>
<!-- -------------------------------------HEADER-------------------------------- -->
<section class="header-index row">
    <div class="logo">
        <a href="index.php"><img src="image/logo.png"></a>
    </div>
    <?php
        if ($show_cartegory) {$i=0;
            while($result = $show_cartegory->fetch_assoc()){$i++;
        
    ?>
    <div class="menu row">
        <li><a href="cartegory.html"><?php echo $result['cartegory_name'] ?></a>
            <ul class="menu-item">
                <li><a href="">Hàng mới về</a></li>
                <li><a href="">Collection</a></li>
                <li><a href="">Áo</a>
                    <ul>
                        <li><a href="">Áo sơ mi</a></li>
                        <li><a href="">Áo thun</a></li>
                        <li><a href="">Áo khoác</a></li>
                        <li><a href="">Áo len</a></li>
                    </ul>
                </li>
                <li><a href="">Quần</a>
                    <ul>
                        <li><a href="">Quần jean</a></li>
                        <li><a href="">Quần lửng</a></li>
                        <li><a href="">Quần dài</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </div>
    <?php
            }
        }
    ?>
    <div class="menu-icons row">
        <li><input type="text" placeholder="Tìm kiếm"> <a class="fas fa-search other-search" href=""></a></li> <span> | </span>
        <li><a class="fa fa-user" href=""></a></li> <span> | </span>
        <li><a class="fa fa-shopping-cart" href=""></a></li> 
    </div>
</section>

<!-- --------------------------------------Ảnh---------------------------------------- -->

<section class="slider"> 
    <div class="aspect-ratio-169">
        <a href=""><img src="image/Slider1.jpg"></a>
        <a href=""><img src="image/Slider2.jpg"></a>
        <a href=""><img src="image/Slider3.jpg"></a>
        <a href=""><img src="image/Slider4.jpg"></a>
        <a href=""><img src="image/Slider5.jpg"></a>
    </div>
    <div class="dot-container row">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</section>
</body>
<?php
include "footer.php";
?>
<!-- -----------------------------------JS------------------------------------------- -->
<script>
    // chuyển dấu chấm 
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector(".aspect-ratio-169")
    const dotItem = document.querySelectorAll(".dot")
    let imgNumber = imgPosition.length
    let index = 0
    //console.log(imgPosition)
    imgPosition.forEach(function(image,index){
        image.style.left = index*100 + "%"
        dotItem[index].addEventListener("click",function(){
            slider(index)
        })
    })
    function imgSlide(){
        index++;
        console.log(index)
        if (index>=imgNumber){index=0}
        slider(index)
    }
    function slider (index) {
        imgContainer.style.left = "-" +index*100+ "%"
        const dotActive = document.querySelector(".active")
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide,5000)
</script>
</html>