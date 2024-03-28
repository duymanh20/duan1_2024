<?php
function dangKy($tenND,$matKhau,$email,$hoVT,$ngaySinh,$diaChi,$soDT){
    $sql="SELECT * FROM nguoidung WHERE email like '$email'";
    $result=pdo_query($sql);
    $ngay_moi = date("Y-m-d", strtotime($ngaySinh));
    if(count($result)==0){
        $sql="INSERT INTO nguoidung(tenND,matKhau,email,hoVT,ngaySinh,diaChi,soDT) VALUES('$tenND','$matKhau','$email','$hoVT','$ngay_moi','$diaChi','$soDT')";
        return pdo_execute($sql);
    }
}
function dangNhap($matKhau,$email){
    $sql="SELECT * FROM nguoidung WHERE email like '$email' AND matKhau like '$matKhau' AND xoa_nguoidung = 0 ";
    return pdo_query_one($sql);
}

function upHoaDon($id_nguoidung1,$tongDon,$sDTDH,$diaCDH){
    $sql="INSERT INTO hoadon(id_nguoidung1,tongDon,sDTDH,diaCDH) VALUES($id_nguoidung1,$tongDon,'$sDTDH','$diaCDH')";
    pdo_execute($sql);

    $sql="SELECT * FROM hoadon order by id_hoadon DESC LIMIT 1";
    return pdo_query_one($sql);
}
function upChiTiet($id_hoadon1,$id_sanpham1,$soLuong1,$kichCo1,$tongCT){
    $sql="INSERT INTO hoadonchitiet(id_hoadon1,id_sanpham1,soLuong1,kichCo1,tongCT) VALUES($id_hoadon1,$id_sanpham1,$soLuong1,$kichCo1,$tongCT)";
    return pdo_execute($sql);
}

function upGioHang($id_sanpham2,$id_nguoidung2,$soLuong2,$kichCo2){
    $sql="INSERT INTO giohang(id_sanpham2, id_nguoidung2, soLuong2, kichCo2) VALUES ($id_sanpham2,$id_nguoidung2,$soLuong2,$kichCo2)";
    return pdo_execute($sql);
}
function getGioHang($id_nguoidung2){
    $sql="SELECT * FROM giohang INNER JOIN sanpham ON giohang.id_sanpham2=sanpham.id_sanpham INNER JOIN kichco ON giohang.kichCo2=kichco.id_kichco WHERE id_nguoidung2=$id_nguoidung2  ";
    return pdo_query($sql);

}

function delGioHang($id_nguoidung2){
    $sql="DELETE giohang FROM giohang WHERE id_nguoidung2=$id_nguoidung2";
    return pdo_execute($sql);
}