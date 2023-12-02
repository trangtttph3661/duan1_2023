<?php
    require_once 'pdo.php';

    //dang ky
    function user_insert($username, $password, $hoten, $email, $phone, $diachi){
        $sql = "INSERT INTO user(username, password, ho_ten, email, phone, dia_chi) VALUES (?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $username, $password, $hoten, $email, $phone, $diachi);
    }
    
    function dangnhap($username, $password) {
        $sql = "SELECT * FROM user WHERE username='$username' and password='$password' ";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            $_SESSION['username'] = $username;
        } else {
            return "Thông tin tài khoản sai";
        }
    }

    function checkuser($username,$password){
        $kq=  $sql="SELECT * from user where username=? and password=?";
          return pdo_query_one($sql, $username,$password);
        
      }
      function get_user($id){
          $sql="Select * from user where id=? ";
          return pdo_query_one($sql, $id);
      }

    function dangxuat() {
        if (isset($_SESSION['username'])) {
            unset($_SESSION['username']);
        }
    }

    

?>