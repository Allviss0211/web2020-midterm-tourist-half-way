 <!-- Article -->
 <div>
<h2><span><a href="admin.php?mod=monhoc&act=manage">Quản lý Mon hoc</a></span></h2>
<p>
	<table class="table table-striped table-dark">
    <tr class="title">
        <th>Ma MH</th>
        <th>Ten Mon</th>
        <th>So tin chi</th>
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
        echo $row['MaMH']."</td><td>";
        echo $row['TenMon']."</td><td>";
        echo $row['SoTC']."</td><td>";
		echo "<a href=\"admin.php?mod=monhoc&act=delete&id=$row[MaMH]\" onclick=\"return IsDelete()\"><img src=\"img/delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=monhoc&act=edit&id=$row[MaMH]\"><img src=\"img/edit.gif\" /></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=monhoc&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">