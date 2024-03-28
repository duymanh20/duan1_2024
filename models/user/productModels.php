<?php
function getAllCate(){
    $sql="SELECT * FROM theloai WHERE xoa_theloai = 0 ";
    return pdo_query($sql);
}
function getCateById($id){
    $sql="SELECT * FROM theloai WHERE xoa_theloai = 0 AND id_theloai=$id";
    return pdo_query_one($sql);
}
function getTop6SanPham(){
    $sql="SELECT * FROM sanpham INNER JOIN theloai ON sanpham.loaiSanPham = theloai.id_theloai WHERE xoa_sanpham = 0 AND xoa_theloai = 0 ORDER BY luotXem LIMIT 8";
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