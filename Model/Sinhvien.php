<?php
include_once("DataAccess.php");
class SinhVien
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertSinhVien($MaSV,$HoTen,$NgaySinh,$Email,$MaLop)
	{
		$sql="INSERT into SinhVien(MaSV,HoTen,NgaySinh,Email,MaLop) values($MaSV,'$HoTen','$NgaySinh','$Email',$MaLop)";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateSinhVien($MaSV,$HoTen,$NgaySinh,$Email,$MaLop)
	{
		$sql="UPDATE SinhVien set MaSV=$MaSV,HoTen='$HoTen',NgaySinh='$NgaySinh',Email='$Email', MaLop=$MaLop where MaSV=$MaSV";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteSinhVien($MaSV)
	{
		$sql = "DELETE from SinhVien where MaSV=$MaSV";
		return $this->da->ExecuteQuery($sql);
	}
	function GetSinhVien($start,$limit)
	{
		$sql="SELECT MaSV,HoTen,NgaySinh,Email,MaLop from SinhVien limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetAllSinhVien()
	{
		$sql="SELECT MaSV,HoTen,NgaySinh,Email,MaLop from SinhVien ";
		return $this->da->FetchAll($sql);
	}
	function GetSinhVienManage()
	{
		$sql="SELECT MaSV,SinhVien.MaLop,MaSV,HoTen,NgaySinh,Email,MaLop from SinhVien join Lop on SinhVien.MaLop = Lop.MaLop";
		return $this->da->FetchAll($sql);
	}
	function GetSinhVienByLop($MaLop)
	{
		$sql="SELECT MaSV,HoTen,NgaySinh,Email,MaLop from SinhVien where MaLop=$MaLop";
		return $this->da->FetchAll($sql);
	}
	function GetSinhVienByMaSV($MaSV)
	{
		$sql="SELECT MaSV,HoTen,NgaySinh,Email,MaLop from SinhVien where MaSV=$MaSV";
		return $this->da->Fetch($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>