<div>
<h2><a href="admin.php?mod=MonHoc&act=edit&id=<?php echo $id?>">Chỉnh sửa môn học</a></h2>
<form action="admin.php?mod=MonHoc&act=edit&id=<?php echo $id?>" method="post">
<p><label>Khoa</label><input readonly="readonly" type="text" name="txtKhoa" id="txtKhoa" value="<?php echo $row['TenKhoa']; ?>"/></p>
<p><label>Tên môn</label><input type="text" name="txtTenMon" id="txtTenMon" value="<?php echo $row['TenMon']; ?>"/></p>
<p><label>Số tín chỉ</label><input type="text" name="txtTinChi" id="txtTinChi" value="<?php echo $row['SoTC']; ?>"/></p>


<p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
   
</form>
</div>