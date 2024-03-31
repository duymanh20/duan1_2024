<?php
if(isset($_GET['logout'])){
    echo'<script>
    if (confirm("Bạn có chắc chắn muốn đăng xuất không?")) {
        window.location.href = "index.php?type=home&logout=2"; 
    } 
    </script>';
    if($_GET['logout']==2){
    session_destroy();
    header("Location: index.php?type=home");
    }
}
$getAllCate=getAllCate();
include_once("views/admin/header.views.php");
