<?php
include("database.php");
class M_don_hang extends database{
	function xem_don_hang(){
		$sql="select *,ten_khach_hang from bk_don_hang inner join bk_khach_hang on bk_don_hang.ma_khach_hang=bk_khach_hang.ma_khach_hang";	
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>