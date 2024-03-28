<?php

if(isset($_GET['id'])){
    $getSanPhamById=getSanPhamById($_GET['id']);
    $getAllSizeSanPham=getAllSizeSanPham($_GET['id']);
}
include_once("views/user/detail.views.php");
