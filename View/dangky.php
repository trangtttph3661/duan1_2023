<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dangky.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    </style>

    <title>Document</title>
</head>




<body>
    <div class="tong">

        <head>
            <h1>Đăng Ký</h1>
        </head>
        <main>
            <form action="index.php?act=adduser" method="post">
                <div class="inp">
                    <label for="">Username:</label>
                    <input type="text" name="username" placeholder="Mời bạn nhập username " required id="">
                </div>
                <div class="inp">
                    <label for="">Password:</label>
                    <input type="password" name="password" placeholder="Mời bạn nhập mật khẩu" required id="">
                </div>
                <div class="inp">
                    <label for="">Họ và Tên:</label>
                    <input type="text" name="hoten" placeholder="Mời bạn nhập họ và tên " required id="">
                </div>
                <div class="inp">
                    <label for="">Email:</label>
                    <input type="text" name="email" placeholder="Mời bạn nhập email " required id="">
                </div>
                <div class="inp">
                    <label for="">Phone:</label>
                    <input type="text" name="phone" placeholder="Mời bạn nhập số điện thoại" required id="">
                </div>
                <div class="inp">
                    <label for="">Địa chỉ:</label>
                    <input type="text" name="dia_chi" placeholder="Mời bạn nhập địa chỉ" required id="">
                </div>
                
                
                <!-- <div class="inp">
                    <label for="">Nhập lại mật khẩu:</label>
                    <input type="password" name="repassword" placeholder="Mời bạn nhập lại mật khẩu" required id="">
                </div> -->
                <button type="submit" name="dangky" value="dangky" >Đăng kí ngay
                
                </button>
               
            </form>
            <!-- <a href="index.php?act=dangnhap">Đăng nhập</a> -->
        </main>
    </div>
</body>
</html>