<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=khoa&act=edit&id=<?php echo $id; ?>">Chỉnh sửa Khoa</a></span></h2>
     <p>
<form action="admin.php?mod=khoa&act=edit&id=<?php echo $id; ?>" method="post" class="form" enctype="multipart/form-data">
	<div class = "form-group">
		<label>Ma Khoa</label>
		<input class="form-control" type="text" name="txtMaKhoa" id="txtMaKhoa" value="<?php echo $row['MaKhoa']; ?>"/>
	</div>
    <div class = "form-group">
		<label>Tên Khoa</label>
		<input class="form-control" type="text" name="txtTenKhoa" id="txtTenKhoa" value="<?php echo $row['TenKhoa']; ?>"/>
	</div>
    <div class = "form-group">
		<label>Nam thanh lap</label>
		<input class="form-control" type="text" name="txtNamthanhlap" id="txtNamthanhlap" value="<?php echo $row['NamThanhLap']; ?>"/>
	</div>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>
</p>
</div>