<?php
function getAllSanPham(){
    $sql="SELECT * FROM sanpham INNER JOIN theloai ON sanpham.loaiSanPham = theloai.id_theloai WHERE xoa_sanpham = 0 AND xoa_theloai = 0 ";
    return pdo_query($sql);
}
function getAllSanPhamById($id_sanpham){
    $sql="SELECT * FROM sanpham INNER JOIN theloai ON sanpham.loaiSanPham = theloai.id_theloai WHERE xoa_sanpham = 0 AND xoa_theloai = 0 AND id_sanpham=$id_sanpham ";
    return pdo_query_one($sql);
}
function delSanpham($id_sanpham){
    $sql="UPDATE sanpham SET xoa_sanpham=1 WHERE id_sanpham=$id_sanpham";
    return pdo_execute($sql);
}
function updateSanpham($tenSanPham,$anhSanPham,$anhSanPham1,$gia,$loaiSanPham,$moTa,$id_sanpham){
    if($anhSanPham==''){
        $sql="UPDATE sanpham SET tenSanPham='$tenSanPham',anhSanPham='$anhSanPham1',gia=$gia,loaiSanPham=$loaiSanPham,moTa='$moTa' WHERE id_sanpham=$id_sanpham";
    }else{
        $sql="UPDATE sanpham SET tenSanPham='$tenSanPham',anhSanPham='$anhSanPham',gia=$gia,loaiSanPham=$loaiSanPham,moTa='$moTa' WHERE id_sanpham=$id_sanpham";
    }
    return pdo_execute($sql);
}
function addSanPham($tenSanPham, $anhSanPham, $gia, $loaiSanPham,$moTa){
    $sql="INSERT INTO sanpham(tenSanPham, anhSanPham, gia, loaiSanPham, moTa) VALUES ('$tenSanPham', '$anhSanPham', $gia, $loaiSanPham,'$moTa')";
    pdo_execute($sql);
    $sql="SELECT * FROM sanpham order by id_sanpham DESC LIMIT 1";
    return pdo_query_one($sql);
}

function addSoLuong($id_sanpham3, $soLuong, $id_kichCo1){
    $sql="INSERT INTO soluong(id_sanpham3, soLuong, id_kichCo1) VALUES ($id_sanpham3, $soLuong, $id_kichCo1)";
    return pdo_execute($sql);
}
function updateSoLuong1($id_sanpham3, $soLuong, $id_kichCo1){
    $sql="UPDATE soluong SET soLuong=$soLuong WHERE id_sanpham3=$id_sanpham3 AND id_kichCo1=$id_kichCo1";
    return pdo_execute($sql);
}
function getAllCate(){
    $sql="SELECT * FROM theloai WHERE xoa_theloai = 0 ";
    return pdo_query($sql);
}
function getCateById($id){
    $sql="SELECT * FROM theloai WHERE xoa_theloai = 0 AND id_theloai=$id";
    return pdo_query_one($sql);
}
function getTop6SanPham(){
    $sql="SELECT * FROM sanpham INNER JOIN theloai ON sanpham.loaiSanPham = theloai.id_theloai WHERE xoa_sanpham = 0 AND xoa_theloai = 0 ORDER BY luotXem DESC LIMIT 8";
    return pdo_query($sql);
}
function getSanPhamByCate($id){
    $sql="SELECT * FROM sanpham INNER JOIN theloai ON sanpham.loaiSanPham = theloai.id_theloai WHERE xoa_sanpham = 0 AND loaiSanPham = $id AND xoa_theloai = 0 ORDER BY luotXem LIMIT 8";
    return pdo_query($sql);
}

function getSanPhamById($id){
    $sql="SELECT * FROM sanpham INNER JOIN theloai ON sanpham.loaiSanPham = theloai.id_theloai WHERE xoa_sanpham = 0 AND xoa_theloai = 0 AND id_sanpham=$id ";
    return pdo_query_one($sql);
}
function getAllSize(){
    $sql="SELECT * FROM kichco  WHERE xoa_kichco=0";
    return pdo_query($sql);
}
function getAllSizeSanPham($id){
    $sql="SELECT * FROM soluong INNER JOIN kichco ON soluong.id_kichCo1=kichco.id_kichco WHERE id_sanpham3=$id";
    return pdo_query($sql);
}
function getAllSizeSanPham1($id){
    $sql="SELECT * FROM soluong INNER JOIN kichco ON soluong.id_kichCo1=kichco.id_kichco WHERE id_sanpham3=$id AND soluong.soLuong > 0";
    return pdo_query($sql);
}

function getSizeById($id){
    $sql="SELECT * FROM kichco WHERE xoa_kichco=0 AND id_kichco=$id";
    return pdo_query_one($sql);
}
function increaseView($id){
    $sql="UPDATE sanpham SET luotXem=luotXem+1 WHERE id_sanpham=$id";
    return pdo_execute($sql);
}
function addCate($tenTheLoai){
    $sql="INSERT INTO theloai(tenTheLoai) VALUES('$tenTheLoai')";
    return pdo_execute($sql);
}
function delCate($id_theloai){
    $sql="UPDATE theloai SET xoa_theloai=1 WHERE id_theloai=$id_theloai";
    return pdo_execute($sql);
}
function getNameCateById($id){
    $sql="SELECT * FROM theloai WHERE xoa_theloai = 0 AND id_theloai = $id";
    return pdo_query_one($sql);
}
function updateCate($tenTheLoai,$id_theloai){
    $sql="UPDATE theloai SET tenTheLoai='$tenTheLoai' WHERE id_theloai=$id_theloai";
    return pdo_execute($sql);
}