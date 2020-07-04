<?php
	include_once("Model/Lop.php");
	$product = new Lop();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$product->DeleteLop($id);
		if($ret>0)
		{
			header("location:admin.php?mod=lop&act=manage");
		}
	}
?>