<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=lop&act=edit&id=<?php echo $id; ?>">Chỉnh sửa Lop</a></span></h2>
     <p>
<form action="admin.php?mod=lop&act=edit&id=<?php echo $id; ?>" method="post" class="form" enctype="multipart/form-data">
	<div class = "form-group">
		<label>Ma Lop</label>
		<input class="form-control" type="text" name="txtMaLop" id="txtMaLop" value="<?php echo $row['MaLop']; ?>"/>
	</div>
    <div class = "form-group">
		<label>Tên sinh vien</label>
		<input class="form-control" type="text" name="txtTenLop" id="txttenLop" value="<?php echo $row['TenLop']; ?>"/>
	</div>
	<div class = "form-group">
        <label>Ma Khoa (*)</label>
        <select class="form-control" name="slKhoa">
            <?php
				foreach($cate as $rowcate)
				{
					if($rowcate['MaKhoa']==$row['MaKhoa'])
					{
						echo "<option value=\"$rowcate[MaKhoa]\" selected=\"selected\" >$rowcate[TenKhoa]</option>";
					}else{
						echo "<option value=\"$rowcate[MaKhoa]\" >$rowcate[TenKhoa]</option>";
					}
				}
			?>
		</select>
	</div>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>
</p>
</div>