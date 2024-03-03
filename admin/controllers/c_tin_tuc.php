<?php
@session_start();
include("models/m_tin_tuc.php");
class C_tin_tuc{
	function Hien_thi_danh_sach_tin_tuc(){
		$tin_tuc=new M_tin_tuc();
		$tin_tucs=$tin_tuc->Doc_tin_tuc();
		$tieude="DANH SÁCH TIN TỨC";
		$view="views/tin_tuc/v_danh_sach_tin_tuc.php";	
		include("include/layout.php");	
	}
	
	function Them_tin_tuc()
	{
		$m_tin_tuc=new M_tin_tuc();
		$ten_tin_tuc=$noi_dung_chi_tiet=$hinh_anh=$ngay_dang_tin=$noi_dung_tom_tat="";
		$hople=true;
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_tin_tuc=$_POST["ten_tin_tuc"];
			$noi_dung_chi_tiet=$_POST["noi_dung_chi_tiet"];
			$hinh_anh=$_FILES["hinh_anh"]["error"]==0?$_FILES["hinh_anh"]["name"]:"";
			$ngay_dang_tin=$_POST["ngay_dang_tin"];
			$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
			if($ten_tin_tuc=="")
			{
				echo "<script>alert('Tên tin tức không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($noi_dung_chi_tiet=="")
			{
				echo "<script>alert('Nội dung chi tiết không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($noi_dung_tom_tat=="")
			{
				echo "<script>alert('Nội dung tóm tắt không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($ngay_dang_tin=="")
			{
				echo "<script>alert('Ngày đăng tin không bỏ trống')</script>";
				$hop_le=false;
			}
			if($hople)
			{
				$kq=$m_tin_tuc->Them_tin_tuc("NULL", $ten_tin_tuc, $noi_dung_chi_tiet, $hinh_anh, $ngay_dang_tin, $noi_dung_tom_tat);
				if($kq)
				{
					// Di chuyển hình
					if($_FILES["hinh_anh"]["error"]==0) // Có chọn hình
					{
						$kq=move_uploaded_file($_FILES["hinh_anh"]["tmp_name"],"../public/images/tin_tuc/$hinh_anh");
					}
					
					echo "<script>alert('Thêm tin tức thành công')</script>";	
					echo "<script>window.location='danh_sach_tin_tuc.php'</script>";				
				}
				else
				{
					echo "<script>alert('Thêm tin tức bị lỗi')</script>";
				}						
			}
		}

		$tieude="THÊM TIN TỨC";
		$view="views/tin_tuc/v_them_tin_tuc.php";
		include("include/layout.php");	
	}
	
	function Sua_tin_tuc(){
		if(isset($_GET["ma_tin_tuc"]))
		{			
			$ma_tin_tuc=$_GET["ma_tin_tuc"];
			$m_tin_tuc=new M_tin_tuc();
			$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc);
		}
		
		$hople=true;
		
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_tin_tuc=$_POST["ten_tin_tuc"];
			$noi_dung_chi_tiet=$_POST["noi_dung_chi_tiet"];
			$hinh_anh=$_FILES["hinh_anh"]["error"]==0?$_FILES["hinh_anh"]["name"]:$tin_tuc->hinh_anh;
			$ngay_dang_tin=$_POST["ngay_dang_tin"];
			$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
			if($hople)
			{
				$kq=$m_tin_tuc->Sua_tin_tuc($ten_tin_tuc, $noi_dung_chi_tiet, $hinh_anh, $ngay_dang_tin, $noi_dung_tom_tat,$ma_tin_tuc);
				if($kq)
				{
					// Di chuyển hình
					if($_FILES["hinh_anh"]["error"]==0) // Có chọn hình
					{
						$kq=move_uploaded_file($_FILES["hinh_anh"]["tmp_name"],"../images/tin_tuc/$hinh_anh");
					}
					
					echo "<script>alert('Sửa tin tức thành công')</script>";	
					echo "<script>window.location='danh_sach_tin_tuc.php'</script>";				
				}
				else
				{
					echo "<script>alert('Sửa tin tức bị lỗi')</script>";
				}						
			}
		
		}
		$tieude="SỬA TIN TỨC";
		$view="views/tin_tuc/v_sua_tin_tuc.php";
		include("include/layout.php");
	}
}

?>