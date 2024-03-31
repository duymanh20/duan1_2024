<?php
if(isset($_GET['del'])){
    echo'<script>
    if (confirm("Bạn có chắc chắn muốn hủy không?")) {
        window.location.href = "index.php?type=order&cancel='.$_GET['del'].'"; 
    } 
    </script>';
}
if(isset($_GET['cancel'])){
    $getChiTietHoaDon=getChiTietHoaDon($_GET['cancel']);
    foreach ($getChiTietHoaDon as $key) {
        updateSoLuong($key['soLuong1'],$key['id_sanpham1'],$key['kichCo1']);
    }
    delHoaDonChiTiet($_GET['cancel']);
    delHoaDon($_GET['cancel']);
}
if(isset($_GET['unconfirm'])){
    updateTrangThaiHoaDon($_GET['unconfirm'],1);
}else if(isset($_GET['confirm'])){
    updateTrangThaiHoaDon($_GET['confirm'],2);
}else if(isset($_GET['deli'])){
    updateTrangThaiHoaDon($_GET['deli'],3);
}else if(isset($_GET['done'])){
    updateTrangThaiHoaDon($_GET['done'],4);
}
$getAllHoaDonNotConfirm=getAllHoaDonNotConfirm();
$getAllHoaDonConfirm=getAllHoaDonConfirm();
$getAllHoaDonDeli=getAllHoaDonDeli();
$getAllHoaDonDone=getAllHoaDonDone();
if(isset($_GET['type1'])){
    if($_GET['type1']=='seeorder'){
        $getChiTietHoaDon=getChiTietHoaDon($_GET['id']);
        include_once("views/admin/seeorder.views.php");
    }
}else{
    include_once("views/admin/order.views.php");
}