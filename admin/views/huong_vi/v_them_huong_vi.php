<div class="tab-content default-tab" id="tab1">
<h3><?php echo $tieude ?></h3>
    <!--`id`, `ma_huong_vi`, `ten_huong_vi`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Mã hương vị</label>
            <input class="text-input small-input kiemtra" data_error="Nhập mã hương vị" type="text" id="ma_huong_vi" name="ma_huong_vi" />
          </p>
                    <p>
            <label>Tên hương vị</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên hương vị" type="text" id="ten_huong_vi" name="ten_huong_vi" />
          </p>
          
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='danh_sach_huong_vi.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
     
  </div>