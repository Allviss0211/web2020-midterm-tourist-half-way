<div>
<h2><a href="admin.php?act=manage">Quản lý sinh viên</a></h2>
<p>
<table border = '1'>
<tr>
    <td>Họ tên</td>
    <td>Khoa</td>
    <td>Lớp</td>
    <td>Môn</td>
    <td>Điểm</td>
</tr>
<?php
    $count = 0;
    foreach($ret as $row)
    {
        $chuoi = <<< EOD
        <tr>
            <td>$row['HoTen']</td>
            <td>$row['TenKhoa']</td>
            <td>$row['TenLop']</td>
            <td>$row['TenMon']</td>
            <td>$row['Diem']</td>
            <td><a href=\"admin.php?act=delete&id=$row['MaSV']\">Sửa</a></td>
            <td><a href=\"admin.php?act=edit&id=$row['MaSV']\">Xóa</a></td>
        </tr>
        EOD

        echo $chuoi
    }
?>
</table>
</p>
</div>