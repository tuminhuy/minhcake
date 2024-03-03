<object width="32" height="32">
</object>
<?php
//`ma_chu_de`, `ten_chu_de`
include_once("database.php");
class M_chu_de extends database{
	public function Doc_chu_de(){
		$sql="select * from bk_chu_de";
		$this->setQuery($sql);
		return $this->loadAllRows();
		}
		
	public function Doc_chu_de_theo_ma_chu_de($ma_chu_de){
		$sql="select * from bk_chu_de where ma_chu_de=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_chu_de));
	}

	public function Them_chu_de($ma_chu_de, $ten_chu_de){
		$sql="INSERT INTO bk_chu_de VALUES(?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL", $ten_chu_de));
	}

	public function Sua_chu_de( $ten_chu_de,$ma_chu_de){
		$sql="update bk_chu_de set ten_chu_de=?  Where ma_chu_de=?";
  		$this->setQuery($sql);
  		return $this->execute(array( $ten_chu_de,$ma_chu_de));
	}
	public function Xoa_chu_de($ma_chu_de){
 		$sql="delete from bk_chu_de where ma_chu_de=?";
 		$this->setQuery($sql);
 		return $this->execute(array($ma_chu_de));
	}
}

?>