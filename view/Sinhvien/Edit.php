<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=sinhvien&act=edit&id=<?php echo $id; ?>">Chỉnh sửa sinh vien</a></span></h2>
     <p>
<form action="admin.php?mod=sinhvien&act=edit&id=<?php echo $id; ?>" method="post" class="form" enctype="multipart/form-data">
	<div class = "form-group">
		<label>Mã sinh viên</label>
		<input class="form-control" type="text" name="txtMaSV" id="txtMaSV" value="<?php echo $row['MaSV']; ?>"/>
	</div>
    <div class = "form-group">
		<label>Tên sinh viên</label>
		<input class="form-control" type="text" name="txtHoten" id="txtHoten" value="<?php echo $row['Hoten']; ?>"/>
	</div>
    <div class = "form-group">
		<label>Ngày sinh</label>
		<input class="form-control" type="date" name="txtNgaysinh" id="txtNgaysinh" value="<?php echo $row['Ngaysinh']; ?>"/>
	</div>
    <div class = "form-group">
		<label>Email</label>
		<input class="form-control" type="email" name="txtEmail" id="txtEmail" value="<?php echo $row['Email']; ?>"/>
	</div>
	<div class = "form-group">
        <label>Lớp (*)</label>
        <select class="form-control" name="slCategory">
            <?php
				foreach($cate as $rowcate)
				{
					if($rowcate['MaLop']==$row['MaLop'])
					{
						echo "<option value=\"$rowcate[MaLop]\" selected=\"selected\" >$rowcate[TenLop]</option>";
					}else{
						echo "<option value=\"$rowcate[MaLop]\" >$rowcate[TenLop]</option>";
					}
				}
			?>
		</select>
	</div>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>
</p>
</div>