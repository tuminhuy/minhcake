<?php
ini_set("display_errors",1);
include("controllers/c_nhan_vien.php");
$c_nhan_vien=new C_nhan_vien();
if(isset($_GET["func"]))
{
	$c_nhan_vien->thoat_dang_nhap();	
}
$c_nhan_vien->Hien_thi_dang_nhap();
?>