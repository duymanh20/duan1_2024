<?php
function getAllHoaDonNotConfirm(){
    $sql="SELECT * FROM hoadon INNER JOIN nguoidung ON hoadon.id_nguoidung1=nguoidung.id_nguoidung INNER JOIN trangthaidonhang ON hoadon.trangTDH=trangthaidonhang.id_trangthaidonhang  WHERE xoa_hoadon=0 AND trangTDH=1";
    return pdo_query($sql);
}
function getAllHoaDonConfirm(){
    $sql="SELECT * FROM hoadon INNER JOIN nguoidung ON hoadon.id_nguoidung1=nguoidung.id_nguoidung INNER JOIN trangthaidonhang ON hoadon.trangTDH=trangthaidonhang.id_trangthaidonhang  WHERE xoa_hoadon=0 AND trangTDH=2";
    return pdo_query($sql);
}
function getAllHoaDonDeli(){
    $sql="SELECT * FROM hoadon INNER JOIN nguoidung ON hoadon.id_nguoidung1=nguoidung.id_nguoidung INNER JOIN trangthaidonhang ON hoadon.trangTDH=trangthaidonhang.id_trangthaidonhang  WHERE xoa_hoadon=0 AND trangTDH=3";
    return pdo_query($sql);
}
function getAllHoaDonDone(){
    $sql="SELECT * FROM hoadon INNER JOIN nguoidung ON hoadon.id_nguoidung1=nguoidung.id_nguoidung INNER JOIN trangthaidonhang ON hoadon.trangTDH=trangthaidonhang.id_trangthaidonhang  WHERE xoa_hoadon=0 AND trangTDH=4";
    return pdo_query($sql);
}

function getAllHoaDonNotConfirmByIdUser($id_nguoidung1){
    $sql="SELECT * FROM hoadon INNER JOIN nguoidung ON hoadon.id_nguoidung1=nguoidung.id_nguoidung INNER JOIN trangthaidonhang ON hoadon.trangTDH=trangthaidonhang.id_trangthaidonhang  WHERE xoa_hoadon=0 AND trangTDH=1 AND id_nguoidung1=$id_nguoidung1";
    return pdo_query($sql);
}
function getAllHoaDonConfirmByIdUser($id_nguoidung1){
    $sql="SELECT * FROM hoadon INNER JOIN nguoidung ON hoadon.id_nguoidung1=nguoidung.id_nguoidung INNER JOIN trangthaidonhang ON hoadon.trangTDH=trangthaidonhang.id_trangthaidonhang  WHERE xoa_hoadon=0 AND trangTDH=2 AND id_nguoidung1=$id_nguoidung1";
    return pdo_query($sql);
}
function getAllHoaDonDeliByIdUser($id_nguoidung1){
    $sql="SELECT * FROM hoadon INNER JOIN nguoidung ON hoadon.id_nguoidung1=nguoidung.id_nguoidung INNER JOIN trangthaidonhang ON hoadon.trangTDH=trangthaidonhang.id_trangthaidonhang  WHERE xoa_hoadon=0 AND trangTDH=3 AND id_nguoidung1=$id_nguoidung1";
    return pdo_query($sql);
}
function getAllHoaDonDoneByIdUser($id_nguoidung1){
    $sql="SELECT * FROM hoadon INNER JOIN nguoidung ON hoadon.id_nguoidung1=nguoidung.id_nguoidung INNER JOIN trangthaidonhang ON hoadon.trangTDH=trangthaidonhang.id_trangthaidonhang  WHERE xoa_hoadon=0 AND trangTDH=4 AND id_nguoidung1=$id_nguoidung1";
    return pdo_query($sql);
}
function getChiTietHoaDonByUser($id_hoadon1,$id_nguoidung1){
    $sql="SELECT * FROM hoadonchitiet INNER JOIN sanpham ON hoadonchitiet.id_sanpham1=sanpham.id_sanpham INNER JOIN hoadon ON hoadon.id_hoadon=hoadonchitiet.id_hoadon1 WHERE id_hoadon1=$id_hoadon1 AND hoadon.id_nguoidung1=$id_nguoidung1";
    return pdo_query($sql);
}
function getChiTietHoaDon($id_hoadon1){
    $sql="SELECT * FROM hoadonchitiet INNER JOIN sanpham ON hoadonchitiet.id_sanpham1=sanpham.id_sanpham INNER JOIN hoadon ON hoadon.id_hoadon=hoadonchitiet.id_hoadon1 WHERE id_hoadon1=$id_hoadon1 ";
    return pdo_query($sql);
}
function updateTrangThaiHoaDon($id_hoadon,$tt){
    $sql="UPDATE hoadon SET trangTDH=$tt WHERE id_hoadon=$id_hoadon";
    return pdo_execute($sql);
}


