<?php
include_once("DataAccess.php");
class MonHoc
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertMonHoc($MaMH,$TenMon,$SoTC)
	{
		$sql="Insert into MonHoc (MaMH,TenMon,SoTC) values($MaMH,'$TenMon',$SoTC)";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteMonHoc($MaMH)
	{
		$sql="Delete from MonHoc where MaMH=$MaMH";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateMonHoc($MaMHCurr,$MaMH,$TenMon,$SoTC)
	{
		$sql="Update MonHoc set MaMH=$MaMH,TenMon='$TenMon',SoTC=$SoTC " where MaMH=$MaMHCurr";
		return $this->da->ExecuteQuery($sql);
	}
	function GetMonHocByMaMH($MaMH)
	{
		$sql="Select MaMH,TenMon,SoTC from MonHoc where MaMH=$MaMH";
		return $this->da->Fetch($sql);
	}
	function GetMonHoc()
	{
		$sql="Select MaMH,TenMon,SoTC from MonHoc";
		return $this->da->FetchAll($sql); 
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>