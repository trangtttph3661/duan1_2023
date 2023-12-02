<?php
session_start();
ob_start();



include "model/user.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/global.php";

// data dành cho trang chủ
// include_once 'View/header.php';
$dssp_new = get_dssp_new(4);
$dssp_sale = get_dssp_sale(4);

// include_once 'View/header.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'Nike':
            if(isset($_GET['id'])) {
                $id=$_GET['id'];
                $sql = "SELECT * FROM san_pham WHERE id_danhmuc = '$id'";
                $dssp=pdo_query($sql);
                var_dump($dssp);
            }
            
            // $dssp=get_dssp(2);
            include_once 'View/nike.php';
            break;
        case 'Adidas':
            include_once 'View/adidas.php';
            break;
        case 'MLB':
            include_once 'View/mlb.php';
            break;
        case 'Jordan':
            include_once 'View/jordan.php';
            break;
        case 'Sale':
            include_once 'View/sale.php';
            break;
        case 'giohang':
            include_once 'View/giohang.php';
            break;

        case 'thanhtoan':
            include_once 'View/thanhtoan.php';
            break;

        // case 'login':
        //     // input
        //     if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        //         $username = $_POST['phone'];
        //         $password = $_POST['password'];

        //         //xl: kiem tra
        //         $kq = checkuser($username, $password);
        //         if (is_array($kq)) {
        //             $_SESSION['user'] = $kq;
        //             header('location: index.php');
        //             $thongbao = "Bạn đã đăng nhập thành cônng";
        //         } else {
        //             $thongbao = "Vui lòng nhập lại hoặc đăng ký tài khoản";
        //         }
             
        //     }

        case 'login':
            // input
            if(isset($_POST["dangnhap"])&&($_POST["dangnhap"])){
                $username=$_POST["username"];
                $password=$_POST["password"];
                
                //xl: kiem tra
                $kq=checkuser($username,$password);


                if(isset($kq)&&(is_array($kq))&&(count($kq)>0)){
                    extract($kq);
                    if($vai_tro==1){
                        $_SESSION['s_user']=$kq;
                        header('location: admin/index.php?pg=trangchu');    
                    }else{
                        $_SESSION['s_user']=$kq;
                        header('location: index.php');    
                    }
                }else{
                    
                        $tb="Tài khoản không tồn tại hoặc thông tin đăng nhập sai! ";
                        $_SESSION['tb_dangnhap']=$tb;
                        header('location: index.php?act=dangnhap');                 
                }
                //out
                
            }
            break;
        case 'dangnhap':
            // if (isset($_POST['dangnhap'])) {
            //     $loginMess = dangnhap($_POST['username'], $_POST['password']);
            //     include "view/home.php";
            // }
            include 'View/dangnhap.php';
            break;
        case 'dangky':
           
            include 'View/dangky.php';   
            break;

        
        case 'adduser':
            if (isset($_POST["dangky"]) && ($_POST["dangky"])!='') {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $hoten = $_POST["hoten"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $diachi = $_POST["dia_chi"];
                
                user_insert($username, $password, $hoten, $email, $phone, $diachi);
               
            }
            include "View/dangnhap.php";

            break;
        
        case 'dangxuat':
            dangxuat();
            include "View/main.php";
            break;
            
        case 'logout':
                if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                    unset($_SESSION['s_user']);
                }
                header('location: index.php');
            break;

        case 'sanphamlist':
            $sanphamlist = get_dssp_new(100);
            include "View/sanphamlist.php";
            break;


        case 'chitietsanpham':
            if(isset($_GET['id'])){
                
                $id =$_GET['id'];
                $sql= "select * from san_pham where id_san_pham = $id";
                // print_r($sql);
                // die;
                
                $result = pdo_query_one($sql);
                // var_dump($result);
                extract($result);
                // foreach($result as $value){
                    
                // }
                // header('location: chitietsanpham.php');
            }
            include "View/chitietsanpham.php";
            
            // if(isset($_GET["id"])&&($_GET["id"]>0)){
            //     $id=$_GET["id"];
               
            //     $iddm=get_iddm($id);
            //     $dssp_lienquan=get_dssp_lienquan($iddm,3,4);
            //     $spchitiet=get_sanphamchitiet(3);
            //     include "view/chitietsanpham.php";
            // }else{
            //    include "view/main.php";
            // }


                
                break;

        default:
            include_once 'View/main.php';
            break;

        
    }
} else {
    include_once 'View/main.php';
}
// include_once 'View/footer.php';
