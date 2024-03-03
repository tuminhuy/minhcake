<?php
include("controllers/c_san_pham.php");
$san_pham=new C_san_pham();
$san_phams=$san_pham->Hien_thi_danh_sach_san_pham();
?>
