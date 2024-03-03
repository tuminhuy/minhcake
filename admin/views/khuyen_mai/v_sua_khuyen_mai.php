<div class="tab-content default-tab" id="tab1">
<h3><?php echo $tieude ?></h3>
    <!--`ma_khuyen_mai`, `ten_khuyen_mai`, `ngay_ap_dung`, `ngay_ket_thuc`, `chiet_khau`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tên khuyến mãi</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên khuyến mãi" type="text" id="ten_khuyen_mai" name="ten_khuyen_mai" value="<?php echo $khuyen_mai->ten_khuyen_mai ?>" />
          </p>
          <p>
            <label>Ngày áp dụng</label>
            <input class="text-input small-input datepicker" type="date" id="ngay_ap_dung" name="ngay_ap_dung" value="<?php echo $khuyen_mai->ngay_ap_dung ?>" />
          <p>
            <label>Ngày kết thúc</label>
            <input class="text-input small-input datepicker" type="date" id="ngay_ket_thuc" name="ngay_ket_thuc" value="<?php echo $khuyen_mai->ngay_ket_thuc ?>" />
          </p>
          <p>
            <label>Chiết khấu</label>
			<input class="text-input small-input kiemtra" data_error="Nhập chiết khấu" type="text" id="chiet_khau" name="chiet_khau" value="<?php echo $khuyen_mai->chiet_khau ?> %" />
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