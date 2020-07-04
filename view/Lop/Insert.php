<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=lop&act=insert">Thêm sản phẩm</a></span></h2>
  <p>
  	<form class="form" method="post" action="admin.php?mod=lop&act=insert" enctype="multipart/form-data">
        <p><label>Ma Lop (*)</label><input type="text" name="txtMaLop" id="txtMaLop" /></p>
        <p><label>Tên Lop (*)</label><input type="text" name="txtTenLop" id="txtTenLop" /></p>
        <select name="slKhoa">
        	<option value="0">Chọn Lớp</option>
            <?php
				foreach($cate as $row)
				{
					echo "<option value=\"$row[MaKhoa]\" >$row[TenKhoa]</option>";
				}
			?>
        </select></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" /></p>
        <p id="error" class="error"></p>
    </form>
  </p>
</div>