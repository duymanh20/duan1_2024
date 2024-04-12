<?php

if(isset($_GET['id'])){
    $getSanPhamById=getSanPhamById($_GET['id']); //  LẤY DỮ LIỆU SẢN PHẢM QUA ID
    $getAllSizeSanPham=getAllSizeSanPham($_GET['id']);
    increaseView($_GET['id']);
}
include_once("views/user/detail.views.php");
