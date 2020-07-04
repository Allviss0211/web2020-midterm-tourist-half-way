<div>
<h2><a href="admin.php?mod=sinhvien&act=manage">Quản lý sinh viên</a></h2>
<p>
<table border = '1'>
<tr>
    <td>MSSV</td>
    <td>Tên sinh viên</td>
    <td>Lớp</td>
</tr>
<?php
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