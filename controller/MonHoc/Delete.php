<?php
	include_once("Model/MonHoc.php");
	$product = new MonHoc();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$product->DeleteMonHoc($id);
		if($ret>0)
		{
			header("location:admin.php?mod=monhoc&act=manage");
		}
	}
?>