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
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã đơn hàng</th>
          <th>Tên khách hàng</th>
          <th>Ngày mua hàng</th>
          <th>Đơn giá</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <?php /*?><tfoot>
        <tr>
          <td colspan="6"><div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
        </tr>
      </tfoot><?php */?>
      <tbody>
        <?php
        foreach ($don_hangs as $dh)
    {
    ?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><a href="#" title="Edit"><?php echo $dh->ma_don_hang; ?></a></td>
          <td><?php echo $dh->ten_khach_hang; ?></td>
          <td><?php echo $dh->ngay_dat_hang; ?></td>
          <td><?php echo $dh->tong_gia; ?></td>
          <td><!-- Icons --> 
            <a href="#" title="Edit" > <img src="public/images/layout/pencil.png" alt="Edit" /> </a>
            <a href="javaScript:void(0)" title="Delete" onclick="#">  <img src="public/images/layout/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php 
    }
    ?>
      </tbody>
    </table>
  </div>
</div>
