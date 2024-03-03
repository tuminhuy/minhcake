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
          <label>Nhập tên loại nhân viên:</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã loại NV</th>
          <th>Tên loại nhân viên</th>
          <th>Ghi chú</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
<?php /*?>      <tfoot>
        <tr>
          <td colspan="6"><div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
        </tr>
      </tfoot><?php */?>
      <tbody>
        <?php
        foreach ($loai_nhan_viens as $lnv)
    {
    ?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><a href="#" title="Edit"><?php echo $lnv->ma_loai_nhan_vien ?></a></td>
          <td><?php echo $lnv->ten_loai_nhan_vien; ?></td>
          <td><?php echo $lnv->ghi_chu; ?></td>
          <td><!-- Icons --> 
            <a href="sua_loai_nhan_vien.php?ma_loai_nhan_vien=<?php echo $lnv->ma_loai_nhan_vien ?>" title="Edit" > <img src="public/images/layout/pencil.png" alt="Edit" /> </a> <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $lnv->ma_loai_nhan_vien ?>,'bk_loai_nhan_vien','ma_loai_nhan_vien')"> <img src="public/images/layout/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php 
    }
    ?>
      </tbody>
    </table>
  </div>
</div>
