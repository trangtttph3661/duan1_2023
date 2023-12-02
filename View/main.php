<?php
     $html_dssp_new='';
     foreach ($dssp_new as $sp) {
        extract($sp);
        $html_dssp_new.='
                <article>
                    <section class="one">
                        <section class="w13">
                            <a href="index.php?act=chitietsanpham&id='.$id_san_pham.'"><img src="./img/'.$anh.'" alt=""></a>
                            <section class="block">
                                <p>'.$ten_san_pham.'</p>
                                <h3><del>'.$gia_goc.'đ</del>'.$gia.' ₫</h3>
                            </section>
                        </section>
                    </section>
                </article>
          ';
     }
     $html_dssp_sale='';
     foreach ($dssp_sale as $sp) {
        extract($sp);
        $html_dssp_sale.='
        <article>
            <section class="w13">
                <a href="index.php?act=chitietsanpham&id=3"><img src="./img/'.$anh.'" alt=""></a>
                <section class="block">
                    <p>'.$ten_san_pham.'</p>
                    <h3><del>'.$gia_goc.'đ</del>'.$gia.'₫</h3>
                </section>
            </section>
        </article>
        ';
     }

     
     if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
        $html_account='
        <section class="dangky">
                    <a href="index.php?act=dangky">'.$username.'</a>
                </section>

                <section class="dangnhap">
                    <a href="index.php?act=logout">Thoat</a>
                </section>';

    }else{
        $html_account='<section class="dangky">
        <a href="index.php?act=dangky">Đăng ký</a>
    </section>

    <section class="dangnhap">
        <a href="index.php?act=dangnhap">Đăng nhập</a>
    </section>';
    }

    
 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="../font/fontawesome/css/all.min.css">
</head>

