 <!-- Article -->
 <div>
<h2><span><a href="admin.php?mod=lop&act=manage">Quản lý Lop</a></span></h2>
<p>
	<table class="table table-striped table-dark">
    <tr class="title">
        <th>Ma Lop</th>
        <th>Ten Lop</th>
        <th>Ma Khoa</th>
        <td>Xóa</td>
        <td>Sửa</td>
    </tr>
    <?php
	$count = 0;
    include_once("../../Model/Lop.php");
    $sinhvien = new Lop();
    $ret = $sinhvien->GetLop();
	foreach($ret as $row)
	{
		$count++;
		if($count%2==0)
		{
			echo "<tr class=\"color\"><td>";
		}
		else
			echo "<tr><td>";
        echo $row['MaLop']."</td><td>";
        echo $row['TenLop']."</td><td>";
        echo $row['MaKhoa']."</td><td>";
		echo "<a href=\"admin.php?mod=lop&act=delete&id=$row[MaLop]\" onclick=\"return IsDelete()\"><img src=\"img/delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=lop&act=edit&id=$row[MaLop]\"><img src=\"img/edit.gif\" /></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=lop&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">