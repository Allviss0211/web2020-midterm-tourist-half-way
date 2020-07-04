<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=monhoc&act=insert">Thêm Mon hoc</a></span></h2>
  <p>
  	<form class="form" method="post" action="admin.php?mod=monhoc&act=insert" enctype="multipart/form-data">
        <p><label>Ma MH (*)</label><input type="text" name="txtMaMH" id="txtMaMH" /></p>
        <p><label>Tên mon hoc (*)</label><input type="text" name="txtTenMon" id="txtTenMon" /></p>
        <p><label>So tin chi </label><input type="date" name="txtSoTC" id="txtSoTC" /></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" /></p>
        <p id="error" class="error"></p>
    </form>
  </p>
</div>