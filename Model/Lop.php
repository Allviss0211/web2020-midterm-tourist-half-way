<?php
include_once("DataAccess.php");
class Khoa
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertLop($MaLop,$TenLop,$MaKhoa)
	{
		$sql="Insert into Lop (MaLop,TenLop,MaKhoa) values($MaLop,'$TenLop',$MaKhoa)";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteLop($MaLop)
	{
		$sql="Delete from Khoa where MaLop=$MaLop";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateLop($MaLopCurr,$MaLop,$TenLop,$MaKhoa)
	{
		$sql="Update Lop set MaLop=$MaLop,TenLop='$TenLop',MaKhoa=$MaKhoa " where MaLop=$MaLopCurr";
		return $this->da->ExecuteQuery($sql);
	}
	function GetLopByMaLop($MaLop)
	{
		$sql="Select MaLop,TenLop,MaKhoa from Khoa where MaLop=$MaLop";
		return $this->da->Fetch($sql);
	}
	function GetLop()
	{
		$sql="Select Lop.MaLop,TenLop,TenKhoa from Lop join Khoa on Lop.MaKhoa=Khoa.MaKhoa";
		return $this->da->FetchAll($sql); 
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>