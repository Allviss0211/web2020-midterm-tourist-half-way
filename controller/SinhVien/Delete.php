<?php
	include_once("Model/Sinhvien.php");
	$product = new SinhVien();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$product->DeleteSinhVien($id);
		if($ret>0)
		{
			header("location:admin.php?mod=sinhvien&act=manage");
		}
	}
?>