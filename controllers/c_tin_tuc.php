<?php
include("models/m_tin_tuc.php");
class C_tin_tuc{
	function Hien_thi_danh_sach_tin_tuc(){
		$m_tin_tuc=new M_tin_tuc();
		$tin_tucs=$m_tin_tuc->Doc_tin_tuc();
		
		$ma_tin_tuc=$tin_tucs[0]->ma_tin_tuc;
		if(isset($_GET["ma_tin_tuc"]))
		{
			$ma_tin_tuc=$_GET["ma_tin_tuc"];
		}
		$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc);
		$title="Bakery | Tin tức";
		$view="views/tin_tuc/v_tin_tuc.php";
		include("include/layout_2.php");
	}
}

?>