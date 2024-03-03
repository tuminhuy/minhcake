<?php
@session_start();
include("models/m_loai_nhan_vien.php");
class C_loai_nhan_vien{
	function Hien_thi_danh_sach_loai_nhan_vien(){
		$m_loai_nhan_vien= new M_loai_nhan_vien();
	  	$loai_nhan_viens=$m_loai_nhan_vien->Doc_loai_nhan_vien();
	  	$tieude="DANH SÁCH LOẠI NHÂN VIÊN";
	 	$view="views/loai_nhan_vien/v_danh_sach_loai_nhan_vien.php";	
	 	include("include/layout.php");	
	}
	
	function Them_loai_nhan_vien()
	{
		$m_loai_nhan_vien=new M_loai_nhan_vien();
		$ma_loai_nhan_vien=$ten_loai_nhan_vien="";
		$hople=true;
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_loai_nhan_vien=$_POST["ten_loai_nhan_vien"];
			$ghi_chu=$_POST["ghi_chu"];
			if($ten_loai_nhan_vien=="")
			{
				echo "<script>alert('Tên loại nhân viên không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($ghi_chu=="")
			{
				echo "<script>alert('Ghi chú không bỏ trống')</script>";
				$hop_le=false;
			}
			if($hople)
			{
				$kq=$m_loai_nhan_vien->Them_loai_nhan_vien("NULL", $ten_loai_nhan_vien,$ghi_chu);
				echo "<script>alert('Thêm loại nhân viên thành công')</script>";
				echo "<script>window.location='danh_sach_loai_nhan_vien.php'</script>";	
			}
			else {
				echo "<script>alert('Thêm loại nhân viên bị lỗi')</script>";	
			}
		}
		
		$tieude="THÊM LOẠI NHÂN VIÊN";
		$view="views/loai_nhan_vien/v_them_loai_nhan_vien.php";
		include("include/layout.php");	
	}
	
	function Sua_loai_nhan_vien(){
		if(isset($_GET["ma_loai_nhan_vien"]))
		{
			$ma_loai_nhan_vien=$_GET["ma_loai_nhan_vien"];
			$m_loai_nhan_vien=new M_loai_nhan_vien();
			$loai_nhan_vien=$m_loai_nhan_vien->Doc_loai_nhan_vien_theo_ma_loai_nhan_vien($ma_loai_nhan_vien);
		}
		
		$hople=true;
		
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_loai_nhan_vien=$_POST["ten_loai_nhan_vien"];
			$ghi_chu=$_POST["ghi_chu"];
			if($ten_loai_nhan_vien=="")
			{
				echo "<script>alert('Tên loại nhân viên không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($ghi_chu=="")
			{
				echo "<script>alert('Ghi chú không bỏ trống')</script>";
				$hop_le=false;
			}
			if($hople)
			{
				$kq=$m_loai_nhan_vien->Sua_loai_nhan_vien($ten_loai_nhan_vien,$ghi_chu,$ma_loai_nhan_vien);
				echo "<script>alert('Sửa loại nhân viên thành công')</script>";	
				echo "<script>window.location='danh_sach_loai_nhan_vien.php'</script>";
			}
			else {
				echo "<script>alert('Sửa loại nhân viên bị lỗi')</script>";	
			}
		}
		
		$tieude="SỬA LOẠI NHÂN VIÊN";
		
		$view="views/loai_nhan_vien/v_sua_loai_nhan_vien.php";
		include("include/layout.php");
	}

}

?>