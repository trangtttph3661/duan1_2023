<?php
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link='index.php?act=nike&id_danh_muc'.$id_danh_muc;
       $html_dm.='<p><a href="'. $link.'"> '.$ten_danh_muc.'</a></p>';
    }
    $html_dssp='';
    foreach ($dssp as $sp) {
        extract($sp);
        $html_dssp.='
        <div class="item-img">
                            <a href="#"><img src="./img/'.$anh.'" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>'.$ten_san_pham.'</b></p>
                                <p style="color: red;"><b>'.$gia.' đ</b></p>
                            </section>
        </div>
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
    <title>Nike</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="on">
                <div class="a">
                    <p>Cửa hàng TKT Shoes Store </p>
                </div>
                <div class="b">
                    <?= $html_account ?>
                </div>
            </div>
            <div class="under">
                <div class="logo">
                    <a href="index.php"><img src="./img/logo.png" width="100px" height="70px"></a>
                </div>
                <div class="menu">
                    <ul style="list-style-type: none;">
                        <li><a href="index.php?act=nike">Nike</a></li>
                        <li><a href="index.php?act=nike">Adidas</a></li>
                        <li><a href="index.php?act=nike">MLB</a></li>
                        <li><a href="index.php?act=nike">Jordan</a></li>
                        <li><a href="index.php?act=Sale">Sale</a></li>
                    </ul>
                </div>
                <div class="icon">
                    <a href="#"><img src="./img/search.png" alt="" srcset=""></a>
                    <a href="#"><img src="./img/giohang.png" alt="" srcset=""></a>
                </div>
            </div>
        </div>
        <hr>
        <!-- end header -->
        <div class="main">
            <div class="content">
                <div class="item-1">
                    <h3>Danh mục sản phẩm</h3>
                    <?=$html_dm;?>
                    <!-- <p><a href="nike.html"> Nike</a></p>
                    <p><a href="adidas.html"> Adidas</a></p>
                    <p><a href="mlb.html"> MLB</a></p>
                    <p><a href="jordan.html"> Jordan</a></p>
                    <p><a href="#"> Sale</a></p> -->
                </div>
                <div class="item-2">
                    <div class="noidung">
                    <?=$html_dssp;?>
                        <!-- <div class="item-img">
                            <a href="#"><img src="../img/11.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                        <div class="item-img">
                            <a href="#"><img src="../img/12.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                        <div class="item-img">
                            <a href="#"> <img src="../img/13.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                    </div>

                    <div class="noidung">
                        <div class="item-img">
                            <a href="#"><img src="../img/14.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                        <div class="item-img">
                            <a href="#"> <img src="../img/11.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                        <div class="item-img">
                            <a href="#"> <img src="../img/12.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                    </div>

                    <div class="noidung">
                        <div class="item-img">
                            <a href="#"> <img src="../img/12.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                        <div class="item-img">
                            <a href="#"> <img src="../img/14.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                        <div class="item-img">
                            <a href="#"> <img src="../img/13.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                    </div>

                    <div class="noidung">
                        <div class="item-img">
                            <a href="#"> <img src="../img/11.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                        <div class="item-img">
                            <a href="#"> <img src="../img/14.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                        <div class="item-img">
                            <a href="#"> <img src="../img/13.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                    </div>

                    <div class="noidung">
                        <div class="item-img">
                            <a href="#"> <img src="../img/11.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                        <div class="item-img">
                            <a href="#"> <img src="../img/14.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div>
                        <div class="item-img">
                            <a href="#"> <img src="../img/12.png" alt="" srcset="" width="251px" height="208px"></a>
                            <section class="block">
                                <p><b>Giày_Nike Blazer Mid 77 low Fitness <br>Red nam nữ</b></p>
                                <p style="color: red;"><b>360.000 đ</b></p>
                            </section>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
        <!-- end main -->

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
        <!-- end footer -->
    </div>
</body>

</html>