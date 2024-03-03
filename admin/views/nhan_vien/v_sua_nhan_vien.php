<div class="tab-content default-tab" id="tab1"> 
<h3><?php echo $tieude ?></h3>
  <!--`ma_nhan_vien`, `ma_loai_nhan_vien`, `ten_nhan_vien`, `dia_chi`, `sdt`, `gioi_tinh`, `username`, `password`, `email`-->
  <form method="post" enctype="multipart/form-data">
    <fieldset>
      <p>
        <label>Mã loại nhân viên</label>
        <select class="text-input small-input kiemtra" data_error="Chọn mã loại nhân viên" id="ma_loai_nhan_vien" name="ma_loai_nhan_vien" >
        <?php
		  foreach ($loai_nhan_viens as $lnv)
		  {
		?>
        <option><?php echo $lnv->ma_loai_nhan_vien ?></option>
        <?php
		  }
		  ?>
        </select>
      </p>
      <p>
        <label>Tên nhân viên</label>
        <input class="text-input small-input kiemtra" data_error="Nhập tên nhân viên" type="text" id="ten_nhan_vien" name="ten_nhan_vien" value="<?php echo $nhan_vien->ten_nhan_vien; ?>"/>
      </p>
      <p>
        <label>Địa chỉ</label>
        <textarea name="dia_chi" cols="50" rows="3" class="text-input textarea wysiwyg " id="medium-input" ><?php echo $nhan_vien->dia_chi; ?></textarea>
      </p>
      <p>
        <label>Số điện thoại</label>
        <input class="text-input small-input kiemtra" data_error="Nhập số điện thoại" type="text" id="sdt" name="sdt" value="<?php echo $nhan_vien->sdt; ?>"/>
      </p>
      <p>
        <label>Giới tính</label>
        <input class="text-input small-input" type="checkbox" checked="checked" id="gioi_tinh" name="gioi_tinh" />Nam
        <input class="text-input small-input" type="checkbox" id="gioi_tinh" name="gioi_tinh" />Nữ
      </p>
      <p>
        <label>Username</label>
        <input class="text-input small-input" type="text" id="username" name="username" value="<?php echo $nhan_vien->username; ?>"/>
      </p>
         <p>
        <label>Password</label>
        <input class="text-input small-input" type="password" id="password" name="password" value="<?php echo $nhan_vien->password; ?>"/>
      </p>
         <p>
        <label>Email</label>
        <input class="text-input small-input" type="text" id="email" name="email" value="<?php echo $nhan_vien->email; ?>"/>
      </p>
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
        <input class="button" type="button" value="Bỏ qua" onclick="window.location='tintuc.php'" />
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
