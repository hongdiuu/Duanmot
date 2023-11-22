<?php 
function inser_tintuc($tieude,$noidung,$filename,$ngaydang,$trangthai){
    $sql= "insert into tin_tuc(tieu_de,noi_dung,anh_tin_tuc,ngay_dang,trang_thai) values('$tieude','$noidung','$filename','$ngaydang','$trangthai')";
    pdo_execute($sql);
    
}

function loadall_tintuc(){
    $sql= "select * from tin_tuc order by id desc";
    $listtintuc = pdo_query($sql);
    return $listtintuc;

}


function load_one_tt($id){
    $sql = "SELECT * FROM tin_tuc where id=" .$id;
    $tt = pdo_query_one($sql);
    return $tt;
}

function update_tintuc($tieude,$noidung,$filename,$ngaydang,$trangthai,$id){
    $sql = "update tin_tuc set tieu_de='".$tieude."',noi_dung='".$noidung."',anh_tin_tuc='".$filename."',ngay_dang='".$ngaydang."',trang_thai='".$trangthai."'where id=".$id;
    pdo_execute($sql);
}
function delete_tintuc($id){
    $sql = "delete from tin_tuc where id=".$id;
     pdo_execute($sql);
}

function load_sl_baiviet(){
    $sql="select count(tin_tuc.id) as sl from tin_tuc ";
    $count_news = pdo_query($sql);
    return $count_news;
}

?>