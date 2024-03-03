<?php
@session_start();
include("models/m_san_pham.php");
class C_san_pham{
	function Hien_thi_danh_sach_san_pham(){
		$san_pham=new M_san_pham();
		$san_phams=$san_pham->Doc_san_pham();
		
		include("Pager.php");
		$p=new pager();
		$limit=5;
		$count=count($san_phams);
		$vt=$p->findStart($limit);
		$pages=$p->findPages($count,$limit);
		$curpage=$_GET["page"];
		
		$lst=$p->pageList($curpage,$pages);
		$san_phams=$san_pham->Doc_san_pham($vt,$limit);
		
		$tieude="DANH SÁCH SẢN PHẨM";
		$view="views/san_pham/v_danh_sach_san_pham.php";	
		include("include/layout.php");	
	}
	
	function Them_san_pham()
	{
		$m_san_pham=new M_san_pham();
		$ma_chu_de= $ma_nhan_vien= $ma_khuyen_mai= $id= $ten_san_pham= $noi_dung_tom_tat= $noi_dung_chi_tiet= $so_luong= $hinh_anh= $don_gia= $ngay_them_san_pham="";
		$hople=true;
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_chu_de=$_POST["ma_chu_de"];
			$ma_nhan_vien=$_POST["ma_nhan_vien"];
			$ma_khuyen_mai=$_POST["ma_khuyen_mai"];
			$id=$_POST["id"];
			$ten_san_pham= $_POST["ten_san_pham"];
			$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
			$noi_dung_chi_tiet=$_POST["noi_dung_chi_tiet"];
			$so_luong=$_POST["so_luong"];
			$hinh_anh= $_FILES["hinh_anh"]["error"]==0?$_FILES["hinh_anh"]["name"]:"";
			$don_gia=$_POST["don_gia"]; 
			$ngay_them_san_pham=$_POST["ngay_them_san_pham"];
			if($ten_san_pham="")
			{
				echo "<script>alert('Tên sản phẩm không bỏ trống')</script>";
				$hop_le=false;	
			}
			else if($noi_dung_tom_tat="")
			{
				echo "<script>alert('Nội dung tóm tắt không bỏ trống')</script>";
				$hop_le=false;	
			}
			else if($noi_dung_chi_tiet="")
			{
				echo "<script>alert('Nội dung chi tiết không bỏ trống')</script>";
				$hop_le=false;	
			}
			else if($so_luong="")
			{
				echo "<script>alert('Số lượng không bỏ trống')</script>";
				$hop_le=false;	
			}
			else if($don_gia="")
			{
				echo "<script>alert('Đơn giá không bỏ trống')</script>";
				$hop_le=false;	
			}
			else if($ngay_them_san_pham="")
			{
				echo "<script>alert('Ngày thêm sản phẩm không bỏ trống')</script>";
				$hop_le=false;	
			}
			if($hople)
			{
				$kq=$m_san_pham->Them_san_pham("NULL", $ma_chu_de, $ma_nhan_vien, $ma_khuyen_mai, $id, $ten_san_pham, $noi_dung_tom_tat, $noi_dung_chi_tiet, $so_luong, $hinh_anh, $don_gia, $ngay_them_san_pham);
				if($kq)
				{
					// Di chuyển hình
					if($_FILES["hinh_anh"]["error"]==0) // Có chọn hình
					{
						$kq=move_uploaded_file($_FILES["hinh_anh"]["tmp_name"],"../images/$hinh_anh");
					}
					
					echo "<script>alert('Thêm sản phẩm thành công')</script>";	
					echo "<script>window.location='danh_sach_san_pham.php'</script>";				
				}
				else
				{
					echo "<script>alert('Thêm sản phẩm bị lỗi')</script>";
				}						
			}
		}
		include("models/m_chu_de.php");
		$m_chu_de=new M_chu_de();
		$chu_de=$m_chu_de->Doc_chu_de();
		
		include("models/m_nhan_vien.php");
		$m_nhan_vien=new M_nhan_vien();
		$nhan_vien=$m_nhan_vien->Doc_nhan_vien();
		
