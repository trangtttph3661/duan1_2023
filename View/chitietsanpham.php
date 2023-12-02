<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/chitietsanpham.css">
</head>

<?php

//    $html_sp_lienquan=showsp($dssp_lienquan);
// extract($spchitiet);
// $spct = '<img src="' . IMG_PATH_USER . $anh . '" alt="">';
?>

<body>
    <!-- header -->
    <div class="container">
        <header>
            <div class="menu-1">
                <p>Cửa hàng TKT Shoes store</p>
                <section class="dangky">
                    <a href="index.php?act=dangky">Đăng ký</a>
                </section>

                <section class="dangnhap">
                    <a href="index.php?act=dangnhap">Đăng nhập</a>
                </section>
            </div>

            <div class="menu-2">
                <section class="logo">
                    <img src="./img/logo.png" alt="img">
                </section>
                <section class="menu">
                    <nav>
                        <ul>
                            <li><a href="index.php?act=Nike">Nike</a></li>
                            <li><a href="index.php?act=Nike">Adidas</a></li>
                            <li><a href="index.php?act=Nike">MLB</a></li>
                            <li><a href="index.php?act=Nike">Jordan</a></li>
                            <li><a href="index.php?act=Sale">Sale</a></li>
                        </ul>
                    </nav>
                </section>
                <section class="timkiem">
                    <a href="#"><img src="./img/timkiem.png" alt=""></a>
                </section>
                <section class="giohang">
                    <a href="#"><img src="./img/giohang.png" alt=""></a>
                </section>
            </div>
        </header>

        <!-- main -->
        <main>
            <div class="tong">
                <section class="nd1">
                    
                    <!-- <section class="image">
                        <img src="./img/img1.png" width="300" height="300" alt="img">
                    </section>
                    <section class="image">
                        <a href="img/img1.png"><img src="./img/img1.png" width="72" height="72" alt=""></a>
                        <a href="img/img3.png"><img src="./img/img3.png" width="72" height="72" alt=""></a>
                        <a href="img/img4.png"><img src="./img/img4.png" width="72" height="72" alt=""></a>
                        <a href="img/img5.png"><img src="./img/img5.png" width="72" height="72" alt=""></a>
                    </section> -->
                </section>
                <section class="nd1">
                    
                    <form action="index.php?act=addcart" method="post">
                        <?php 
                        
                        // foreach($result as $value)  {
                        //     var_dump($value)
                            ?>
                            <?php 

                        // }
                        ?>
                        <img width="400px" src="./img/<?php echo $anh ?>" alt="">
                    <h2>
                        <?php echo $ten_san_pham ?></h2>

                    <p><?php echo $gia_goc ?> đ</p>
                        <input  type="hidden" name="name" value="<?= $ten_san_pham ?>">
                        <input  type="hidden" name="img" value="<?= $anh ?>">
                        <input class="gsp" type="hidden" name="price" value="<?= $gia_goc ?>">
                        <input  type="hidden" name="color" value="<?= $mau_sac ?>">
                        <input type="hidden" name="size" value="<?= $size ?>">
                        
                        <section class="number">
                        <p>Số lượng</p>
                        <input type="number">
                        <!-- <button onclick="prevous()">-</button>
                        <button class="slide">
                            <h4>1</h4>
                        </button>
                        <button class="slide">
                            <h4>2</h4>
                        </button>
                        <button class="slide">
                            <h4>3</h4>
                        </button>
                        <button class="slide">
                            <h4>4</h4>
                        </button>
                        <button class="slide">
                            <h4>5</h4>
                        </button>
                        <button class="slide">
                            <h4>6</h4>
                        </button>
                        <button class="slide">
                            <h4>7</h4>
                        </button>
                        <button class="slide">
                            <h4>8</h4>
                        </button>
                        <button class="slide">
                            <h4>9</h4>
                        </button>
                        <button class="slide">
                            <h4>10</h4>
                        </button>
                        <button onclick="next()">+</button> -->
                    </section>
                        <button class="dh" type="submit" name="addcart">Đặt hàng</button>
                    </form>

                    <!-- <section class="pro" >
                        <p>Nike Air Force 1 Lv 8 Xanh Hồng Rep 1:1</p>
                        <h3>300.000đ</h3>
                    </section>
                    <section class="color">
                        <p>Màu Sắc</p>
                        <button class="w1">Trắng</button>
                        <button >Đen</button>
                    </section>
                    <section class="size" >
                        <p>Size</p>
                        <button class="w1">36</button>
                        <button>37</button>
                        <button>38</button>
                        <button>39</button>
                    </section> -->
                    
                </section>
            </div>
            <!-- <section class="muasp" >
                <button class="w2">Thêm vào giỏ hàng</button>
                <button type="submit" name="addcart" >Mua ngay</button>
            </section> -->
        </main>
        <hr>
        <div id="binhluan">
        <iframe src="View/binhluan.php?idsp=<?= $id ?>" width="100%" height="500px" frameborder="0"></iframe>
    </div>
    <hr>
    <h1>SẢN PHẨM LIÊN QUAN</h1>
                <!-- <div class="containerfull mr30">
                    <?= $html_sp_lienquan; ?>
                    
                </div> -->

        <footer>
            <div class="logo-1"><img src="./img/logo.png" alt=""></div>
            <div class="nd1">
                <p>Địa chỉ: 60 Tuyệt Tình Cốc</p>
                <p>Hotel: 0969 470 ***</p>
            </div>
            <div class="nd2">
                <h4>HỖ TRỢ</h4>
                <P>7 cách bảo quản giày thể thao tốt nhât</P>
                <p>Giữ phong độ cho sneaker trắng ra sao</p>
            </div>
            <div class="nd2">
                <h4>THÔNG TIN</h4>
            </div>
        </footer>
    </div>
    
    
</body>
<script src="js/chitietsp.js"></script>

</html>