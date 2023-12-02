<?php

function bill_insert_id($madh, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $total, $ship, $voucher, $tongthanhtoan, $pttt)
{
    $sql = "INSERT INTO bill(madh,iduser, nguoidat_ten,nguoidat_email, nguoidat_tel, nguoidat_diachi,nguoinhan_ten,nguoinhan_diachi,nguoinhan_tel,total,ship,voucher,tongthanhtoan,pttt) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    return pdo_execute_id($sql, $madh, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $total, $ship, $voucher, $tongthanhtoan, $pttt);
}



// ADMIN 
// show ds don hang 

function getdonhang($limit)
{
    $sql = "SELECT * FROM don_hang 
    join san_pham on don_hang.id_san_pham = san_pham.id_san_pham
    join user on don_hang.id_user = user.id_user
    order by id_don_hang asc limit " . $limit;
    return pdo_query($sql);
}

function showdonhang($dsdh)
{
    $html_dh = '';
    $i = 1;
    foreach ($dsdh as $ds) {
        extract($ds);
        if ($trang_thai_don_hang == 0 ) {
            $trang_thai = "đang vận chuyển";
        }
        else {
            $trang_thai = "đã vận chuyển";
        }
        $html_dh .= '
        <tr>
                        <td>'.$i.'</td>
                        <td>'.$ten_san_pham.'</td>
                        <td>'.$ho_ten.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$dia_chi.'</td>
                        <td>'.$trang_thai.'</td>
                    </tr>
        ';
        $i++;
    }
    return $html_dh;
}
