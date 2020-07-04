 <!-- Article -->
 <div>
<h2><span><a href="admin.php?mod=khoa&act=manage">Quản lý Khoa</a></span></h2>
<p>
	<table class="table table-striped table-dark">
    <tr class="title">
        <th>Mã Khoa</th>
        <th>Tên Khoa</th>
        <th>Năm Thành lập</th>
        <td>Xóa</td>
        <td>Sửa</td>
    </tr>
    <?php
	$count = 0;
	foreach($ret as $row)
	{
		$count++;
		if($count%2==0)
		{
			echo "<tr class=\"color\"><td>";
		}
		else
			echo "<tr><td>";
        echo $row['MaKhoa']."</td><td>";
        echo $row['TenKhoa']."</td><td>";
        echo $row['NamThanhLap']."</td><td>";
		echo "<a href=\"admin.php?mod=khoa&act=delete&id=$row[MaKhoa]\" onclick=\"return IsDelete()\"><img src=\"img/delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=khoa&act=edit&id=$row[MaKhoa]\"><img src=\"img/edit.gif\" /></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=khoa&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">