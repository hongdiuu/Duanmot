<?php
// trên trang quản trị 
// sản phẩm 
function insert_sp($tensp, $giasp, $img_name, $mota, $iddm)
{
    $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$img_name','$mota','$iddm')";
    pdo_execute($sql);
}


function load_list_sp($keyw, $iddm)
{
    $sql = "select * from sanpham where 1";
    if ($keyw != "") {
        $sql .= " AND name LIKE '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm LIKE '%" . $iddm . "%'";
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


function update_sp($iddm, $tensp, $giasp, $img_name, $mota, $id)
{
    if ($img_name == "") {
        $sql = "update sanpham set name='$tensp',price='$giasp',mota='$mota',iddm='$iddm'  where id=$id";
    } else {
        $sql = "update sanpham set name='$tensp',price='$giasp',img='$img_name',mota='$mota',iddm='$iddm'  where id=$id";
    }
    pdo_execute($sql);
}




// sản phẩm biến thể 
function insert_sp_bt($tensp, $giasp, $img_name, $mota, $iddm)
{
    $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$img_name','$mota','$iddm')";
    pdo_execute($sql);
}


function load_list_sp_bt($keyw, $iddm)
{
    $sql = "select * from sanpham where 1";
    if ($keyw != "") {
        $sql .= " AND name LIKE '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm LIKE '%" . $iddm . "%'";
    }

    $sql .= " order by id desc limit 0,9";
    $listsp = pdo_query($sql);
    return $listsp;
}

function delete_sp_bt($idsp)
{
    $sql = "delete from sanpham where id=" . $idsp;
    $result = pdo_execute($sql);
}


function update_sp_bt($iddm, $tensp, $giasp, $img_name, $mota, $id)
{
    if ($img_name == "") {
        $sql = "update sanpham set name='$tensp',price='$giasp',mota='$mota',iddm='$iddm'  where id=$id";
    } else {
        $sql = "update sanpham set name='$tensp',price='$giasp',img='$img_name',mota='$mota',iddm='$iddm'  where id=$id";
    }
    pdo_execute($sql);
}

//trên giao diện 
?>