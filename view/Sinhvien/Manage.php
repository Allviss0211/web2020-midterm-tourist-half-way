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
		$count++;
		if($count%2==0)
		{
			echo "<tr class=\"color\"><td>";
		}
		else
			echo "<tr><td>";
        echo $row['MaSV']."</td><td>";
        echo $row['Hoten']."</td><td>";
        echo $row['NgaySinh']."</td><td>";
        echo $row['Email']."</td><td>";
        echo $row['MaLop']."</td><td>";
		echo "<a href=\"admin.php?mod=sinhvien&act=delete&id=$row[MaSV]\" onclick=\"return IsDelete()\"><img src=\"img/delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=sinhvien&act=edit&id=$row[MaSV]\"><img src=\"img/edit.gif\" /></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=sinhvien&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">