//YEAR
function getRevenueByYear($namMua){
    $sql="SELECT COUNT(id_hoadon) as 'soDon',SUM(tongDon) as 'tongTien' FROM hoadon WHERE YEAR(ngayMua)=$namMua AND trangTDH=4";
    return pdo_query($sql);
}

function getRevenueByYearTop5($namMua){
    $sql="SELECT SUM(soLuong1) as 'soSach',SUM(tongCT) as 'tongTien',sanpham.tenSanPham,sanpham.anhSanPham FROM hoadonchitiet INNER JOIN sanpham ON hoadonchitiet.id_sanpham1=sanpham.id_sanpham  INNER JOIN hoadon ON hoadon.id_hoadon=hoadonchitiet.id_hoadon1 WHERE hoadonchitiet.id_hoadon1 IN ( SELECT id_hoadon FROM hoadon WHERE YEAR(ngayMua)=$namMua AND trangTDH=4 ) group by hoadonchitiet.id_sanpham1 order by tongTien desc LIMIT 5;";
    return pdo_query($sql);
}

//QUY
function getRevenueByQuy($namMua,$quy){
    $sql="SELECT COUNT(id_hoadon) as 'soDon',SUM(tongDon) as 'tongTien' FROM hoadon WHERE YEAR(ngayMua)=$namMua AND MONTH(ngayMua) BETWEEN ($quy*3-2) AND $quy*3 AND trangTDH=4";
    return pdo_query($sql);
}
function getRevenueByQuyTop5($namMua,$quy){
    $sql="SELECT SUM(soLuong1) as 'soSach',SUM(tongCT) as 'tongTien',sanpham.tenSanPham,sanpham.anhSanPham FROM hoadonchitiet INNER JOIN sanpham ON hoadonchitiet.id_sanpham1=sanpham.id_sanpham  INNER JOIN hoadon ON hoadon.id_hoadon=hoadonchitiet.id_hoadon1 WHERE hoadonchitiet.id_hoadon1 IN ( SELECT id_hoadon FROM hoadon WHERE YEAR(ngayMua)=$namMua AND MONTH(ngayMua) BETWEEN ($quy*3-2) AND $quy*3 AND trangTDH=4 ) group by hoadonchitiet.id_sanpham1 order by tongTien desc LIMIT 5;";
    return pdo_query($sql);
}

//THANG
function getRevenueByThang($namMua,$thang){
    $sql="SELECT COUNT(id_hoadon) as 'soDon',SUM(tongDon) as 'tongTien' FROM hoadon WHERE YEAR(ngayMua)=$namMua AND MONTH(ngayMua) =$thang  AND trangTDH=4";
    return pdo_query($sql);
}

function getRevenueByThangTop5($namMua,$thang){
    $sql="SELECT SUM(soLuong1) as 'soSach',SUM(tongCT) as 'tongTien',sanpham.tenSanPham,sanpham.anhSanPham FROM hoadonchitiet INNER JOIN sanpham ON hoadonchitiet.id_sanpham1=sanpham.id_sanpham  INNER JOIN hoadon ON hoadon.id_hoadon=hoadonchitiet.id_hoadon1 WHERE hoadonchitiet.id_hoadon1 IN ( SELECT id_hoadon FROM hoadon WHERE YEAR(ngayMua)=$namMua AND MONTH(ngayMua) =$thang AND trangTDH=4 ) group by hoadonchitiet.id_sanpham1 order by tongTien desc LIMIT 5;";
    return pdo_query($sql);
}

//All
function getRevenueByAll(){
    $sql="SELECT COUNT(id_hoadon) as 'soDon',SUM(tongDon) as 'tongTien' FROM hoadon WHERE   trangTDH=4";
    return pdo_query($sql);
}
function getRevenueByAllTop5(){
    $sql="SELECT SUM(soLuong1) as 'soSach',SUM(tongCT) as 'tongTien',sanpham.tenSanPham,sanpham.anhSanPham FROM hoadonchitiet INNER JOIN sanpham ON hoadonchitiet.id_sanpham1=sanpham.id_sanpham  INNER JOIN hoadon ON hoadon.id_hoadon=hoadonchitiet.id_hoadon1 WHERE hoadonchitiet.id_hoadon1 IN ( SELECT id_hoadon FROM hoadon WHERE  trangTDH=4 ) group by hoadonchitiet.id_sanpham1 order by tongTien desc LIMIT 5;";
    return pdo_query($sql);
}