<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=sinhvien&act=insert">Thêm Sinh vien</a></span></h2>
  <p>
  	<form class="form" method="post" action="admin.php?mod=sinhvien&act=insert" enctype="multipart/form-data">
        <p><label>Mã sinh viên (*)</label><input type="text" name="txtMaSV" id="txtMaSV" /></p>
        <p><label>Tên sinh viên (*)</label><input type="text" name="txtHoten" id="txtHoten" /></p>
        <p><label>Ngày sinh </label><input type="date" name="txtNgaysinh" id="txtNgaysinh" /></p>
        <p><label>Email </label><input type="email" name="txtEmail" id="txtEmail" /></p>
        <select name="sllop">
        	<option value="0">Chọn Lớp</option>
            <?php
				foreach($cate as $row)
				{
					echo "<option value=\"$row[MaLop]\" >$row[TenLop]</option>";
				}
			?>
        </select></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" /></p>
        <p id="error" class="error"></p>
    </form>
  </p>
</div>