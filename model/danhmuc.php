<?php
function danhmuc_all(){
    $sql = "SELECT * FROM danh_muc ORDER BY id_danh_muc DESC";
    return pdo_query($sql);
}


function showdm($dsdm){
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link='index.php?act=san_pham&iddm='.$idsp;
        $html_dm.='<a href="'.$link.'">'.$name.'</a>';
    }
    return $html_dm;
}
?>