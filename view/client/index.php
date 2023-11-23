<?php
include "hearder.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listsanpham':
            include "listsanpham.php";
            break;
        case 'chitietsanpham':
            include "chitietsanpham.php";
            break;
        case 'giohang':
            include "giohang.php";
            break;
        case 'dangnhap':
            include "dangnhap.php";
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

        default:
            // include "home.php";
            break;

    }

} else {
    include "home.php";
}

include "footer.php";


?>