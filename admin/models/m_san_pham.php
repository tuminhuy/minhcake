<?php
include_once("database.php");
//`ma_san_pham`, `ma_chu_de`, `ma_nhan_vien`, `ma_khuyen_mai`, `id`, `ten_san_pham`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `so_luong`, `hinh_anh`, `don_gia`, `ngay_them_san_pham`
class M_san_pham extends database{
	public function Doc_san_pham($vt=-1,$limit=-1){
	  $sql="SELECT bk_san_pham.*,ten_chu_de,ten_nhan_vien,ten_khuyen_mai,ten_huong_vi from bk_san_pham inner join bk_chu_de on bk_san_pham.ma_chu_de=bk_chu_de.ma_chu_de
inner join bk_nhan_vien on bk_san_pham.ma_nhan_vien=bk_nhan_vien.ma_nhan_vien
inner join bk_khuyen_mai on bk_san_pham.ma_khuyen_mai=bk_khuyen_mai.ma_khuyen_mai
inner join bk_huong_vi on bk_san_pham.id=bk_huong_vi.id order by ma_san_pham desc";
	if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
	  $this->setQuery($sql);
	  return $this->loadAllRows();	
	}
	
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham){
	  $sql="SELECT bk_san_pham.*,ten_chu_de,ten_nhan_vien,ten_khuyen_mai,ten_huong_vi from bk_san_pham inner join bk_chu_de on bk_san_pham.ma_chu_de=bk_chu_de.ma_chu_de
inner join bk_nhan_vien on bk_san_pham.ma_nhan_vien=bk_nhan_vien.ma_nhan_vien
inner join bk_khuyen_mai on bk_san_pham.ma_khuyen_mai=bk_khuyen_mai.ma_khuyen_mai
inner join bk_huong_vi on bk_san_pham.id=bk_huong_vi.id
 where ma_san_pham=?";
	  $this->setQuery($sql);
	  return $this->loadRow(array($ma_san_pham));	
	}
	public function Them_san_pham($ma_san_pham, $ma_chu_de, $ma_nhan_vien, $ma_khuyen_mai, $id, $ten_san_pham, $noi_dung_tom_tat, $noi_dung_chi_tiet, $so_luong, $hinh_anh, $don_gia, $ngay_them_san_pham)
	{
		$sql="Insert into bk_san_pham values(?,?,?,?,?,?,?,?,?,?,?,?)";	
		$this->setQuery($sql);
		return $this->execute(array("NULL", $ma_chu_de, $ma_nhan_vien, $ma_khuyen_mai, $id, $ten_san_pham, $noi_dung_tom_tat, $noi_dung_chi_tiet, $so_luong, $hinh_anh, $don_gia, $ngay_them_san_pham));
	}
	
	public function Sua_san_pham( $ma_chu_de, $ma_nhan_vien, $ma_khuyen_mai, $id, $ten_san_pham, $noi_dung_tom_tat, $noi_dung_chi_tiet, $so_luong, $hinh_anh, $don_gia, $ngay_them_san_pham,$ma_san_pham)
	{
		$sql="Update bk_san_pham set ma_chu_de=?, ma_nhan_vien=? , ma_khuyen_mai=? , id=?, ten_san_pham=?, noi_dung_tom_tat=?, noi_dung_chi_tiet=?, so_luong=?, hinh_anh=?, don_gia=?, ngay_them_san_pham=? where ma_san_pham=?";	
		$this->setQuery($sql);
		return $this->execute(array( $ma_chu_de, $ma_nhan_vien, $ma_khuyen_mai, $id, $ten_san_pham, $noi_dung_tom_tat, $noi_dung_chi_tiet, $so_luong, $hinh_anh, $don_gia, $ngay_them_san_pham,$ma_san_pham));
	}
	public function Xoa_san_pham($ma_san_pham)
	{
		$sql="Delete from bk_san_pham where ma_san_pham=?";	
		$this->setQuery($sql);
		return $this->execute(array($ma_san_pham));
	}
	public function Tim_san_pham_theo_ten($gtTim)
	{
		$sql="select *,ten_chu_de,ten_huong_vi from bk_san_pham inner join bk_chu_de on bk_san_pham.ma_chu_de=bk_chu_de.ma_chu_de
		inner join bk_huong_vi on bk_san_pham.id=bk_huong_vi.id
		 where ten_san_pham like '%$gtTim%' ";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
}
?>