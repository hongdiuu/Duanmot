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

function load_chitiet_hd($id_hd)
{
    $sql = "select chitiet_hd.*,chitiet_hd.id as id_cthd,sp_bienthe.gia,sp_bienthe.size,sp_bienthe.mau_sac,sp_bienthe.id_sp,hoa_don.*,hoa_don.trang_thai AS trangthai_donhang,tai_khoan.*,khuyen_mai.ma_km,khuyen_mai.phan_tram,sanpham.ten_sp,(chitiet_hd.so_luong*sp_bienthe.gia)AS thanh_tien from chitiet_hd
    join hoa_don on chitiet_hd.id_hd=hoa_don.id
    join sp_bienthe on chitiet_hd.id_bt=sp_bienthe.id
    join tai_khoan on hoa_don.id_user=tai_khoan.id
    join sanpham on sp_bienthe.id_sp=sanpham.id
    join khuyen_mai on hoa_don.id_km=khuyen_mai.id
    WHERE chitiet_hd.id_hd=$id_hd";
    $list = pdo_query($sql);
    return  $list;
}

function load_sl_order(){
    $sql="select count(chitiet_hd.id) as sl from chitiet_hd ";
    $count_order = pdo_query($sql);
    return $count_order;
}
