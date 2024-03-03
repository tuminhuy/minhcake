<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-4 about-us">
				 <h3>Về chúng tôi</h3>
				 <p>Cung cấp các loại bánh v.v</p>
			 </div>
			 <div class="col-md-4 about-us">
					<h3>Thông tin</h3>
					<ul class="nav-bottom">
						<li><a href="dang_nhap">Đăng nhập</a></li>
						<li><a href="lien_he">Liên hệ</a></li>
						<li><a href="tin_tuc">Tin tức</a></li>
					</ul>					
			 </div>
			 <div class="col-md-4 about-us">
					<h3>Danh sách sản phẩm</h3>
					<ul class="nav-bottom">
							<?php
									foreach ($chu_de as $row) {
									?>
										<li><a href="san_pham.php?ma_chu_de=<?php echo $row->ma_chu_de ?>" name="chu_de" onclick="Tim_san_pham_theo_chu_de()" style="size:auto"><?php echo $row->ten_chu_de?> </a></li>
										<?php
									}
									?>
					</ul>					
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<div class="copywrite">
	 <div class="container">
		 <div class="copy">
			 <p>© 2017 Bakery.</p>
		 </div>
		 <div class="social">							
				<a href="https://www.facebook.com/"><i class="facebook"></i></a>
				<a href="https://www.twitter.com/"><i class="twitter"></i></a>
				<a href="https://www.google.com/"><i class="google"></i></a>	
				<a href="https://www.youtube.com/"><i class="youtube"></i></a>	
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>