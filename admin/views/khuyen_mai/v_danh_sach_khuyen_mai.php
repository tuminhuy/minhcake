<div class="content-box-header">
  <label id="kqXoa">
  <h3><?php echo $tieude ?></h3>
  </label>
  <div class="clearfix"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <caption>
      <form method="post">
        <p>
          <label>Nhập tên khuyến mãi:</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã khuyến mãi</th>
          <th>Tên khuyến mãi</th>
          <th>Ngày áp dụng</th>
          <th>Ngày kết thúc</th>
          <th>Chiết khấu</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="6"><div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
        </tr>
      </tfoot>
      <tbody>
        <?php
        foreach ($khuyen_mais as $km)
    {
    ?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><a href="#" title="Edit"><?php echo $km->ma_khuyen_mai; ?></a></td>
          <td><?php echo $km->ten_khuyen_mai; ?></td>
          <td><?php echo $km->ngay_ap_dung; ?></td>
          <td><?php echo $km->ngay_ket_thuc; ?></td>
          <td><?php echo $km->chiet_khau; ?> %</td>
          <td><!-- Icons --> 
            <a href="sua_khuyen_mai.php?ma_khuyen_mai=<?php echo $km->ma_khuyen_mai?>" title="Edit" > <img src="public/images/layout/pencil.png" alt="Edit" /> </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $km->ma_khuyen_mai ?>,'bk_khuyen_mai','ma_khuyen_mai')"> <img src="public/images/layout/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php 
    }
    ?>
      </tbody>
    </table>
  </div>
</div>
