<?php
if(isset($_GET['del'])){
    echo'<script>
    if (confirm("Bạn có chắc chắn muốn hủy không?")) {
        window.location.href = "index.php?type=urorder&cancel='.$_GET['del'].'"; 
    } 
    </script>';
}
if(isset($_GET['cancel'])){
    $getChiTietHoaDon=getChiTietHoaDonByUser($_GET['cancel'],$_SESSION['user']['id_nguoidung']);
    foreach ($getChiTietHoaDon as $key) {
        updateSoLuong($key['soLuong1'],$key['id_sanpham1'],$key['kichCo1']);
    }
    delHoaDonChiTietByUser($_GET['cancel'],$_SESSION['user']['id_nguoidung']);
    delHoaDonByUser($_GET['cancel'],$_SESSION['user']['id_nguoidung']);
}
$getAllHoaDonNotConfirm=getAllHoaDonNotConfirmByIdUser($_SESSION['user']['id_nguoidung']);
$getAllHoaDonConfirm=getAllHoaDonConfirmByIdUser($_SESSION['user']['id_nguoidung']);
$getAllHoaDonDeliByIdUser=getAllHoaDonDeliByIdUser($_SESSION['user']['id_nguoidung']);
$getAllHoaDonDone=getAllHoaDonDoneByIdUser($_SESSION['user']['id_nguoidung']);
if(isset($_GET['type1'])){
    if($_GET['type1']=='seeorder'){
        $getChiTietHoaDon=getChiTietHoaDonByUser($_GET['id'],$_SESSION['user']['id_nguoidung']);
        include_once("views/user/seeorder.views.php");
    }
}else{
    include_once("views/user/order.views.php");
}