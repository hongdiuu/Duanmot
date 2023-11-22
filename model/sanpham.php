<?php
function insertsp($tensp, $img_name, $ngaynhap, $mota, $trangthai, $iddm)
{
    $sql = "INSERT INTO sanpham(ten_sp,anh_sp,ngay_nhap,mo_ta,trang_thai,id_dm) VALUES('$tensp','$img_name','$ngaynhap','$mota','$trangthai','$iddm')";
    pdo_execute($sql);
}


function load_list_sp($keyw, $iddm)
{
    $sql = "select * from sanpham where 1";
    if ($keyw != "") {
        $sql .= " AND ten_sp LIKE '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND id_dm LIKE '%" . $iddm . "%'";
    }

    $sql .= " order by id desc limit 0,9";
    $listsp = pdo_query($sql);
    return $listsp;
}

function delete_sp($idsp)
{
    $sql = "delete from sanpham where id=" . $idsp;
    $result = pdo_execute($sql);
}

function load_one_sp($id)
{
    $sql = "select * from sanpham where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function update_sp($tensp, $img, $ngaynhap, $mota, $iddm, $id)
{
    if ($img == "") {
        $sql = "update sanpham set ten_sp='$tensp',ngay_nhap='$ngaynhap',mo_ta='$mota',id_dm='$iddm'  where id=$id";
    } else {
        $sql = "update sanpham set ten_sp='$tensp',anh_sp='$img',ngay_nhap='$ngaynhap',mo_ta='$mota',id_dm='$iddm'  where id=$id";
    }
    pdo_execute($sql);
}




// sản phẩm biến thể 
function insert_sp_bt($size, $mausac, $soluong, $gia, $id_sp)
{
    $sql = "insert into sp_bienthe(size,mau_sac,so_luong,gia,id_sp) values('$size','$mausac','$soluong','$gia','$id_sp')";
    pdo_execute($sql);
}


function load_list_sp_bt($keyw)
{
    $sql = "select * from sanpham join sp_bienthe on sanpham.id = sp_bienthe.id_sp";
    if ($keyw != "") {
        $sql .= " AND sanpham.ten_sp LIKE '%" . $keyw . "%'";
    }
    $sql .= " order by sp_bienthe.id desc limit 0,9";
    $list_spbt = pdo_query($sql);
    return $list_spbt;
}

function delete_sp_bt($idspbt)
{
    $sql = "delete from sp_bienthe where id=" . $idspbt;
    $result = pdo_execute($sql);
}


function update_sp_bt($gia, $size, $mausac, $soluong, $id)
{
    $sql = "update sp_bienthe set gia='$gia',size='$size',mau_sac='$mausac',so_luong='$soluong' where id=$id";
    pdo_execute($sql);
}

function load_one_sp_bt($id)
{
    $sql = "select * from sanpham join sp_bienthe on sanpham.id = sp_bienthe.id_sp  where sp_bienthe.id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function load_sl_sp(){
    $sql="select count(sanpham.id) as sl from sanpham ";
    $count_sp = pdo_query($sql);
    return $count_sp;
}
//trên giao diện 
