<?php
//tren trang quan tri 
function insertdm($tendm){
    $sql = "insert into danhmuc(name) values('$tendm')";
    pdo_execute($sql);
}

function load_list_dm(){
    $sql = "SELECT * FROM danhmuc order by id desc ";
            $listdm = pdo_query($sql);
            return $listdm;
}

function delete_dm($id){
    $sql = "delete from danhmuc where id=".$id;
     pdo_execute($sql);
}

function load_one_dm($iddm){
    $sql = "SELECT * FROM danhmuc where id=" .$iddm;
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}

function update_dm($tenloai,$id){
    $sql = "update danhmuc set name='$tenloai'where id=$id";
    pdo_execute($sql);
}
?>