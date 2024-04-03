<?php
if(isset($_GET['del'])){
    array_splice($_SESSION['cart'], $_GET['del'], 1);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}
include_once("views/user/wishlist.views.php");
