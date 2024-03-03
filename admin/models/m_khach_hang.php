<?php
include_once("database.php");
//ma_khach_hang, ten_khach_hang, dia_chi, sdt, gioi_tinh, email, username, password, so_tien
class M_khach_hang extends database{
	public function Doc_khach_hang(){
		$sql="select * from  bk_khach_hang";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang){
		$sql="select * from bk_khach_hang where ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_khach_hang));
	}
		
	public function Them_khach_hang($ma_khach_hang, $ten_khach_hang, $dia_chi, $sdt, $gioi_tinh, $email, $username, $password, $so_tien){
		$sql="INSERT INTO bk_khach_hang VALUES(?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL", $ten_khach_hang, $dia_chi, $sdt, $gioi_tinh, $email, $username, $password, $so_tien));
	}

	public function Sua_khach_hang($ten_khach_hang, $dia_chi, $sdt, $gioi_tinh, $email, $username, $password, $so_tien,$ma_khach_hang){
		  $sql="update bk_chu_de set ten_khach_hang=?, dia_chi=?, sdt=?, gioi_tinh=?, email=?, username=?, password=?, so_tien=?  Where ma_khach_hang=?";
		  $this->setQuery($sql);
		  return $this->execute(array( $ten_khach_hang, $dia_chi, $sdt, $gioi_tinh, $email, $username, $password, $so_tien,$ma_khach_hang));
	   }
	   
	   public function Xoa_khach_hang($ma_khach_hang){
		   $sql="delete from bk_khach_hang where ma_khach_hang=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_khach_hang));
	   }
}
?>