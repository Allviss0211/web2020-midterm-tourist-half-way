<?php
include_once("DataAccess.php");
class KetQua
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertKetQua($MaKQ,$MaMH,$MaSV,$Diem)
	{
		$sql="INSERT into KetQua(MaKQ,MaMH,MaSV,Diem) values($MaKQ,$MaMH,$MaSV,$Diem)";
		return $this->da->ExecuteQuery($sql);
	}
	function GetAllKetQua()
	{
		$sql="SELECT MaKQ,MaMH,MaSV,Diem from KetQua";
		return $this->da->FetchAll($sql);
	}
	function GetDiemByMaMH($MaMH)
	{
		$sql="SELECT MaKQ,MaMH,MaSV,Diem from KetQua where MaMH=$MaMH";
		return $this->da->FetchAll($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>