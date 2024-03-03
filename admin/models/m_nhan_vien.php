<?php
//ma_nhan_vien, ma_loai_nhan_vien, ten_nhan_vien, dia_chi, sdt, gioi_tinh, username, password, email
require_once("database.php");
class M_nhan_vien extends database{
	function Doc_nhan_vien_theo_tenDn_pass($ten,$mk)
	{
		$sql="select * from bk_nhan_vien where username=? and password=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ten,md5($mk)));	
	}	
	public function Doc_nhan_vien(){
		$sql="select bk_nhan_vien.*,ten_loai_nhan_vien from bk_nhan_vien inner join bk_loai_nhan_vien on bk_nhan_vien.ma_loai_nhan_vien=bk_loai_nhan_vien.ma_loai_nhan_vien order by ma_nhan_vien";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_nhan_vien_theo_ma_nhan_vien($ma_nhan_vien){
		$sql="select * from bk_nhan_vien where ma_nhan_vien=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_nhan_vien));
	}

	public function Them_nhan_vien($ma_nhan_vien,$ma_loai_nhan_vien, $ten_nhan_vien, $dia_chi, $sdt, $gioi_tinh, $username, $password, $email){
		$sql="INSERT INTO bk_nhan_vien VALUES(?,?,?,?,?,?,?,?,?) ";
		$this->setQuery($sql);
		return $this->execute(array("NULL", $ma_loai_nhan_vien, $ten_nhan_vien, $dia_chi, $sdt, $gioi_tinh, $username, $password, $email));
	}

	public function Sua_nhan_vien($ma_loai_nhan_vien, $ten_nhan_vien, $dia_chi, $sdt, $gioi_tinh, $username, $password, $email,$ma_nhan_vien){
		  $sql="update bk_nhan_vien set ma_loai_nhan_vien=?, ten_nhan_vien=?, dia_chi=?, sdt=?, gioi_tinh=?,  username=?, password=?, email=?  Where ma_nhan_vien=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ma_loai_nhan_vien, $ten_nhan_vien, $dia_chi, $sdt, $gioi_tinh, $username, $password, $email,$ma_nhan_vien));
	   }
	   
	   public function Xoa_nhan_vien($ma_nhan_vien){
		   $sql="delete from bk_nhan_vien where ma_nhan_vien=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_nhan_vien));
	   }
}
?>