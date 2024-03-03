<?php
@session_start();
include("models/m_khach_hang.php");
class C_khach_hang{
	function Hien_thi_danh_sach_khach_hang(){
		$m_khach_hang= new M_khach_hang();
		$khach_hangs=$m_khach_hang->Doc_khach_hang();
		$tieude="DANH SÁCH KHÁCH HÀNG";
		$view="views/khach_hang/v_danh_sach_khach_hang.php";
		include("include/layout.php");
	}

}

?>