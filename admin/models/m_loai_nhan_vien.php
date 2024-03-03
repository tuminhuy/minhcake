<?php
//ma_loai_nhan_vien, ten_loai_nhan_vien, ghi_chu
include_once("database.php");
class M_loai_nhan_vien extends database{

	public function Doc_loai_nhan_vien(){
		$sql="select * from bk_loai_nhan_vien ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_loai_nhan_vien_theo_ma_loai_nhan_vien($ma_loai_nhan_vien){
		$sql="select * from bk_loai_nhan_vien where ma_loai_nhan_vien=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai_nhan_vien));
	}
	
	public function Them_loai_nhan_vien($ma_loai_nhan_vien, $ten_loai_nhan_vien,$ghi_chu){
		$sql="INSERT INTO bk_loai_nhan_vien VALUES(?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL", $ten_loai_nhan_vien,$ghi_chu));
	}

	public function Sua_loai_nhan_vien( $ten_loai_nhan_vien,$ghi_chu,$ma_loai_nhan_vien){
		$sql="update bk_loai_nhan_vien set ten_loai_nhan_vien=?,ghi_chu=?  Where ma_loai_nhan_vien=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_loai_nhan_vien,$ghi_chu,$ma_loai_nhan_vien));
	}
	
	public function Xoa_loai_nhan_vien($ma_loai_nhan_vien){
		 $sql="delete from bk_loai_nhan_vien where ma_loai_nhan_vien=?";
		 $this->setQuery($sql);
		 return $this->execute(array($ma_loai_nhan_vien));
	 }
}
	?>