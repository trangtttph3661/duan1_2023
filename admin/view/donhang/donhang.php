<?php
$html_dh = showdonhang($don_hang);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/danhsach.css">
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
        <div class="danh_sach_danh_muc">
            <h1>DANH SÁCH DANH MỤC</h1>
        </div>
        <form action="" method="post">
            <table border="1">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>TÊN KHÁCH HÀNG</th>
                        <th>EMAIL</th>
                        <th>SĐT</th>
                        <th>ĐỊA CHỈ</th>
                        <th>TRẠNG THÁI ĐƠN HÀNG</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?= $html_dh?>
                    <!-- <tr>
                        <td>1</td>
                        <td>Jordan</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                    </tr> -->

                    <!-- <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>1</td>
                        <td>Jordan</td>
                        <td>...</td>
                        <td><a href="sua_danh_muc_admin.html">Sửa</a></td>
                        <td><a href="">Xóa</a></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>1</td>
                        <td>Jordan</td>
                        <td>...</td>
                        <td><a href="sua_danh_muc_admin.html">Sửa</a></td>
                        <td><a href="">Xóa</a></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>1</td>
                        <td>Jordan</td>
                        <td>...</td>
                        <td><a href="sua_danh_muc_admin.html">Sửa</a></td>
                        <td><a href="">Xóa</a></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>1</td>
                        <td>Jordan</td>
                        <td>...</td>
                        <td><a href="sua_danh_muc_admin.html">Sửa</a></td>
                        <td><a href="">Xóa</a></td>
                    </tr> -->

                </tbody>
            </table>
        </form>

    </main>

</body>

</html>