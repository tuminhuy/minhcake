<div class="tab-content default-tab" id="tab1">
<h3><?php echo $tieude ?></h3>
    <!--`ma_chu_de`, `ten_chu_de`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>

          <p>
            <label>Tên chủ đề</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên chủ đề" type="text" id="ten_chu_de" name="ten_chu_de" value="<?php echo $chu_de->ten_chu_de ?>"/>
          </p>
         
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='danh_sach_chu_de.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
     
  </div>