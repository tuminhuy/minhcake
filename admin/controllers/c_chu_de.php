<?php
@session_start();
include("models/m_chu_de.php");
class C_chu_de{
	function Hien_thi_danh_sach_chu_de(){
		$m_chu_de=new M_chu_de();
		$chu_des=$m_chu_de->Doc_chu_de();
		
		$tieude="DANH SÁCH CHỦ ĐỀ";	
		$view="views/chu_de/v_danh_sach_chu_de.php";	
		include("include/layout.php");
	}
	
	function Them_chu_de()
	{
		$m_chu_de=new M_chu_de();
		$ten_chu_de="";
		$hople=true;
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_chu_de=$_POST["ten_chu_de"];
			if($ten_chu_de=="")
			{
				echo "<script>alert('Tên chủ đề không bỏ trống')</script>";
				$hop_le=false;
			}
			if($hople)
			{
				$kq=$m_chu_de->Them_chu_de("NULL", $ten_chu_de);
				echo "<script>alert('Thêm chủ đề thành công')</script>";
				echo "<script>window.location='danh_sach_chu_de.php'</script>";
			}
			else {
				echo "<script>alert('Thêm chủ đề bị lỗi')</script>";	
			}
		}
		
		$tieude="THÊM CHỦ ĐỀ";
		$view="views/chu_de/v_them_chu_de.php";
		include("include/layout.php");		
	}
	
	function Sua_chu_de(){
		if(isset($_GET["ma_chu_de"]))
		{
			$ma_chu_de=$_GET["ma_chu_de"];
			$m_chu_de=new M_chu_de();
			$chu_de=$m_chu_de->Doc_chu_de_theo_ma_chu_de($ma_chu_de);
		}
		
		$hople=true;
		
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_chu_de=$_POST["ten_chu_de"];
			if($ten_chu_de=="")
			{
				echo "<script>alert('Tên chủ đề không bỏ trống')</script>";
				$hop_le=false;
			}
			if($hople)
			{
				$kq=$m_chu_de->Sua_chu_de($ten_chu_de,$ma_chu_de);
				echo "<script>alert('Sửa chủ đề thành công')</script>";	
				echo "<script>window.location='danh_sach_chu_de.php'</script>";
			}
			else {
				echo "<script>alert('Sửa chủ đề bị lỗi')</script>";	
			}
		}
		
		$tieude="SỬA CHỦ ĐỀ";
		$view="views/chu_de/v_sua_chu_de.php";
		include("include/layout.php");
	}

}

?>