<?php
include "hearder.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            include "listsanpham.php";
            break;
        case 'chitietsanpham':
            include "chitietsanpham.php";
            break;
        case 'giohang':
            include "giohang.php";
            break;
        case 'lienhe':
            include "lienhe.php";
            break;
        case 'taikhoan':
            include "taikhoan.php";
            break;
        case 'thanhtoan':
            include "thanhtoan.php";
            break;
        case 'tintuc':
            include "tintuc.php";
            break;
        case 'chitiettintuc':
            include "chitiettintuc.php";
            break;
        case 'dangki':
            include "dangnhap.php";
            break;
        case 'dangnhap':
            include "dangnhap.php";
            break;
        default:
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
