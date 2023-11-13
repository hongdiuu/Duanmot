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
        case "add_dm":

        include "danhmuc/add_dm.php";
        break;

        case "list_dm":
            
            include "danhmuc/list_dm.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
?>
