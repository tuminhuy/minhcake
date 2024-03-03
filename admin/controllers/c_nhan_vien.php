<?php
@session_start();
include("models/m_nhan_vien.php");
class C_nhan_vien{
	function Hien_thi_dang_nhap()
	{
		
		if(isset($_POST["login"]))
		{
			$ten=$_POST["ten_dang_nhap"];
			$mk=$_POST["mat_khau"];
			$this->luu_dang_nhap($ten,$mk);

		}
		if(isset($_SESSION["ten_nhan_vien"]) )
		{
			$title="Quản lý Bakery";
			include("include/layout.php");	
		}
		else
		{
			$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
			header("location:login.php");	
		}
	}
	function thoat_dang_nhap()
	{
		session_destroy();
		header("location:login.php");	
	}
	function luu_dang_nhap($ten,$mk)
	{
		$m_nhan_vien=new M_nhan_vien();
		$nhan_vien=$m_nhan_vien->Doc_nhan_vien_theo_tenDn_pass($ten,$mk);
		$_SESSION['ten_nhan_vien']=$nhan_vien->ten_nhan_vien;
	}
	
	 function Hien_thi_danh_sach_nhan_vien(){
		$m_nhan_vien= new M_nhan_vien();
		$nhan_viens=$m_nhan_vien->Doc_nhan_vien();
		$tieude="DANH SÁCH NHÂN VIÊN";
		$view="views/nhan_vien/v_danh_sach_nhan_vien.php";
		include("include/layout.php");	
	}

	function Them_nhan_vien()
	{
		$m_nhan_vien=new M_nhan_vien();
		$ma_loai_nhan_vien=$ten_nhan_vien=$dia_chi=$sdt=$gioi_tinh=$username=$password=$email="";
		$hople=true;
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_loai_nhan_vien=$_POST["ma_loai_nhan_vien"];
			$ten_nhan_vien=$_POST["ten_nhan_vien"];
			$dia_chi=$_POST["dia_chi"];
			$sdt=$_POST["sdt"];
			$gioi_tinh=$_POST["gioi_tinh"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			$email=$_POST["email"];
			if($ten_nhan_vien=="")
			{
				echo "<script>alert('Tên nhân viên không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($dia_chi=="")
			{
				echo "<script>alert('Địa chỉ không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($sdt=="" || !is_numeric($sdt))
			{
				echo "<script>alert('Số điện thoại không được bỏ và chỉ được nhập số')</script>";
				$hop_le=false;
			}
			else if($username=="")
			{
				echo "<script>alert('Username không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($password=="")
			{
				echo "<script>alert('Password không bỏ trống')</script>";
				$hop_le=false;
			}
			if($hople)
			{
				$kq=$m_nhan_vien->Them_nhan_vien("NULL", $ma_loai_nhan_vien, $ten_nhan_vien, $dia_chi, $sdt, $gioi_tinh, $username, $password, $email);
				echo "<script>alert('Thêm loại nhân viên thành công')</script>";
				echo "<script>window.location='danh_sach_nhan_vien.php'</script>";	
			}
			else {
				echo "<script>alert('Thêm loại nhân viên bị lỗi')</script>";	
			}
		}
		
		include("../../admins/controllers/models/m_loai_nhan_vien.php");
		$m_loai_nhan_vien= new M_loai_nhan_vien();
	  	$loai_nhan_viens=$m_loai_nhan_vien->Doc_loai_nhan_vien();
		
		$tieude="THÊM NHÂN VIÊN";
		$view="views/nhan_vien/v_them_nhan_vien.php";
		include("include/layout.php");	
	}
	
	function Sua_nhan_vien(){
		if(isset($_GET["ma_nhan_vien"]))
		{
			
			$ma_nhan_vien=$_GET["ma_nhan_vien"];
			$m_nhan_vien=new M_nhan_vien();
			$nhan_vien=$m_nhan_vien->Doc_nhan_vien_theo_ma_nhan_vien($ma_nhan_vien);
		}
		
		$hople=true;
		
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_loai_nhan_vien=$_POST["ma_loai_nhan_vien"];
			$ten_nhan_vien=$_POST["ten_nhan_vien"];
			$dia_chi=$_POST["dia_chi"];
			$sdt=$_POST["sdt"];
			$gioi_tinh=$_POST["gioi_tinh"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			$email=$_POST["email"];
			if($ten_nhan_vien=="")
			{
				echo "<script>alert('Tên nhân viên không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($dia_chi=="")
			{
				echo "<script>alert('Địa chỉ không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($username=="")
			{
				echo "<script>alert('Username không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($password=="")
			{
				echo "<script>alert('Password không bỏ trống')</script>";
				$hop_le=false;
			}
			else if($email=="")
			{
				echo "<script>alert('Email không bỏ trống')</script>";
				$hop_le=false;
			}
			if($hople)
			{
				$kq=$m_nhan_vien->Sua_nhan_vien($ma_loai_nhan_vien, $ten_nhan_vien, $dia_chi, $sdt, $gioi_tinh, $username, $password, $email,$ma_nhan_vien);
				echo "<script>alert('Sửa nhân viên thành công')</script>";
				echo "<script>window.location='danh_sach_nhan_vien.php'</script>";	
			}
			else {
				echo "<script>alert('Thêm loại nhân viên bị lỗi')</script>";	
			}
		
		}
		include("models/m_loai_nhan_vien.php");
		$m_loai_nhan_vien= new M_loai_nhan_vien();
	  	$loai_nhan_viens=$m_loai_nhan_vien->Doc_loai_nhan_vien();
		$tieude="SỬA NHÂN VIÊN";
		$view="views/nhan_vien/v_sua_nhan_vien.php";
		include("include/layout.php");
	}
}

?>