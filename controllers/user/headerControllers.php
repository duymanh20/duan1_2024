<?php
if(isset($_POST['btn-login'])){
    $_SESSION['user']=dangNhap($_POST['matKhau'],$_POST['email']);
    if(is_array($_SESSION['user'])){
        $check1=false;
        $getGioHang=getGioHang($_SESSION['user']['id_nguoidung']);
        if(count($getGioHang)>0){
            foreach ($getGioHang as $key) {
                $cartmini = ['id_sanpham' => $key['id_sanpham2'],'anhSanPham' => $key['anhSanPham'], 'tenSanPham' => $key['tenSanPham'], 'gia' => $key['gia'],'quantity' => $key['soLuong2'], 'total' => ($key['gia']*$key['soLuong2']),'size' => $key['kichCo2']];
                $_SESSION['cart'][] = $cartmini;
            }
            $check1=true;
        }
        if(count($getGioHang)==0 || $check1==true){
            header("Location: index.php?type=home");
        }
    }else{
        echo"<script>alert('Sai thong tin')</script>";
    }
}
if(isset($_GET['logout'])){
    echo'<script>
    if (confirm("Bạn có chắc chắn muốn đăng xuất không?")) {
        window.location.href = "index.php?type=home&logout=2"; 
    } 
    </script>';
    if($_GET['logout']==2){
        delGioHang($_SESSION['user']['id_nguoidung']);
        $check=false;
        foreach ($_SESSION['cart'] as $key) {
            $check=upGioHang($key['id_sanpham'],$_SESSION['user']['id_nguoidung'],$key['quantity'],$key['size']);
        }
        if($check==true || count($_SESSION['cart'])==0){
            session_destroy();
            header("Location: index.php?type=home");
        }
    }
    
}
if(isset($_POST['checkout-btn'])){
    if(!isset($_SESSION['checkout'])){
        $_SESSION['checkout']=[];
    }
    if (count($_SESSION['checkout'])==0){
        array_push($_SESSION['checkout'],$_SESSION['cart'][$_POST['checkout-btn']]);
    }else{
        $check2 = 0;
        for ($i = 0; $i < count($_SESSION['checkout']); $i++) {
            $item = $_SESSION['checkout'][$i];
            if ($_SESSION['cart'][$_POST['checkout-btn']]['id_sanpham'] == $item['id_sanpham'] && $_SESSION['cart'][$_POST['checkout-btn']]['size'] == $item['size']) {
                $_SESSION['checkout'][$i]['quantity'] = $_SESSION['cart'][$_POST['checkout-btn']]['quantity'] + $item['quantity'];
                $_SESSION['checkout'][$i]['total'] = $_SESSION['checkout'][$i]['quantity']*$item['gia'];
                $check2 = 1;
                break;
            }
        }
        if ($check2 == 0) {
            array_push($_SESSION['checkout'],$_SESSION['cart'][$_POST['checkout-btn']]);
        }
    }
    unset($_SESSION['cart'][$_POST['checkout-btn']]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);      
}
if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
}
if(isset($_POST['detail-btn']) || isset($_GET['idtocart'])){
        if(isset($_GET['idtocart'])){
            $getSanPhamById=getSanPhamById($_GET['idtocart']);
            $getAllSizeSanPham1=getAllSizeSanPham1($_GET['idtocart']);
            $id_sanpham=$getSanPhamById['id_sanpham'];
            $anhSanPham=$getSanPhamById['anhSanPham'];
            $tenSanPham=$getSanPhamById['tenSanPham'];
            $gia=$getSanPhamById['gia'];
            $size=$getAllSizeSanPham1[0]['id_kichCo1'];
            $quantity=1;
        }else{
            $id_sanpham=$_POST['id_sanpham'];
            $anhSanPham=$_POST['anhSanPham'];
            $tenSanPham=$_POST['tenSanPham'];
            $gia=$_POST['gia'];
            $quantity=$_POST['quantity'];
            $size=$_POST['size'];
        }
    if(isset($_SESSION['user'])){
        if (count($_SESSION['cart'])==0){
            $cartmini = ['id_sanpham' => $id_sanpham,'anhSanPham' => $anhSanPham, 'tenSanPham' => $tenSanPham, 'gia' => $gia,'quantity' => $quantity, 'total' => ($gia*$quantity),'size' => $size];
            $_SESSION['cart'][] = $cartmini;
        }else{
            $check = 0;
            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                $item = $_SESSION['cart'][$i];
                if ($id_sanpham == $item['id_sanpham'] && $size == $item['size']) {
                    $_SESSION['cart'][$i]['quantity'] = $quantity + $item['quantity'];
                    $_SESSION['cart'][$i]['total'] = $_SESSION['cart'][$i]['quantity']*$item['gia'];
                    $check = 1;
                    break;
                }
            }
            if ($check == 0) {
                $cartmini = ['id_sanpham' => $id_sanpham,'anhSanPham' => $anhSanPham, 'tenSanPham' => $tenSanPham, 'gia' => $gia,'quantity' => $quantity, 'total' => ($gia*$quantity),'size' => $size];
            $_SESSION['cart'][] = $cartmini;
            }
        }
        echo"<script>alert('Đã thêm vào giỏ hàng')</script>";
    }else{
        echo"<script>alert('Đăng nhập để mua hàng')</script>";
    }
    
}


if(isset($_POST['cart-btn'])){
    $_SESSION['noleft']=[];
    $check=upHoaDon($_SESSION['user']['id_nguoidung'],$_POST['tongDon'],$_POST['sDTDH'],$_POST['diaCDH']);
    $i=0;
    foreach ($_SESSION['checkout'] as $key) {
        $check4=upChiTiet($check['id_hoadon'],$key['id_sanpham'],$key['quantity'],$key['size'],$key['total']);
        if(!$check4){
            array_push($_SESSION['noleft'],$key);
            unset($_SESSION['checkout'][$i]);
        }
        $i++;
    }
    
    $_SESSION['checkout'] = array_values($_SESSION['checkout']);     
    if(count($_SESSION['noleft'])>0){
        delHoaDonChiTiet($check['id_hoadon'],$_SESSION['user']['id_nguoidung']);
        $check5=delHoaDon($check['id_hoadon'],$_SESSION['user']['id_nguoidung']);
        if($check5){
            header("Location: index.php?type=donedeal");
        }
    }else{
        unset($_SESSION['checkout']);
        header("Location: index.php?type=donedeal");
    }
}
$getAllCate=getAllCate();
include_once("views/user/header.views.php");