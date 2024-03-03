<?php
//`id`, `ten_huong_vi`, `ma_huong_vi`
include_once("database.php");
class M_huong_vi extends database{
	public function Doc_huong_vi(){
		$sql="select * from bk_huong_vi";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_huong_vi_theo_ma_huong_vi($id){
		$sql="select * from bk_huong_vi where id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
	
	public function Them_huong_vi($id,$ma_huong_vi,$ten_huong_vi){
		$sql="INSERT INTO bk_huong_vi VALUES(?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL",$ma_huong_vi,$ten_huong_vi));
	}
	
	public function Sua_huong_vi($ma_huong_vi,$ten_huong_vi,$id){
		 $sql="update bk_huong_vi set ma_huong_vi=?, ten_huong_vi=?  Where id=?";
		 $this->setQuery($sql);
		 return $this->execute(array($ma_huong_vi,$ten_huong_vi,$id));
	}
	public function Xoa_huong_vi($id){
		$sql="delete from bk_huong_vi where id=?";
	   	$this->setQuery($sql);
	   	return $this->execute(array($id));
	}
}
?>