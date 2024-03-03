<?php
@session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
include("controllers/c_gio_hang.php");
$c_dat_hang=new C_gio_hang();
$key = $_POST['ma_san_pham'];
$soLuong = ((int)$_POST['soluong']);
$donGia = ((double)$_POST['dongia']);

if($soLuong>=0 && $donGia>0)
   $c_dat_hang->themGioHang($key, $soLuong, $donGia);

$arrGioHang = array('sl'=>$c_dat_hang->so_luong(), 'st'=>number_format($c_dat_hang->thanh_tien()));
$title="Bakery | Đặt hàng";
$view="views/v_mua_hang.php";
include("include/layout_2.php");
$dat_hang=$c_dat_hang->dat_hang();

?>
