<?php
include "../../model/pdo.php";
include "../../model/danhmuc.php";
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
            //bình luận
        case "list_cmt":
            include "binhluan/list_cmt.php";

            //Tin tức 
        case "add_news":
            include "tintuc/add_news.php";
            break;

        case "list_news":
            include "tintuc/list_news.php";
            break;

            //hệ thống
        case "add_hethong":

            include "hethong/add_hethong.php";
            break;

        case "list_hethong":

            include "hethong/list_hethong.php";
            break;
            //khuyến Mại
        case "add_khuyenmai":

            include "khuyenmai/add_km.php";
            break;

        case "list_khuyenmai":

            include "khuyenmai/list_km.php";
            break;
            //baner
        case "add_baner":

            include "baner/add_baner.php";
            break;

        case "list_baner":

            include "baner/list_baner.php";
            break;

            //Liên hệ 
        case "list_lienhe":
            include "lienhe/list_lienhe.php";
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
