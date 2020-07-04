 <!-- Article -->
 <div>
<h2><span><a href="admin.php?mod=sinhvient&act=manage">Quản lý sinh vien</a></span></h2>
<p>
	<table class="table table-striped table-dark">
    <tr class="title">
        <th>Mã SV</th>
        <th>Họ tên</th>
        <th>Ngày sinh</th>
        <th>Email</th>
        <th>Lớp</th>
        <td>Xóa</td>
        <td>Sửa</td>
    </tr>
    <?php
	$count = 0;
    include_once("../../Model/Sinhvien.php");
    $sinhvien = new SinhVien();
    $ret = $sinhvien->GetSinhVienManage();
    foreach($ret as $row)
    {
        $chuoi = <<< EOD
        <tr>
            <td>{$row['MaSV']}</td>
            <td>{$row['HoTen']}</td>
            <td>{$row['TenLop']}</td>
            <td><a href="edit.php?act=edit&id={$row['MaSV']}">Sửa</a></td>
            <td><a href="delete.php?act=delete&id={$row['MaSV']}">Xóa</a></td>
        </tr>
        EOD;

        echo $chuoi;
    }
?>

</table>
</p>

<div display="inline"><a href="../Mon/Manage.php"><input type="button" value='Xem theo môn'></a></div>
<div display="inline"><a href="../Lop/Manage.php"><input type="button" value='Xem theo lớp'></a></div>
</div>