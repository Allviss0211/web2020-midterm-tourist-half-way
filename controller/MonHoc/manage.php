<?php
    include_once('Model/MonHoc.php');
    $monhoc = new MonHoc();
    $ret = $monhoc->GetMonHoc();
    include_once('view/MonHoc/manage.php');
?>