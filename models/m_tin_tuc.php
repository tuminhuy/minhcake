<?php
require_once("database.php");
class M_tin_tuc extends database{
	function Doc_tin_tuc(){
		$sql="select * from bk_tin_tuc";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc)
	{
		$sql="select * from bk_tin_tuc where ma_tin_tuc=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_tin_tuc));	
	}
}
?>