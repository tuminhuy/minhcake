<div class="tab-content default-tab" id="tab1">
  <h3><?php echo $tieude ?></h3>
  <form method="post" enctype="multipart/form-data">
    <fieldset>
      <p>
        <label>Tên chủ đề</label>
        <select class="text-input small-input kiemtra" data_error="Chọn tên chủ đề" id="ma_chu_de" name="ma_chu_de" value="">
        <option><?php echo $san_pham->ma_chu_de ?> - <?php echo $san_pham->ten_chu_de ?></option>
          <?php
		  foreach ($chu_de as $cd)
		  {
		?>
          <option><?php echo $cd->ma_chu_de ?> - <?php echo $cd->ten_chu_de ?></option>
          <?php
		  }
		  ?>
        </select>
      </p>
      <p>
        <label>Tên nhân viên</label>
        <select class="text-input small-input kiemtra" data_error="Chọn tên nhân viên" id="ma_nhan_viên" name="ma_nhan_vien" >
        <option><?php echo $san_pham->ma_nhan_vien ?> - <?php echo $san_pham->ten_nhan_vien ?></option>
          <?php
		  foreach ($nhan_vien as $nv)
		  {
		?>
          <option><?php echo $nv->ma_nhan_vien ?> - <?php echo $nv->ten_nhan_vien ?></option>
          <?php
		  }
		  ?>
        </select>
      </p>
      <p>
        <label>Tên khuyến mãi</label>
        <select class="text-input small-input kiemtra" data_error="Chọn tên khuyến mãi" id="ma_khuyen_mai" name="ma_khuyen_mai" >
        <option><?php echo $san_pham->ma_khuyen_mai ?> - <?php echo $san_pham->ten_khuyen_mai ?></option>
          <?php
		  foreach ($khuyen_mai as $km)
		  {
		?>
          <option><?php echo $km->ma_khuyen_mai ?> - <?php echo $km->ten_khuyen_mai?></option>
          <?php
		  }
		  ?>
        </select>
      </p>
      <p>
        <label>Tên hương vị</label>
        <select class="text-input small-input kiemtra" data_error="Chọn tên hương vị" id="id" name="id" >
        <option><?php echo $san_pham->id ?> - <?php echo $san_pham->ten_huong_vi ?></option>
          <?php
		  foreach ($huong_vi as $hv)
		  {
		?>
          <option><?php echo $hv->id ?> - <?php echo $hv->ten_huong_vi?></option>
          <?php
		  }
		  ?>
        </select>
      </p>
      <p>
        <label>Tên sản phẩm</label>
        <input class="text-input small-input kiemtra" data_error="Nhập tên sản phẩm" type="text" id="ten_san_pham" name="ten_san_pham" value="<?php echo $san_pham->ten_san_pham ?>" />
      </p>
      <p>
        <label>Nội dung tóm tắt</label>
        <textarea name="noi_dung_tom_tat" cols="50" rows="3" class="text-input textarea wysiwyg " id="medium-input"><?php echo $san_pham->noi_dung_tom_tat ?></textarea>
      </p>
      <p>
        <label>Nội dung chi tiết</label>
        <textarea name="noi_dung_chi_tiet" cols="50" rows="5" class="text-input large-input ckeditor" id="noi_dung_chi_tiet"><?php echo $san_pham->noi_dung_chi_tiet ?></textarea>
      </p>
      <p>
        <label>Số lượng</label>
        <input class="text-input small-input kiemtra" data_error="Nhập số lượng sản phẩm" type="text" id="so_luong" name="so_luong" value="<?php echo $san_pham->so_luong ?>" />
      </p>
      <p>
        <label>Chọn hình tin tức</label>
        <input type="file" name="hinh_anh" id="hinh_anh" />
      <div class="image-holder" id="image-holder"></div>
      </p>
      <p>
        <label>Đơn giá</label>
        <input class="text-input small-input kiemtra" data_error="Nhập đơn giá sản phẩm" type="text" id="don_gia" name="don_gia" value="<?php echo number_format($san_pham->don_gia) ?> đồng" />
      </p>
      <p>
        <label>Ngày thêm sản phẩm</label>
        <input class="text-input small-input datepicker" type="date" id="ngay_them_san_pham" name="ngay_them_san_pham" value="<?php echo $san_pham->ngay_them_san_pham ?>"/>
      </p>
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
        <input class="button" type="button" value="Bỏ qua" onclick="window.location='danh_sach_san_pham.php'" />
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
