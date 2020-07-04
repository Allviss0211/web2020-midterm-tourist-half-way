<?php 
    include_once("model/SinhVien.php");
    $sinhvien = new SinhVien();
    $res = $sinhvien->getSinhVien();
    include_once("view/sinhvien/manage.php")
?>