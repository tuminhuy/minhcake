<?php
@session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
include_once("models/database.php");
$sql="select * from bk_chu_de";
$db=new database();
$db->setQuery($sql);
$chu_de=$db->loadAllRows();
?>

<div class="header-top">
<div class="dangnhap">
<?php
if($_SESSION["ten_khach_hang"])
{
?>
<p>Chào bạn <?php echo $_SESSION["ten_khach_hang"]?> /<a href="dang_nhap.php?func=exit" class="#">Thoát</a><p>
<?php
}
else
{
?>
<p><a href="dang_nhap" class="#">Đăng nhập</a>/<a href="dang_ky" class="#">Đăng ký</a><p>
<?php
}
?>
</div>
<div class="clearfix"> </div>
	 <div class="header-bottom">			
				<div class="logo">
					<h1><a href="trang_chu">BakeryStore</a></h1>					
				</div>
			 <!---->		 
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="trang_chu">Trang chủ</a></li>
					<li class="grid"><a href="san_pham.php">Sản phẩm</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<ul>
									<?php
									foreach ($chu_de as $row) {
									?>
										<li><a href="san_pham.php?ma_chu_de=<?php echo $row->ma_chu_de ?>" name="chu_de" onclick="Tim_san_pham_theo_chu_de()" style="size:auto"><?php echo $row->ten_chu_de?> </a></li>
										<?php
									}
									?>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="tin_tuc">Tin tức</a></li>
					<li class="grid"><a href="lien_he">Liên hệ</a></li>	
					<li class="grid"><a href="gio_hang">Giỏ hàng</a></li>					
				</ul>				
			 </div>		 
			 </div>
			<div class="clearfix"> </div>
</div>