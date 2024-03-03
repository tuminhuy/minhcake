<div class="tab-content default-tab" id="tab1">
  <h3><?php echo $tieude ?></h3>
  <!--`id`, `hinh`, `ten_slide`, `trang_thai`-->
  <form method="post" enctype="multipart/form-data">
    <fieldset>
      <p>
        <label>Tên slider & banner</label>
        <input class="text-input small-input kiemtra" data_error="Nhập tên slider & banner" type="text" id="ten_slide" name="ten_slide" />
      </p>
      <p>
        <label>Chọn hình slide</label>
        <input type="file" name="hinh" id="hinh" />
      <div class="image-holder" id="image-holder"></div>
      </p>
      <p>
        <label>Trạng thái</label>
        <select  class="text-input small-input kiemtra" data_error="Nhập tên slider & banner" type="text" id="trang_thai" name="trang_thai">
        <option>0</option>
        <option>1</option>
        </select>

      </p>
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
        <input class="button" type="button" value="Bỏ qua" onclick="window.location='danh_sach_slider_banner.php'" />
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
