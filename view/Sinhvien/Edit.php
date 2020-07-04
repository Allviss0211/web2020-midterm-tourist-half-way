<div>
<h2><a href="edit.php?act=edit&id=<?php echo $id?>">Chỉnh sửa sinh viên</a></h2>
<form action="edit.php?act=edit&id=<?php echo $id?>" method="post">
<?php
include_once("../../Model/Sinhvien.php");
$sinhvien = new SinhVien();
$row=$sinhvien->GetSinhVienByMaSV($id);

include_once("../../Model/Lop.php");
$dslop = new Lop();
$lop = $dslop->GetLop();

include_once("../../Model/Khoa.php");
$dsKhoa = new Khoa();
$khoa = $dsKhoa->GetKhoa();
if(isset($_GET['MaSV']))
// {
// 	$id=$_GET['MaSV'];
// 	$row=$sinhvien->GetSinhVienByMaSV($id);
// }
?>
<p><label>Tên sinh viên</label><input readonly="readonly" type="text" name="txtTenSV" id="txtTenSV" value="<?php echo $row['HoTen']; ?>"/></p>
    <p><label>Khoa</label>
        <select name="slKhoa">
            <?php
				foreach($khoa as $rowGr)
				{
					if($rowGR['MaKhoa']==$row['MaKhoa'])
					{
						echo "<option value=\"$rowGR[MaKhoa]\" selected=\"selected\" >$rowGR[TenKhoa]</option>";
					}
					else
						echo "<option value=\"$rowGR[MaKhoa]\" >$rowGR[TenKhoa]</option>";
				}
			?>
        </select></p>
        <p><label>Lớp</label>
        <select name="slLop">
            <?php
				foreach($ret as $dslop)
				{
					if($dslop['MaLop']==$row['MaLop'])
					{
						echo "<option value=\"$dslop[MaLop]\" selected=\"selected\" >$dslop[TenLop]</option>";
					}
					else
						echo "<option value=\"$dslop[MaLop]\" >$dslop[TenLop]</option>";
				}
			?>
        </select></p>
        <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
		<?php
			include_once("view/SinhVien/edit.php");
			if(isset($_POST['btnChange']))
			{
				$tenSV=$_POST["txtTenSV"];
				$khoa=$_POST["slKhoa"];
				$lop=$_POST["slLop"];
			}
		?>
</form>
</div>