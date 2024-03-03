<?php
@session_start();
include("models/m_huong_vi.php");
class C_huong_vi
{
	function Hien_thi_danh_sach_huong_vi()
	{
	  $m_huong_vi=new M_huong_vi();
	  $huong_vis=$m_huong_vi->Doc_huong_vi();
	  
	  $tieude="DANH SÁCH HƯƠNG VỊ";
	  $view="views/huong_vi/v_danh_sach_huong_vi.php";	
	  include("include/layout.php");
	}
	function Them_huong_vi()
	{
		
		$m_huong_vi=new M_huong_vi();
		$ma_huong_vi=$ten_huong_vi="";
		$hople=true;
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_huong_vi=$_POST["ten_huong_vi"];
			$ten_huong_vi=$_POST["ten_huong_vi"];
			if($ma_huong_vi=="")
			{
				echo "<script>alert('Mã hương vị không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($ten_huong_vi=="")
			{
				echo "<script>alert('Tên hương vị không bỏ trống')</script>";
				$hop_le=false;
			}
			if($hople)
			{
				$kq=$m_huong_vi->Them_huong_vi("NULL", $ma_huong_vi,$ten_huong_vi);
				echo "<script>alert('Thêm hương vị thành công')</script>";	
				echo "<script>windown.location='danh_sach_huong_vi.php'</script>";
			}
			else {
				echo "<script>alert('Thêm hương vị bị lỗi')</script>";	
			}
		}
	  $tieude="THÊM HƯƠNG VỊ";
	  $view="views/huong_vi/v_them_huong_vi.php";
	  include("include/layout.php");	
	
	}
	function Sua_huong_vi(){
		if(isset($_GET["id"]))
		{
			$id=$_GET["id"];
			$m_huong_vi=new M_huong_vi();
			$huong_vi=$m_huong_vi->Doc_huong_vi_theo_ma_huong_vi($id);
		}
		
		$hople=true;
		
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_huong_vi=$_POST["ma_huong_vi"];
			$ten_huong_vi=$_POST["ten_huong_vi"];
			if($ma_huong_vi=="")
			{
				echo "<script>alert('Mã hương vị không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($ten_huong_vi=="")
			{
				echo "<script>alert('Tên hương vị không bỏ trống')</script>";
				$hop_le=false;
			}
			if($hople)
			{
				$kq=$m_huong_vi->Sua_huong_vi($ma_huong_vi,$ten_huong_vi,$id);
				echo "<script>alert('Sửa hương vị thành công')</script>";	
				echo "<script>window.location='danh_sach_huong_vi.php'</script>";
			}
			else {
				echo "<script>alert('Sửa hương vị bị lỗi')</script>";	
			}
		}
		
		$tieude="SỬA HƯƠNG VỊ";
		$view="views/huong_vi/v_sua_huong_vi.php";
		include("include/layout.php");
	}
	
/*	function Xoa_chu_de()
	{
		$ma_chu_de=$_GET["ma_chu_de"];
		// Models
		$m_chu_de=new M_chu_de();
		$m_chu_de->Xoa_chu_de($ma_chu_de);
		$hople=true;
		if($hople)
		{
			echo "<script>alert('Xóa thành công')</script>";
			echo "<script>window.location='danh_sach_chu_de.php'</script>";	
		}
		else
		{
			echo "<script>alert('Xóa bị lỗi.')</script>";	
		}
			
	}*/
}