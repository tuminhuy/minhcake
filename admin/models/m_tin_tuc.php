<?php
//`ma_tin_tuc`, `ten_tin_tuc`, `noi_dung_chi_tiet`, `hinh_anh`, `ngay_dang_tin`, `noi_dung_tom_tat`
include_once("database.php");
class M_tin_tuc extends database{
	public function Doc_tin_tuc(){
		$sql="select * from bk_tin_tuc";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	
	public function Doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc){
		$sql="select * from bk_tin_tuc where ma_tin_tuc=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_tin_tuc));	
	}
	
	public function Them_tin_tuc($ma_tin_tuc, $ten_tin_tuc, $noi_dung_chi_tiet, $hinh_anh, $ngay_dang_tin, $noi_dung_tom_tat){
		$sql="INSERT INTO bk_tin_tuc VALUES(?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL", $ten_tin_tuc, $noi_dung_chi_tiet, $hinh_anh, $ngay_dang_tin, $noi_dung_tom_tat));
	}

	public function Sua_tin_tuc($ten_tin_tuc, $noi_dung_chi_tiet, $hinh_anh, $ngay_dang_tin, $noi_dung_tom_tat,$ma_tin_tuc){
		$sql="update bk_tin_tuc set ten_tin_tuc=?, noi_dung_chi_tiet=?, hinh_anh=?, ngay_dang_tin=?, noi_dung_tom_tat=? where ma_tin_tuc=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_tin_tuc, $noi_dung_chi_tiet, $hinh_anh, $ngay_dang_tin, $noi_dung_tom_tat,$ma_tin_tuc));
	   }
	   
	 public function Xoa_tin_tuc($ma_tin_tuc){
		 $sql="delete from bk_tin_tuc where ma_tin_tuc=?";
		 $this->setQuery($sql);
		 return $this->execute(array($ma_tin_tuc));
	 }
}
?>