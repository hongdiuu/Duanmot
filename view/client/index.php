<?php
session_start();
include "../../model/pdo.php";
include "../../model/taikhoan.php";
include "../../model/danhmuc.php";
include "../../model/sanpham.php";
include "../../model/banner.php";
include "../../model/tintuc.php";
$all_news=loadall_tintuc();
$all_baner=loadall_banner();
$all_dm=load_list_dm();
$all_sp=load_list_sp("", 0);
$sp_noibat=load_list_sp_noibat();
include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['smb']) && $_POST['smb']) {
                $timkiem = $_POST['timkiem'];
            } else {
                $timkiem = "";
            }

            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = "";
            }
            $all_sp=load_list_sp($timkiem,$iddm);
            $all_dm=load_list_dm();
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

        case 'dangki_tk':   
            if (isset($_POST['dangki'])) {         
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_tk($user, $pass);
                $thongbao = "Bạn đã đăng kí thành công !";
            }
            include "./taikhoan/dangnhap.php";
            break;

        case 'dangnhap_tk':
            if (isset($_POST['login']) && $_POST['login']) {
                $name = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = check_user($name, $pass);
                if (is_array($checkuser)) {
                    var_dump("qupcaass");
                    $_SESSION['user'] = $checkuser;
                    header('location:http://localhost/du_an_01/view/client/index.php',true);
                } else {
                    $thongbao1 = "Tài khoản không tồn tại hoặc sai mật khẩu !";
                }
            }
            include "./taikhoan/dangnhap.php";
            break;
        default:
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
