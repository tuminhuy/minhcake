<?php
include_once("database.php");
//`ma_san_pham`, `ma_chu_de`, `ma_nhan_vien`, `ma_khuyen_mai`, `id`, `ten_san_pham`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `so_luong`, `hinh_anh`, `don_gia`, `ngay_them_san_pham`
class M_san_pham extends database{
	public function Doc_san_pham($vt=-1,$limit=-1){
	  $sql="SELECT *,chiet_khau from bk_san_pham inner join bk_khuyen_mai on bk_san_pham.ma_khuyen_mai=bk_khuyen_mai.ma_khuyen_mai ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
	  $this->setQuery($sql);
	  return $this->loadAllRows();	
	}
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham){
	  $sql="SELECT bk_san_pham.*,ten_chu_de,ten_nhan_vien,ten_khuyen_mai,ten_huong_vi, chiet_khau from bk_san_pham inner join bk_chu_de on bk_san_pham.ma_chu_de=bk_chu_de.ma_chu_de
inner join bk_nhan_vien on bk_san_pham.ma_nhan_vien=bk_nhan_vien.ma_nhan_vien
inner join bk_khuyen_mai on bk_san_pham.ma_khuyen_mai=bk_khuyen_mai.ma_khuyen_mai
inner join bk_huong_vi on bk_san_pham.id=bk_huong_vi.id
 where ma_san_pham=?";
	  $this->setQuery($sql);
	  return $this->loadRow(array($ma_san_pham));	
	}
	
	public function Doc_san_pham_theo_ma_khuyen_mai(){
	  $sql="SELECT ten_san_pham,don_gia, hinh_anh,chiet_khau,ten_khuyen_mai FROM bk_khuyen_mai inner join bk_san_pham on bk_khuyen_mai.ma_khuyen_mai=bk_san_pham.ma_khuyen_mai order by chiet_khau desc limit 0,8 ";
	  $this->setQuery($sql);
	  return $this->loadAllRows();	
	}
	
	public function Doc_san_pham_theo_ngay_them(){
	  $sql="SELECT ten_san_pham,don_gia, hinh_anh,chiet_khau,ten_khuyen_mai FROM `bk_khuyen_mai` inner join bk_san_pham on bk_khuyen_mai.ma_khuyen_mai=bk_san_pham.ma_khuyen_mai order by ngay_them_san_pham desc limit 0,8";
	  $this->setQuery($sql);
	  return $this->loadAllRows();	
	}
	
	public function Doc_chu_de(){
		$sql="select * from bk_chu_de group by ma_chu_de";
		$this->setQuery($sql);
		return $this->loadAllRows();
		}
		
	public function Doc_san_pham_cung_chu_de($ma_chu_de,$ma_san_pham,$vt=-1,$limit=-1)
	{
		$sql="select * from bk_san_pham where ma_chu_de=? and ma_san_pham!=? ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_chu_de,$ma_san_pham));	
	}
		
	public function Doc_khuyen_mai(){
	  $sql="select * from bk_khuyen_mai group by chiet_khau";
	  $this->setQuery($sql);
	  return $this->loadAllRows();	
	}
		
	public function Doc_huong_vi(){
		$sql="select * from bk_huong_vi group by ten_huong_vi";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Tim_san_pham_theo_chu_de($ma_chu_de)
	{
		$sql="select *,chiet_khau from bk_san_pham inner join bk_khuyen_mai on bk_san_pham.ma_khuyen_mai=bk_khuyen_mai.ma_khuyen_mai where ma_chu_de like '$ma_chu_de'";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Tim_san_pham_theo_khuyen_mai($chiet_khau)
	{
		$sql="select *,chiet_khau from bk_khuyen_mai inner join bk_san_pham on bk_san_pham.ma_khuyen_mai=bk_khuyen_mai.ma_khuyen_mai where chiet_khau like '$chiet_khau'";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Tim_san_pham_theo_huong_vi($huong_vi)
	{
		$sql="select *,ten_huong_vi,chiet_khau from bk_san_pham inner join bk_huong_vi on bk_san_pham.id=bk_huong_vi.id inner join bk_khuyen_mai on bk_san_pham.ma_khuyen_mai=bk_khuyen_mai.ma_khuyen_mai where ten_huong_vi like '$huong_vi'";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function lay_san_pham_cho_gio_hang($chuoi)
	{
		$query="Select * from bk_san_pham where ma_san_pham in($chuoi)";
		$this->setQuery($query);
		return $this->loadAllRows();
	}	
	
}
?>