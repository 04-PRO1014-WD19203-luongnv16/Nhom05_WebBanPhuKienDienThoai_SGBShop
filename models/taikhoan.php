<?php

function checkuser($tendn, $matkhau)
{
    $sql = "select * from taikhoan where `tendangnhap`='" . $tendn . "'and `matkhau`='" . $matkhau . "'";
    $taikhoan = pdo_query($sql);
    return $taikhoan;
}
function dangky($tennguoidung,$tendangnhap,$matkhau){
    $sql= "INSERT INTO `taikhoan`(`tennguoidung`, `tendangnhap`, `matkhau`) 
    VALUES ('$tennguoidung','$tendangnhap','$matkhau')";
    pdo_execute($sql);
}
function taikhoantontai($tendangnhap){
    $sql="select * from `taikhoan` where `tendangnhap`='".$tendangnhap."'";
    $count=pdo_query($sql);
    return $count;
}
