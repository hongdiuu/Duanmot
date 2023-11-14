<?php
// include "../model/pdo.php";
// include "../model/danhmuc.php";
// include "../model/sanpham.php";
// include "../model/taikhoan.php";
// include "../model/binhluan.php";
// include "../model/thongke.php";
include "hearder.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            //danhmuc
        case "add_dm":

            include "danhmuc/add_dm.php";
            break;

        case "list_dm":

            include "danhmuc/list_dm.php";
            break;
            //sanpham
        case "add_sp":

            include "sanpham/add_sp.php";
            break;

        case "list_sp":

            include "sanpham/list_sp.php";
            break;
            //sp bien the
        case "add_spbt":

            include "sanphambienthe/add_sp_bt.php";
            break;

        case "list_sp_bt":

            include "sanphambienthe/list_sp_bt.php";
            break;
            //người dùng 
        case "add_kh":

            include "khachhang/add_kh.php";
            break;
        case "list_kh":

            include "khachhang/list_kh.php";
            break;

            //don hang
        case "list_don_hang":

            include "donhang/list_donhang.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
