<?php
include("controllers/c_loai_nhan_vien.php");
$loai_nhan_vien=new C_loai_nhan_vien();
$loai_nhan_viens=$loai_nhan_vien->Hien_thi_danh_sach_loai_nhan_vien();
?>
