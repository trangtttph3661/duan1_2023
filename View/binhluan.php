<?php
    session_start();
    include "../model/pdo.php";
    include "../model/binhluan.php";

    if(isset($_GET['id_sp'])) {
        
        $id_sp = $_GET['id_sp'];
    }

    if(isset($_POST['guibinhluan'])) {
        $idsp = $_POST['id_sp'];
        $noidung = $_POST['noi_dung'];
        $uduser = $_SESSION['s_user']['id_binh_luan'];
        $ngaybl=date('d/m/Y');

        binhluan_insert(`id_binh_luan`, `noi_dung`, `id_user`, `id_sp`, `ngay_binh_luan`);
    }
    $dsbl = binhluan_select_all();
    
    $html_bl="";
    foreach ( $dsbl as $bl){
        extract($bl);
        $html_bl.='<p>'.$noi_dung.'<br>'.$id_user.' - ('.$ngay_binh_luan.')</p>';
    }
    
?>

<h1>BÌNH LUẬN</h1>
<?php
if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
    

?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<input type="hidden" name="id_sp" value="id_sp">
<textarea name="noi_dung" id="" cols="100%" rows="5"></textarea>
<br><br>
<button type="submit" name="guibinhluan">Gửi bình luận</button>
</form>


<?php
}else{
    $_SESSION['trang']="chitietsanpham";
    $_SESSION['idsp']=$_GET['idsp'];
    echo "<a href='../index.php?act=dangnhap' target='_parent'>Bạn phải đăng nhập thì mới bình luận được</a>" ;
}
?>
<div class="dsbl">
  <?=$html_bl?>
   
</div>