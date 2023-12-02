<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/danhmucadmin.css">
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
        <div class="title">
            <h1>THÊM MỚI DANH MỤC</h1>
        </div>
        <div class="inp">
            <p>DANH MỤC</p>
            <form action="index.php?act=themdm" method="post">
                <input type="text" name='ten_danh_muc' required placeholder="NHẬP VÀO TÊN DANH MỤC MỚI">
                <div class="btn">
                    <button type="submit" name="themdm">THÊM</button>
                    <a href="index.php?act=danhmuc">DANH SÁCH DANH MỤC</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>