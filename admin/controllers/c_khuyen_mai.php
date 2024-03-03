<?php
@session_start();
include("models/m_khuyen_mai.php");
class C_khuyen_mai{
	function Hien_thi_danh_sach_khuyen_mai(){
		$khuyen_mai=new M_khuyen_mai();
		$khuyen_mais=$khuyen_mai->Doc_khuyen_mai();
		$tieude="DANH SÁCH KHUYẾN MÃI";
		$view="views/khuyen_mai/v_danh_sach_khuyen_mai.php";		
		include("include/layout.php");
	}
	function Them_khuyen_mai()
	{
		
		$m_khuyen_mai=new M_khuyen_mai();
		$ten_khuyen_mai=$ngay_ap_dung=$ngay_ket_thuc=$chiet_khau="";
		$hople=true;
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_khuyen_mai=$_POST["ten_khuyen_mai"];
			$ngay_ap_dung=$_POST["ngay_ap_dung"];
			$ngay_ket_thuc=$_POST["ngay_ket_thuc"];
			$chiet_khau=$_POST["chiet_khau"];
			if($ten_khuyen_mai=="")
			{
				echo "<script>alert('Tên khuyến mãi không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($ngay_ap_dung=="")
			{
				echo "<script>alert('Ngày áp dụng không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($ngay_ket_thuc=="")
			{
				echo "<script>alert('Ngày kết thúc không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($chiet_khau=="")
			{
				echo "<script>alert('Chiết khấu không bỏ trống')</script>";
				$hop_le=false;
			}
			if($ngay_ap_dung < $ngay_ket_thuc)
			{
				echo "<script>alert('Ngày kết thúc không được trước ngày áp dụng')</script>";
				$hop_le=false;	
			}
			if($hople)
			{
				$kq=$m_khuyen_mai->Them_khuyen_mai("NULL", $ten_khuyen_mai, $ngay_ap_dung, $ngay_ket_thuc, $chiet_khau);
				echo "<script>alert('Thêm khuyến mãi thành công')</script>";	
				echo "<script>window.location='danh_sach_khuyen_mai.php'</script>";
			}
			else {
				echo "<script>alert('Thêm khuyến mãi bị lỗi')</script>";	
			}
		}
		
		$tieude="THÊM KHUYẾN MÃI";
		$view="views/khuyen_mai/v_them_khuyen_mai.php";
		include("include/layout.php");	
	}
	
	function Sua_khuyen_mai(){
		if(isset($_GET["ma_khuyen_mai"]))
		{
			$ma_khuyen_mai=$_GET["ma_khuyen_mai"];
			$m_khuyen_mai=new M_khuyen_mai();
			$khuyen_mai=$m_khuyen_mai->Doc_khuyen_mai_theo_ma_khuyen_mai($ma_khuyen_mai);
		}
		
		$hople=true;
		
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_khuyen_mai=$_POST["ten_khuyen_mai"];
			$ngay_ap_dung=$_POST["ngay_ap_dung"];
			$ngay_ket_thuc=$_POST["ngay_ket_thuc"];
			$chiet_khau=$_POST["chiet_khau"];
			if($ten_khuyen_mai=="")
			{
				echo "<script>alert('Tên khuyến mãi không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($chiet_khau=="")
			{
				echo "<script>alert('Chiết khấu không bỏ trống')</script>";
				$hop_le=false;
			}
			if($hople)
			{
				$kq=$m_khuyen_mai->Sua_khuyen_mai( $ten_khuyen_mai, $ngay_ap_dung, $ngay_ket_thuc, $chiet_khau,$ma_khuyen_mai);
				echo "<script>alert('Sửa khuyến mãi thành công')</script>";	
				echo "<script>window.location='danh_sach_khuyen_mai.php'</script>";
			}
			else {
				echo "<script>alert('Sửa hương vị bị lỗi')</script>";	
			}
		}
		
		$tieude="SỬA KHUYẾN MÃI";
		$view="views/khuyen_mai/v_sua_khuyen_mai.php";
		include("include/layout.php");
	}
	
}

?>