<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .w12 {
            display: flex;
        }

        .w13 {
            display: flex;
        }

        .nd2 {
            border: 1px solid black;
        }

        .aa {
            display: flex;
        }

        .nd {
            margin: 0 auto;
            text-align: center;
            max-width: 600px;
        }

        .w13 {
            margin-left: 50px;
            margin-top: 20px;
            text-align: left;
            width: 100%;
            display: flex;
        }

        .w14 {
            width: 40%;
        }
    </style>
</head>

<body>
    <div class="tong">
        <H1>THANH TOÁN</H1>
        <div class="w12">
            <div class="nd">
                <h3>THÔNG TIN LIÊN HỆ</h3>
                <section class="w13">
                    <label for="" class="w14">Họ Tên: </label>
                    <input type="text" name="text" id="ten">
                    <p class="thongbao"></p>
                </section>
                <section class="w13">
                    <label for="" class="w14">Số điện thoại: </label>
                    <input type="text" name="text" id="sdt">
                    <p class="thongbao"></p>
                </section>
                <section class="w13">
                    <label for="" class="w14">Tỉnh/Thành Phố: </label>
                    <input type="text" name="text" id="tinh">
                    <p class="thongbao"></p>
                </section>
                <section class="w13">
                    <label for="" class="w14">Quận/Huyện: </label>
                    <input type="text" name="text" id="huyen">
                    <p class="thongbao"></p>
                </section>
                <section class="w13">
                    <label for="" class="w14">Xã/Phường: </label>
                    <input type="text" name="text" id="xa">
                    <p class="thongbao"></p>
                </section>
                <section class="w13">
                    <label for="" class="w14">Địa chỉ: </label>
                    <input type="text" name="text" id="diachi">
                </section>
            </div>
            <!-- end -->

            <div class="nd">
                <h3>ĐƠN HÀNG CỦA BẠN</h3>
                <div class="nd2">
                    <section class="ww">
                        <section class="anh">
                            <div class="aa">
                                <img src="./img/img1.png" width="100" height="100" alt="img">
                                <p>Nike Air Force 1 Lv 8 Xanh Hồng Rep 1:1</p>
                            </div>
                            <section class="we">
                                <h4>300.000đ</h4>
                                <p class="mau">Màu sắc: <button>Trắng</button></p>
                                <p class="size">Size: <button>37</button></p>
                            </section>
                        </section>

                    </section>

                    <div class="ww">
                        <label for="">Tạm tính: </label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="ww">
                        <label for="">Phí ship: </label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="ww">
                        <label for="">Tổng cộng: </label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="ww">
                        <label for="">Phương thức thanh toán: </label>
                        <select name="" id="thanhtoan">
                            <option value="0">--Chọn--</option>
                            <option value="1">Thanh toán khi nhận hàng</option>
                            <option value="2">Thẻ tín dụng/Ghi nợ</option>

                        </select>
                        <p class="thongbao"></p>
                    </div>

                    <button type="submit">Đặt hàng</button>
                </div>

            </div>
        </div>


    </div>
</body>

</html>