<?php 
    include_once("model/SinhVien.php");
    $sinhvien = new SinhVien();
    $ret = $sinhvien->GetSinhVien();
    include_once("view/SinhVien/manage.php")
?>