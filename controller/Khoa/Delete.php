<?php
	include_once("Model/Khoa.php");
	$product = new Khoa();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$product->DeleteKhoa($id);
		if($ret>0)
		{
			header("location:admin.php?mod=khoa&act=manage");
		}
	}
?>