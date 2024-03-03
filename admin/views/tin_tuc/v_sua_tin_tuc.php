<div class="tab-content default-tab" id="tab1">
  <h3><?php echo $tieude ?></h3>
  <!--`ma_tin_tuc`, `ten_tin_tuc`, `noi_dung_chi_tiet`, `hinh_anh`, `ngay_dang_tin`, `noi_dung_tom_tat`-->
  <form method="post" enctype="multipart/form-data">
    <fieldset>
      <p>
        <label>Tiêu đề tin tức</label>
        <input class="text-input small-input kiemtra" data_error="Nhập tiêu đề tin tức" type="text" id="ten_tin_tuc" name="ten_tin_tuc" value="<?php echo $tin_tuc->ten_tin_tuc?>"/>
      </p>
      <p>
        <label>Nội dung chi tiết</label>
        <textarea name="noi_dung_chi_tiet" cols="50" rows="5" class="text-input large-input ckeditor" id="noi_dung_chi_tiet" ><?php echo $tin_tuc->noi_dung_chi_tiet?></textarea>
      </p>
      <p>
        <label>Nội dung tóm tắt</label>
        <textarea name="noi_dung_tom_tat" cols="50" rows="3" class="text-input textarea wysiwyg " id="medium-input"><?php echo $tin_tuc->noi_dung_tom_tat?></textarea>
      </p>
      <p>
      	<img src="../public/images/tin_tuc/<?php echo $tin_tuc->hinh_anh ?>" width="125" height="80" />
        <label>Chọn hình tin tức</label>
        <input type="file" name="hinh_anh" id="hinh_anh" />
      <div class="image-holder" id="image-holder"></div>
      </p>
      <p>
        <label>Ngày đăng bài</label>
        <input class="text-input small-input datepicker" type="date" id="ngay_dang_tin" name="ngay_dang_tin" value="<?php echo $tin_tuc->ngay_dang_tin?>"/>
      </p>
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
        <input class="button" type="button" value="Bỏ qua" onclick="window.location='danh_sach_tin_tuc.php'" />
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
