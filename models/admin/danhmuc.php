<?php
function themdm($tendm,$bieutuong){
    $sql="INSERT INTO `danhmuc`(`ten_danhmuc`, `anh_danhmuc`) VALUES ('".$tendm."','".$bieutuong."')";
    pdo_execute($sql);
}
function tontaidm($tendm){
    $sql="select * from `danhmuc` where `tendm`='".$tendm."'";
    $dm=pdo_query($sql);
    return $dm;
}
function danhsachdm(){
    $sql="select * from `danhmuc`";
    $danhsach=pdo_query($sql);
    return $danhsach;
}
function suadm($id){
    $sql="select * from `danhmuc` where `ma_danhmuc`=".$id;
    $danhmuc=pdo_query_one($sql);
    return $danhmuc;
}
function capnhatdm($id,$tendm,$icondm){
    $sql="UPDATE `danhmuc` SET `ten_danhmuc`='".$tendm."',`anh_danhmuc`='".$icondm."' WHERE `ma_danhmuc`='".$id."'";
    pdo_execute($sql);
}
function xoadm($id){
    $sql="DELETE FROM `danhmuc` WHERE `ma_danhmuc`='".$id."'";
    pdo_execute($sql);
}
?>