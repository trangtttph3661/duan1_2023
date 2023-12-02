<?php
require_once 'pdo.php';
function get_dssp_new(){
    $sql = "SELECT * FROM san_pham ORDER BY id_san_pham DESC " ;
    return pdo_query($sql);
}
function get_dssp_sale(){
    $sql = "SELECT * FROM san_pham WHERE sale=1 ORDER BY id_san_pham DESC  ";
    return pdo_query($sql);
}
function get_iddm($id)
{
    $sql = "SELECT id_danh_muc FROM san_pham WHERE id_san_pham=?";
    return pdo_query_value($sql, $id);
}
function get_dssp_lienquan($iddm, $id, $limi)
{
    $sql = "SELECT * FROM san_pham WHERE id_danh_muc= ? ORDER BY id_san_pham DESC limit $limi";
    return pdo_query($sql, $iddm);
}
function get_sanphamchitiet($id_san_pham)
{
    $sql = "SELECT * FROM san_pham WHERE id_san_pham=?";
    return pdo_query_one($sql, $id_san_pham);
}
?>