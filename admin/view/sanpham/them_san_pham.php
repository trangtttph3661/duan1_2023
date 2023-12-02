<?php
$html_dm = showdm_admin1($danhmuc);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/them,sua.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="admin">
            <h1>Admin</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php?act=trangchu">Trang Chủ</a></li>
                <li><a href="index.php?act=danhmuc">Danh mục</a></li>
                <li><a href="index.php?act=sanpham">Sản phẩm</a></li>
                <li><a href="index.php?act=khachhang">Khách hàng</a></li>
                <li><a href="index.php?act=binhluan">Bình luận</a></li>
                <li><a href="index.php?act=donhang">Đơn hàng</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="them_moi_san_pham">
            <h1>THÊM MỚI SẢN PHẨM</h1>
        </div>

        <form action="index.php?act=spadd" method="post" enctype="multipart/form-data">
            <div class="danh_muc">
                <p>DANH MỤC</p>
                <!-- <input type="text" placeholder="CHỌN DANH MỤC" name="" id=""> -->
                <select name="id_danhmuc" required id="">
                    <option selected>chọn danh mục</option>
                    <?= $html_dm; ?>
                </select>
            </div>
            <div class="san_pham">
                <p>SẢN PHẨM</p>
                <input type="text" required name='ten_san_pham' placeholder="NHẬP TÊN SẢN PHẨM"  id="">
                <input type="text" required name='gia' placeholder="NHẬP GIÁ SẢN PHẨM"  id="">
                <input type="text" required name='size' placeholder="NHẬP SIZE SẢN PHẨM"  id="">
                <input type="text" required name='mau_sac' placeholder="NHẬP MÀU SẢN PHẨM"  id="">
            </div>
            <div class="san_pham1">
                <div class="anh_san_pham">
                    <p>ẢNH SẢN PHẨM</p>
                    <input required name="anh" type="file">
                </div>

                <div class="mo_ta_san_pham">
                    <p>MÔ TẢ SẢN PHẢM</p>
                    <input type="text" required name="mo_ta" id="">
                </div>
            </div>

            <button type="submit" name="spadd">THÊM</button>
            <div class="danh_sach_san_pham">
                <a href="index.php?act=sanpham">DANH SÁCH SẢN PHẨM</a>
            </div>
        </form>

    </main>
</body>

</html>