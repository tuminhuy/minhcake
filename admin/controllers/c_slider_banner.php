<?php
@session_start();
include("models/m_slider_banner.php");
class C_slider_banner{
	function Hien_thi_danh_sach_slider_banner(){
		$m_slider_banner=new M_slider_banner();
		$slider_banners=$m_slider_banner->Doc_slider_banner();
		
		$tieude="DANH SÁCH SLIDER & BANNER";	
		$view="views/slider_banner/v_danh_sach_slider_banner.php";	
		include("include/layout.php");
	}
	
	function Them_slider_banner()
	{
		$m_slide=new M_slider_banner();
		$ten_slide=$hinh=$trang_thai="";
		$hople=true;
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_slide=$_POST["ten_slide"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
			$trang_thai=$_POST["trang_thai"];
			if($ten_slide=="")
			{
				echo "Tên slide không được bỏ trống";
				$hople=false;	
			}
			if($hople)
			{
				$kq=$m_slide->Them_slider_banner($id, $hinh, $ten_slide, $trang_thai);
				if($kq)
				{
					// Di chuyển hình
					if($_FILES["hinh"]["error"]==0) // Có chọn hình
					{
						$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/layout/$hinh");
					}
					
					echo "<script>alert('Thêm slide thành công')</script>";	
					echo "<script>window.location='danh_sach_slider_banner.php'</script>";				
				}
				else
				{
					echo "<script>alert('Thêm bị lỗi')</script>";
				}						
			}
						
		}
		
		$tieude="THÊM SLIDER & BANNER";
		$view="views/slider_banner/v_them_banner.php";
		include("include/layout.php");		
	}
}

?>