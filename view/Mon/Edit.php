<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=monhoc&act=edit&id=<?php echo $id; ?>">Chỉnh sửa Mon hoc</a></span></h2>
     <p>
<form action="admin.php?mod=monhoc&act=edit&id=<?php echo $id; ?>" method="post" class="form" enctype="multipart/form-data">
	<div class = "form-group">
		<label>Ma Mon hoc</label>
		<input class="form-control" type="text" name="txtMaMH" id="txtMaMH" value="<?php echo $row['MaMH']; ?>"/>
	</div>
    <div class = "form-group">
		<label>Tên Mon hoc</label>
		<input class="form-control" type="text" name="txtTenMon" id="txtTenMon" value="<?php echo $row['TenMon']; ?>"/>
	</div>
    <div class = "form-group">
		<label>So tin chi</label>
		<input class="form-control" type="text" name="txtSoTC" id="txtSoTC" value="<?php echo $row['SoTC']; ?>"/>
	</div>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>
</p>
</div>