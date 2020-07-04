<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=khoa&act=insert">Thêm Khoa</a></span></h2>
  <p>
  	<form class="form" method="post" action="admin.php?mod=sinhvien&act=insert" enctype="multipart/form-data">
        <p><label>Ma Khoa (*)</label><input type="text" name="txtMaKhoa" id="txtMaKhoa" /></p>
        <p><label>Tên Khoa (*)</label><input type="text" name="txtTenKhoa" id="txtTenKhoa" /></p>
        <p><label>Nam Thanh lap </label><input type="date" name="txtNamthanhlap" id="txtNamthanhlap" /></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" /></p>
        <p id="error" class="error"></p>
    </form>
  </p>
</div>