<?php
include_once("DataAccess.php");
class Khoa
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertKhoa($MaKhoa,$TenKhoa,$NamThanhLap)
	{
		$sql="Insert into Khoa (MaKhoa,TenKhoa,NamThanhLap) values($MaKhoa,'$TenKhoa',$NamThanhLap)";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteKhoa($MaKhoa)
	{
		$sql="Delete from Khoa where MaKhoa=$MaKhoa";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateKhoa($MaKhoaCurr,$MaKhoa,$TenKhoa,$NamThanhLap)
	{
		$sql="Update Khoa set MaKhoa=$MaKhoa,TenKhoa='$TenKhoa',NamThanhLap=$NamThanhLap " where MaKhoa=$MaKhoaCurr";
		return $this->da->ExecuteQuery($sql);
	}
	function GetKhoaByMaKhoa($MaKhoa)
	{
		$sql="Select MaKhoa,TenKhoa,NamThanhLap from Khoa where MaKhoa=$MaKhoa";
		return $this->da->Fetch($sql);
	}
	function GetKhoa()
	{
		$sql="Select MaKhoa,TenKhoa,NamThanhLap from Khoa";
		return $this->da->FetchAll($sql); 
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>