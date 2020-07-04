<div>
<h2><a href="admin.php?mod=sinhvien&act=manage">Quản lý sinh viên</a></h2>
<div> 
    <form method="POST">
        <select name="cbbLop">
            <?php 
                include_once("../../Model/Lop.php");
                $lop = new Lop();
                $res = $lop->GetLop();
                foreach($res as $ten){  
                    echo "<option value='{$ten['MaLop']}'>{$ten['TenLop']}</option>";
                }
            ?>
        </select>
        <input type="submit" name="chon" />
        <p>
            <table border = '1'>
                <tr>
                    <td>MSSV</td>
                    <td>Tên sinh viên</td>
                    <td>Lớp</td>
                    <td>Diem</td>
                </tr>
                <?php
                    include_once("../../Model/Sinhvien.php");
                    include_once("../../Model/KetQua.php");
                    $sinhvien = new SinhVien();
                    $diem = new KetQua();
                    $ret = $sinhvien->GetSinhVienManage();
                    foreach($ret as $row)
                    {
                        $chuoi = <<< EOD
                        <tr>
                            <td>{$row['MaSV']}</td>
                            <td>{$row['HoTen']}</td>
                            <td>{$row['TenLop']}</td>
                            <td><a href=\"admin.php?mod=sinhvien&act=edit&id={$row['MaSV']}\">Sửa</a></td>
                            <td><a href=\"admin.php?mod=sinhvien&act=delete&id={$row['MaSV']}\">Xóa</a></td>
                        </tr>
EOD;
                        echo $chuoi;
                    }
                ?>
            </table>
        </p>
    </form>
</div>
