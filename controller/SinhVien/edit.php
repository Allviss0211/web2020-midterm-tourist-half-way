<div>
<h2><a href="admin.php?act=edit&id=<?php echo $id?>">Chỉnh sửa sinh viên</a></h2>
<form action="admin.php?act=edit&id=<?php echo $id?>" method="post">
<p><label>Tên sinh viên</label><input readonly="readonly" type="text" name="txtTenSV" id="txtTenSV" value="<?php echo $row['HoTen']; ?>"/></p>
    <p><label>Khoa</label>
        <select name="slKhoa">
            <?php
				foreach($ret as $rowgroup)
				{
					if($rowgroup['MaKhoa']==$row['MaKhoa'])
					{
						echo "<option value=\"$rowgroup[MaKhoa]\" selected=\"selected\" >$rowgroup[TenKhoa]</option>";
					}
					else
						echo "<option value=\"$rowgroup[MaKhoa]\" >$rowgroup[TenKhoa]</option>";
				}
			?>
        </select></p>
        <p><label>Lớp</label>
        <select name="slLop">
            <?php
				foreach($ret as $rowgroup)
				{
					if($rowgroup['MaLop']==$row['MaLop'])
					{
						echo "<option value=\"$rowgroup[MaLop]\" selected=\"selected\" >$rowgroup[TenLop]</option>";
					}
					else
						echo "<option value=\"$rowgroup[MaLop]\" >$rowgroup[TenLop]</option>";
				}
			?>
        </select></p>
        <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
   
</form>
</div>