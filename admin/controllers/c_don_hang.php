<?php
@session_start();
include("models/m_don_hang.php");
class C_don_hang{
	function Xem_don_hang(){
		$m_don_hang=new M_don_hang();
		$don_hangs=$m_don_hang->xem_don_hang();
		
		$tieude="Danh sách đơn hàng";
		$view="views/don_hang/v_don_hang.php";
		include("include/layout.php");
	}
}

?>