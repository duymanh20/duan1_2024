<?php
if(isset($_GET['id'])){
    $getSanPhamByCate=getSanPhamByCate($_GET['id']);
    $getCateById=getCateById($_GET['id']);
}
include_once("views/user/cate.views.php");