		include("models/m_khuyen_mai.php");
		$m_khuyen_mai=new M_khuyen_mai();
		$khuyen_mai=$m_khuyen_mai->Doc_khuyen_mai();

		include("models/m_huong_vi.php");
		$m_huong_vi=new M_huong_vi();
		$huong_vi=$m_huong_vi->Doc_huong_vi();	
	
		$tieude="THÊM SẢN PHẨM";
		$view="views/san_pham/v_them_san_pham.php";
		include("include/layout.php");	
	}
	
	function Sua_san_pham(){
		if(isset($_GET["ma_san_pham"]))
		{
			$ma_san_pham=$_GET["ma_san_pham"];
			$m_san_pham=new M_san_pham();
			$san_pham=$m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
		}
		
		$hople=true;
		
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_chu_de=$_POST["ma_chu_de"];
			$ma_nhan_vien=$_POST["ma_nhan_vien"];
			$ma_khuyen_mai=$_POST["ma_khuyen_mai"];
			$id=$_POST["id"];
			$ten_san_pham= $_POST["ten_san_pham"];
			$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
			$noi_dung_chi_tiet=$_POST["noi_dung_chi_tiet"];
			$so_luong=$_POST["so_luong"];
			$hinh_anh= $_FILES["hinh_anh"]["error"]==0?$_FILES["hinh_anh"]["name"]:"";
			$don_gia=$_POST["don_gia"]; 
			$ngay_them_san_pham=$_POST["ngay_them_san_pham"];
			if($ten_san_pham="")
			{
				echo "<script>alert('Tên sản phẩm không bỏ trống')</script>";
				$hop_le=false;	
			}
			else if($noi_dung_tom_tat="")
			{
				echo "<script>alert('Nội dung tóm tắt không bỏ trống')</script>";
				$hop_le=false;	
			}
			else if($noi_dung_chi_tiet="")
			{
				echo "<script>alert('Nội dung chi tiết không bỏ trống')</script>";
				$hop_le=false;	
			}
			else if($so_luong="")
			{
				echo "<script>alert('Số lượng không bỏ trống')</script>";
				$hop_le=false;	
			}
			else if($don_gia="")
			{
				echo "<script>alert('Đơn giá không bỏ trống')</script>";
				$hop_le=false;	
			}
			else if($ngay_them_san_pham="")
			{
				echo "<script>alert('Ngày thêm sản phẩm không bỏ trống')</script>";
				$hop_le=false;	
			}
			if($hople)
			{
				$kq=$m_san_pham->Sua_san_pham( $ma_chu_de, $ma_nhan_vien, $ma_khuyen_mai, $id, $ten_san_pham, $noi_dung_tom_tat, $noi_dung_chi_tiet, $so_luong, $hinh_anh, $don_gia, $ngay_them_san_pham,$ma_san_pham);
				if($kq)
				{
					// Di chuyển hình
					if($_FILES["hinh_anh"]["error"]==0) // Có chọn hình
					{
						$kq=move_uploaded_file($_FILES["hinh_anh"]["tmp_name"],"../images/san_pham/$hinh_anh");
					}
					
					echo "<script>alert('Sửa sản phẩm thành công')</script>";	
					echo "<script>window.location='danh_sach_san_pham.php'</script>";				
				}
				else
				{
					echo "<script>alert('Sửa sản phẩm bị lỗi')</script>";
				}						
			}
		}
		include("models/m_chu_de.php");
		$m_chu_de=new M_chu_de();
		$chu_de=$m_chu_de->Doc_chu_de();
		
		include("models/m_nhan_vien.php");
		$m_nhan_vien=new M_nhan_vien();
		$nhan_vien=$m_nhan_vien->Doc_nhan_vien();
		
		include("models/m_khuyen_mai.php");
		$m_khuyen_mai=new M_khuyen_mai();
		$khuyen_mai=$m_khuyen_mai->Doc_khuyen_mai();

		include("models/m_huong_vi.php");
		$m_huong_vi=new M_huong_vi();
		$huong_vi=$m_huong_vi->Doc_huong_vi();	
	
		$tieude="SỬA SẢN PHẨM";
		$view="views/san_pham/v_sua_san_pham.php";
		include("include/layout.php");
	}

}

?>