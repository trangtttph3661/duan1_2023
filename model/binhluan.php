<?php
require_once 'pdo.php';

function binhluan_insert($idbl, $noidung, $iduser, $idsp, $ngaybl, $danhgia){
    $sql = "INSERT INTO binh_luan(id_binh_luan, noi_dung, id_user, id_sp, ngay_binh_luan, danh_gia) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $idbl, $noidung, $iduser, $idsp, $ngaybl, $danhgia);
}

function binhluan_select_all(){
    $sql = "SELECT * FROM binh_luan ORDER BY id_binh_luan DESC";
    return pdo_query($sql);
}