<body>
    <!-- header -->
    <div class="container">
        <header>
            <div class="menu-1">
                <p>Cửa hàng TKT Shoes store</p>
                <?= $html_account;
                ?>
                <!-- <section class="dangky">
                    <a href="index.php?act=dangky">Đăng ký</a>
                </section>

                <section class="dangnhap">
                    <a href="index.php?act=dangnhap">Đăng nhập</a>
                </section> -->
            </div>

            <div class="menu-2">
                <section class="logo">
                    <a href="index.php"><img src="./img/logo.png" alt="img"></a>
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
                    <input type="text" placeholder="Tìm kiếm tại đây?" >
                    <button type="submit" >Tìm Kiếm</button>
                </section>
                <section class="giohang">
                    <a href="index.php?act=giohang"><img src="./img/giohang.png" alt=""></a>
                </section>
            </div>
            <div class="banner" onclick="auto()">
                <div class="slide">
                    <img src="./img/banner.png"  alt="img">
                </div>
                <div class="slide">
                    <img src="./img/banner2.png"  alt="img">
                </div>
                <div class="slide">
                    <img src="./img/banner3.png"  alt="img">
                </div>
                <div class="slide">
                    <img src="./img/banner4.png"  alt="img">
                </div>

            </div>
        </header>

        <!-- main -->
        <main>
            <div>
                <h2>Sản phẩm mới</h2>
                
            </div>
            
             <section class="noidung1"> 
             <?=$html_dssp_new;?>
            </section>
            <div class="tong">
                <!-- <section class="noidung1">
                    <article>
                        <section class="one">
                            <section class="w13">
                                <a href=""><img src="./img/img1.png"  alt=""></a></a>
                                <section class="block">
                                    <p>MLB Chunky Liner Monogram B Quai Dán Trắng Xám REP 1:1</p>
                                    <h3><del>900.000₫</del>600.000₫</h3>
                                </section>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img2.png" alt=""></a>
                            <section class="block">
                                <p>Nike Air Force 1 LOVE Trắng Hồng REP 1:1</p>
                                <h3><del>600.000₫ </del>400.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img3.png" alt=""></a>
                            <section class="block">
                                <p>Nike Jordan 1 Low DA Đen Trắng REP 1:1</p>
                                <h3><del>850.000₫</del>550.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img4.png" alt=""></a>
                            <section class="block">
                                <p>MLB Chunky Liner Monogram B Quai Dán Trắng Xám REP 1:1</p>
                                <h3><del>600.000₫</del>500.000₫</h3>
                            </section>
                        </section>
                    </article>

                </section> -->

                <!-- <section class="noidung1">
                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img5.png" alt=""></a>
                            <section class="block">
                                <p>Giày MLB LA DODGERS Kem REP</p>
                                <h3><del>600.000₫</del>320.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img6.png" alt=""></a>
                            <section class="block">
                                <p>Adidas EQ 21 Run Đen Trắng REP 1:1</p>
                                <h3><del>1000.000₫</del>820.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img7.png" alt=""></a>
                            <section class="block">
                                <p>Nike Jordan 1 Low Thổ Cẩm REP</p>
                                <h3><del>500.000₫</del>320.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img8.png" alt=""></a>
                            <section class="block">
                                <p>Giày M2K Trắng Đen REP 1:1</p>
                                <h3><del>700.000₫</del>400.000₫</h3>
                            </section>
                        </section>
                    </article>

                </section> -->

                <!-- <section class="noidung1">
                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img9.png" alt=""></a>
                            <section class="block">
                                <p>Nike Air Force 1 07 Undefeated Trắng Xanh Ngọc REP 1:1</p>
                                <h3><del>800.000₫</del>650.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img10.png" alt=""></a>
                            <section class="block">
                                <p>Adidas Superstar Cappuccino Kem Mũi Sò REP 1:1</p>
                                <h3><del>700.000₫</del>450.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img11.png" alt=""></a>
                            <section class="block">
                                <p>Giày Adidas Forum Low Trắng Đen REP 1:1</p>
                                <h3><del>900.000₫</del>720.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img12.png" alt=""></a>
                            <section class="block">
                                <p>Giày MLB Chunky P Boston Đỏ REP 1:1</p>
                                <h3><del>1000.000₫</del>580.000₫</h3>
                            </section>
                        </section>
                    </article>

                </section> -->

                <div>
                    <h2>Sản phẩm bán chạy</h2>
                </div>
                <section class="noidung1">
                <?=$html_dssp_sale;?>
                </section>

                <!-- <section class="noidung1">
                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img13.png" alt=""></a>
                            <section class="block">
                                <p>MLB Chunky Liner NY Quai Dán Trắng Đen REP 1:1</p>
                                <h3><del>800.000₫</del>650.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img14.png" alt=""></a>
                            <section class="block">
                                <p>Adidas EQ 21 Run Đen Trắng REP 1:1</p>
                                <h3><del>1000.000₫</del>820.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img15.png" alt=""></a>
                            <section class="block">
                                <p>Giày MLB Chunky P Boston Đỏ REP 1:1</p>
                                <h3><del>1000.000₫</del>580.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img16.png" alt=""></a>
                            <section class="block">
                                <p>Jordan 1 High Travis Scott Nâu Đen REP 1:1</p>
                                <h3><del>1000.000₫</del>680.000₫</h3>
                            </section>
                        </section>
                    </article>

                </section>

                <section class="noidung1">
                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img17.png" alt=""></a>
                            <section class="block">
                                <p>Nike Air Force 1 07 Undefeated Trắng Xanh Ngọc REP 1:1</p>
                                <h3><del>800.000₫</del>550.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img3.png" alt=""></a>
                            <section class="block">
                                <p>Nike Jordan 1 High Đen Trắng REP 1:1</p>
                                <h3><del>800.000₫</del>550.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img19.png" alt=""></a>
                            <section class="block">
                                <p>Nike Air Force 1 Bigbang Xám Kem REP 1:1</p>
                                <h3><del>1000.000₫</del>580.000₫</h3>
                            </section>
                        </section>
                    </article>

                    <article>
                        <section class="w13">
                            <a href="#"><img src="./img/img20.png" alt=""></a>
                            <section class="block">
                                <p>Adidas Superstar Cappuccino Kem Mũi Sò REP 1:1</p>
                                <h3><del>700.000₫</del>450.000₫</h3>
                            </section>
                        </section>
                    </article>
                </section>
            </div> -->
        </main>

        
        <!-- footer -->
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
<script src="js/index.js"></script>

</html>