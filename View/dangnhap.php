<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/dangnhap.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    </style>
</head>

<body>
    <div class="tong">

        <header>
            <h1>Đăng nhập</h1>
            <a href="index.php?act=dangky">Tạo tài khoản ngay</a>
            <?php
                if(isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap']!="")){
                    echo $_SESSION['tb_dangnhap'];
                    unset($_SESSION['tb_dangnhap']);
                 } 
            ?>
        </header>
        <main>
            <form action="index.php?act=login" method="post">
                <div class="input">
                    <label for="">Username:</label>
                    <div class="input1"><input type="text" placeholder="Nhập Username" name="username" required id=""></div>
                </div>
                <div class="input">
                    <label for="">Password:</label>
                    <div class="input2"><input type="password" placeholder="Nhập Password" name="password" required id=""><br></div>

                </div>
                <a href="./quenmatkhau.php">bạn quên mật khẩu?</a>
                <br>
                <button type="submit" name="dangnhap" value="dangnhap" >Đăng nhập</button>
            </form>
        </main>
    </div>
</body>

</html>