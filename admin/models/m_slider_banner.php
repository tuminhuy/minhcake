<?php
//`id`, `hinh`, `ten_slide`, `trang_thai`
include_once("database.php");
class M_slider_banner extends database{
	public function Doc_slider_banner(){
		$sql="select * from bk_slider_banner";
		$this->setQuery($sql);
		return $this->loadAllRows();
		}
		
	public function Doc_slider_banner_theo_ma_chu_de($id){
		$sql="select * from bk_slider_banner where id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}

	public function Them_slider_banner($id, $hinh, $ten_slide, $trang_thai){
		$sql="INSERT INTO bk_slider_banner VALUES(?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL",$hinh, $ten_slide, $trang_thai));
	}

	public function Sua_slider_banner($id, $hinh, $ten_slide, $trang_thai){
 		$sql="update bk_slider_banner set hinh=?,ten_slide=?,trang_thai=?  Where id=?";
  		$this->setQuery($sql);
  		return $this->execute(array( $hinh, $ten_slide, $trang_thai,$id));
	}
	public function Xoa_slider_banner($id){
 		$sql="delete from bk_slider_banner where id=?";
 		$this->setQuery($sql);
 		return $this->execute(array($id));
	}
}

?>