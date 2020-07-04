<?php
    ob_start();
    include_once("Model/SinhVien.php");
    $sinhvien = new SinhVien();

    include_once("Model/Lop.php");
    $dslop = new Lop();
    $lop = $dslop->GetLop();

    if(isset($_GET['MaSV']))
	{
		$id=$_GET['MaSV'];
		$row=$sinhvien->GetSinhVienByMaSV($id);
		include_once("view/SinhVien/edit.php");
		if(isset($_POST['btnChange']))
		{
			$tenSV=$_POST["txtTenSV"];
			$khoa=$_POST["slKhoa"];
			$lop=$_POST["slLop"];
		}
	}
	ob_end_flush();
?>