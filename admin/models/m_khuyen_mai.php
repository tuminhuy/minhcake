<?php
include_once("database.php");
//ma_khuyen_mai, ten_khuyen_mai, ngay_ap_dung, ngay_ket_thuc, chiet_khau
class M_khuyen_mai extends database{
	public function Doc_khuyen_mai(){
	  $sql="select * from bk_khuyen_mai";
	  $this->setQuery($sql);
	  return $this->loadAllRows();	
	}
	
	public function Doc_khuyen_mai_theo_ma_khuyen_mai($ma_khuyen_mai){
	  $sql="select * from bk_khuyen_mai where ma_khuyen_mai=?";
	  $this->setQuery($sql);
	  return $this->loadRow(array($ma_khuyen_mai));	
	}
	
	public function Them_khuyen_mai($ma_khuyen_mai, $ten_khuyen_mai, $ngay_ap_dung, $ngay_ket_thuc, $chiet_khau){
		$sql="INSERT INTO bk_khuyen_mai VALUES(?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL", $ten_khuyen_mai, $ngay_ap_dung, $ngay_ket_thuc, $chiet_khau));
	}

	public function Sua_khuyen_mai( $ten_khuyen_mai, $ngay_ap_dung, $ngay_ket_thuc, $chiet_khau,$ma_khuyen_mai){
		  $sql="update bk_khuyen_mai set ten_khuyen_mai=?, ngay_ap_dung=?, ngay_ket_thuc=?, chiet_khau=?  Where ma_khuyen_mai=?";
		  $this->setQuery($sql);
		  return $this->execute(array( $ten_khuyen_mai, $ngay_ap_dung, $ngay_ket_thuc, $chiet_khau,$ma_khuyen_mai));
	   }
	   public function Xoa_khuyen_mai($ma_khuyen_mai){
		   $sql="delete from bk_khuyen_mai where ma_khuyen_mai=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_khuyen_mai));
	   }
}
?>