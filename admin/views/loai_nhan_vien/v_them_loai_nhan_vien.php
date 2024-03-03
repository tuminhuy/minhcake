<div class="tab-content default-tab" id="tab1"> 
<h3><?php echo $tieude ?></h3>
  <!--`ma_loai_nhan_vien`, `ten_loai_nhan_vien`, `ghi_chu`-->
  <form method="post" enctype="multipart/form-data">
    <fieldset>
      <p>
        <label>Tên loại nhân viên</label>
        <input class="text-input small-input kiemtra" data_error="Nhập tên loại nhân viên" type="text" id="ten_loai_nhan_vien" name="ten_loai_nhan_vien" />
      </p>
      <p>
        <label>Ghi chú</label>
        <textarea name="ghi_chu" cols="50" rows="3" class="text-input textarea wysiwyg " id="medium-input"></textarea>
        </p>
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
        <input class="button" type="button" value="Bỏ qua" onclick="window.location='danh_sach_loai_nhan_vien.php'" />
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
