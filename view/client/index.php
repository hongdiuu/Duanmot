<?php
session_start();
ob_start() ;
include "../../model/pdo.php";
include "../../model/taikhoan.php";
include "../../model/danhmuc.php";
include "../../model/sanpham.php";
include "../../model/banner.php";
include "../../model/tintuc.php";
include "../../model/binhluan.php";
include "../../model/khuyenmai.php";
if (!isset($_SESSION['mycard'])) {
    $_SESSION['mycard'] = [];
}
$count_sp = load_sl_sp();
$all_news = loadall_tintuc();
$all_baner = loadall_banner();
$all_dm = load_list_dm();
$all_sp = load_list_sp("", 0);
$sp_noibat = load_list_sp_noibat();
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
            $all_sp = load_list_sp($timkiem, $iddm);
            $all_dm = load_list_dm();
            include "listsanpham.php";
            break;
        case 'sanphamct':

            if (isset($_POST['binhluan']) && $_POST['binhluan']) {
                $iduser = $_SESSION['user']['id'];
                $date = date('Y-m-d');
                $idpro = $_POST['idpro'];
                $noidung = $_POST['noidung'];
                insert_cmt($idpro, $iduser, $noidung, $date);
            }


            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $chitiet_sp = load_one_ctsp($_GET['idsp']);
                $sp_cungloai = load_sp_cungloai($_GET['idsp'], $chitiet_sp[0]['id_dm']);
                $cmt = load_cmt_sp($_GET['idsp']);
            }
            // delete_cmt_kh($cmt[0]['id'],$cmt[0]['id_sp']);
            include "chitietsanpham.php";
            break;

            //
        case 'giohang':
            if ((isset($_POST['addcard']))) {
                $id = $_POST['id'];
                $tensp = $_POST['name'];
                $giasp = $_POST['price'];
                $hinhsp = $_POST['img'];
                $soluong = 1;
                $thanhtien = $soluong * $giasp;
                $add_spp_card = [$id, $tensp, $giasp, $hinhsp, $soluong, $thanhtien];
                array_push($_SESSION['mycard'], $add_spp_card);
            }
            header('location:index.php?act=xemgiohang');
            break;

        case 'deletecard':
            if (isset($_GET['id_card'])) {
               array_splice($_SESSION['mycard'],$_GET['id_card'],1);
              
            }else{
                $_SESSION['mycard']=[];
            }
            header('location:index.php?act=xemgiohang');
            break;

            case 'makm':
                if (isset($_POST['guikm']) && $_POST['guikm']>0) {
                    $makm = $_POST['makm'];
                    $check = check_makm($makm);
                    if (is_array($check)) {
                        $mkm = $check['ma_km'];
                        $id = $check['id'];
                        $tenkm=$check['ten_km'];
                        $phantramkm=$check['phan_tram'];
                    } else {
                        $mkm="";
                        $id="";
                        $tenkm="";
                        $phantramkm="";
                        $thongbao_email = "Mã khuyến mại này không tồn tại !";
                    }
                }
                include "giohang.php";
                break;
        case 'xemgiohang':
            include "giohang.php";
            break;
        case 'thanhtoan':
            include "thanhtoan.php";
            break;
        case 'lienhe':
            include "lienhe.php";
            break;
        case 'tintuc':
            include "tintuc.php";
            break;
        case 'chitiettintuc':
            include "chitiettintuc.php";
            break;
        case 'dangki_tk':
            if (isset($_POST['dangki'])) {
                $email = $_POST['email'];
                $full_name =  $_POST['fullname'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_tk($user, $pass, $full_name, $email);
                $thongbao = "<b>Bạn đã đăng kí thành công !</b>";
            }
            include "./taikhoan/dangnhap.php";
            break;

        case 'dangnhap_tk':
            if (isset($_POST['login']) && $_POST['login']) {
                $name = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = check_user($name, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location:index.php', true);
                } else {
                    $thongbao1 = "Tài khoản không tồn tại hoặc sai mật khẩu !";
                }
            }
            include "./taikhoan/dangnhap.php";
            break;

        case 'edit_tk':
            if (isset($_SESSION['user']['id']) && $_SESSION['user']['id'] > 0) {
                $load_one_nd = load_one_kh($_SESSION['user']['id']);
                extract($load_one_nd);


                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $fullname = $_POST['fullname'];
                    $date = $_POST['date'];
                    $addr = $_POST['addr'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $id = $_SESSION['user']['id'];
                    update_tt_kh($id, $user, $pass, $fullname, $date, $addr, $email, $sdt);
                    $thongbao = "cap nhat thanh cong !";
                    $_SESSION['user'] = check_user($user, $pass);
                    header('location:index.php?act=edit_tk', true);
                }
            }
            include "./taikhoan/taikhoan.php";
            break;

            break;
        case 'quen_mk':

            if (isset($_POST['gui']) && $_POST['gui']) {
                $email = $_POST['email'];
                $check = check_email($email);
                if (is_array($check)) {
                    $mk = $check['pass'];
                    $id = $check['id'];
                } else {
                    $thongbao_email = "Email này không tồn tại !";
                }
            }
            include "./taikhoan/quen_mk.php";
            break;

        case 'change_mk':
            if (isset($_POST['capnhatmk']) && $_POST['capnhatmk']) {
                $pass = $_POST['pass'];
                $id =  $_POST['idmk'];
                update_mk($id, $pass);
                $thongbao_ud = "Đổi mk thành công";
            }
            include "./taikhoan/quen_mk.php";
            break;
        case 'logout':
            session_unset();
            header('location:index.php', true);
            break;

        default:
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
