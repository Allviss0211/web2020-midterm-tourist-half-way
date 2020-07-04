<div>
<h2><a href="admin.php?mod=monhoc&act=manage">Quản lý môn học</a></h2>
<p>
<table border = '1'>
<tr>
    <td>Khoa</td>
    <td>Môn học</td>
</tr>
<?php
    foreach($ret as $row)
    {
        $chuoi = <<< EOD
        <tr>
            <td>$row['TenKhoa']</td>
            <td>$row['TenMôn']</td>
            <td><a href=\"admin.phpmod=?mod=monhoc&act=edit&id=$row['MaMH']\">Sửa</a></td>
            <td><a href=\"admin.php?mod=monhoc&act=delete&id=$row['MaMH']\">Xóa</a></td>
        </tr>
        EOD

        echo $chuoi
    }
?>
</table>
</p>
</div>