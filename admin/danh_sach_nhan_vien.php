<?php
include("controllers/c_nhan_vien.php");
$nhan_vien=new C_nhan_vien();
$nhan_viens=$nhan_vien->Hien_thi_danh_sach_nhan_vien();
?>