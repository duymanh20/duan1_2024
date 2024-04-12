<?php
if(isset($_GET['del'])){
    delSanpham($_GET['del']);
}
$getAllSanPham=getAllSanPham();
if(isset($_GET['type1'])){
    if($_GET['type1']=='fixsanpham'){
        if(isset($_POST['btn-save-sanpham'])){
            foreach ($_POST['sizee'] as $key) {
                updateSoLuong1($_GET['id'], $_POST['sizee'.$key.''], $key);
            }
            if(is_array($_POST['size'])){
                foreach ($_POST['size'] as $key) {
                    addSoLuong($_GET['id'], $_POST['size'.$key.''], $key);
                }
            }
            updateSanpham($_POST['tenSanPham'],$_POST['anhSanPham'],$_POST['anhSanPham1'],$_POST['gia'],$_POST['loaiSanPham'],$_POST['moTa'],$_GET['id']);
        }
        $getAllCate=getAllCate();
        $getAllSizeSanPham=getAllSizeSanPham($_GET['id']);
        $getAllSize=getAllSize();
        $getAllSanPhamById=getAllSanPhamById($_GET['id']);
        include_once("views/admin/fixsanpham.views.php");
    }else if($_GET['type1']=='addsanpham'){
        if(isset($_POST['btn-add-sanpham'])){
            $addSanPham=addSanPham($_POST['tenSanPham'], $_POST['anhSanPham'], $_POST['gia'], $_POST['loaiSanPham'],$_POST['moTa']);
            foreach ($_POST['size'] as $key) {
                addSoLuong($addSanPham['id_sanpham'], $_POST['size'.$key.''], $key);
            }
        }
        $getAllSize=getAllSize();
        include_once("views/admin/addsanpham.views.php");
    }
    
}else{
    include_once("views/admin/sanpham.views.php");
}