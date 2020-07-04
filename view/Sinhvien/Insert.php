<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=sinhvien&act=insert">Thêm sinh viên</a></span></h2>
  <p>
  	<form class="form" method="post" action="admin.php?mod=sinvien&act=insert" enctype="multipart/form-data">
        <p><label>Tên sinh viên (*)</label><input type="text" name="txtTenSV" id="txtTenSV" /></p>
        <p><label>Khoa (*)</label>
        <select name="slKhoa">
        	<option value="0">Chọn khoa</option>
            <?php
				foreach($khoa as $row)
				{
					echo "<option value=\"$row[MaKhoa]\" >$row[MaKhoa]</option>";
				}
			?>
        </select></p>
        
        <p><label>Lớp (*)</label>
        <select name="slLop">
        	<option value="0">Chọn lớp</option>
            <?php
				foreach($lop as $row)
				{
					echo "<option value=\"$row[MaLop]\" >$row[MaLop]</option>";
				}
			?>
        </select></p>   
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" /></p>
        
        <p id="error" class="error"></p>
    </form>
  </p>
</div>