<?php

function load_list_hoadon()
{
    $sql = "select tai_khoan.ho_ten as name, hoa_don.*, count(chitiet_hd.id_hd) as soluong_hd, sum(chitiet_hd.thanh_tien) as tongtien";
    $sql .= " from tai_khoan join hoa_don on tai_khoan.id = hoa_don.id_user join chitiet_hd on hoa_don.id=chitiet_hd.id_hd";
    $sql .= " where hoa_don.id = chitiet_hd.id_hd";
    $sql .= " group by hoa_don.id order by hoa_don.id desc";
    $list_dh = pdo_query($sql);
    return  $list_dh;
}

function load_cthd($idhd)
{
    $sql = "select hoa_don.*, tai_khoan.*, chitiet_hd.*, sp_bienthe.*, sanpham.*, khuyen_mai.*";
    $sql .= " from tai_khoan join hoa_don on tai_khoan.id = hoa_don.id_user join chitiet_hd on hoa_don.id=chitiet_hd.id_hd join sp_bienthe on chitiet_hd.id_bt =sp_bienthe.id join sanpham on sp_bienthe.id_sp = sanpham.id join khuyen_mai on sanpham.id = khuyen_mai.id_sp";
    $sql .= " where hoa_don.id=$idhd";
    $sql.=" group by chitiet_hd.id order by chitiet_hd.id desc";
    $cthd = pdo_query_one($sql);
    return $cthd;
}
function load_one_cthd($mahd){
    $sql= " select chitiet_hd.*,sanpham.ten_sp,sp_bienthe.gia,sp_bienthe.size,sp_bienthe.mau_sac,hoa_don.ma_hd,hoa_don.ngay_dat,hoa_don.trang_thai,tai_khoan.*,khuyen_mai.ma_km,khuyen_mai.phan_tram from chitiet_hd
    join hoa_don on chitiet_hd.id_hd=hoa_don.id
    join sp_bienthe on chitiet_hd.id_bt=sp_bienthe.id
    join tai_khoan on hoa_don.id_user=tai_khoan.id
    join ";
}

// unction load_cmt($idsp)
// {
//     $sql = "SELECT binhluan.noidung,binhluan.ngaybinhluan,taikhoan.user FROM binhluan
//     JOIN taikhoan on binhluan.iduser=taikhoan.id
//     JOIN sanpham on binhluan.idpro=sanpham.id
//     WHERE sanpham.id=$idsp";
//     $result = pdo_query($sql);
//     return $result;
// }

// function delete_tk($id)
// {
//     $sql = "delete from taikhoan where id=" . $id;
//     $result = pdo_execute($sql);
// }
?>