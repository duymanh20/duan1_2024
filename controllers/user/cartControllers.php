<?php
if(isset($_GET['del']) && count($_SESSION['checkout'])>0){
    array_push($_SESSION['cart'],$_SESSION['checkout'][$_GET['del']]);
    array_splice($_SESSION['checkout'], $_GET['del'], 1);
    $_SESSION['checkout'] = array_values($_SESSION['checkout']);
}
if(!isset($_SESSION['checkout'])){
    $_SESSION['checkout']=[];   
}
include_once("views/user/cart.views.php");
