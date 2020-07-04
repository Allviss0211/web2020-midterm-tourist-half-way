<?php
    ob_start();
    include_once("Model/SinhVien.php");
    $sinhvien = new SinhVien();

    include_once("Model/Lop.php");
    $dslop = new Lop();
    $lop = $dslop->GetLop();

    include_once("view/Lop/insert.php");
    if(isset($_POST['btnSave']))
    {
        include_once("Model/Sinhvien.php");
		$tenSinhvien=$_POST["txtTenSV"];
		$khoa=$_POST["slKhoa"];
		$lop=$_POST["slLop"];
    }
    ob_end_flush();
?>