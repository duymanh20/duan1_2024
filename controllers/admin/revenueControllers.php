<?php
    if(isset($_POST['year-btn'])){
        $getRevenue=getRevenueByYear($_POST['year']);
        $getRevenueTop5=getRevenueByYearTop5($_POST['year']);
        $ngayXem= 'NĂM '.$_POST['year'];
    }elseif (isset($_POST['quy-btn'])) {
        $getRevenue=getRevenueByQuy($_POST['year'],$_POST['quy']);
        $getRevenueTop5=getRevenueByQuyTop5($_POST['year'],$_POST['quy']);
        $ngayXem= 'QUÝ '.$_POST['quy'].' NĂM '.$_POST['year'];
    }elseif (isset($_POST['monthyear-btn'])) {
        $getRevenue=getRevenueByThang($_POST['year'],$_POST['month']);
        $getRevenueTop5=getRevenueByThangTop5($_POST['year'],$_POST['month']);
        $ngayXem= 'THÁNG '.$_POST['month'].' NĂM '.$_POST['year'];
    }else{
        $getRevenue=getRevenueByAll();
        $getRevenueTop5=getRevenueByAllTop5();
        $ngayXem='TẤT CẢ';
    }
    include_once("views/admin/revenue.views.php");
