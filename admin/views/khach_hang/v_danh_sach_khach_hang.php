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
          <label>Nhập tên khách hàng:</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã KH</th>
          <th>Tên khách hàng</th>
          <th>Địa chỉ</th>
          <th>SDT</th>
          <th>Giới tính</th>
          <th>Email</th>
          <th>Username</th>
          <th>Số tiền</th>
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
        foreach ($khach_hangs as $kh)
    {
    ?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><a href="#" title="Edit"><?php echo $kh->ma_khach_hang; ?></a></td>
          <td><?php echo $kh->ten_khach_hang; ?></td>
          <td><?php echo $kh->dia_chi; ?></td>
          <td><?php echo $kh->sdt; ?></td>
          <td><?php echo ($kh->gioi_tinh==0)?"Nữ":"Nam"; ?></td>
          <td><?php echo $kh->email; ?></td>
          <td><?php echo $kh->username; ?></td>
          <td><?php echo number_format($kh->so_tien); ?> đồng</td>
        </tr>
        <?php 
    }
    ?>
      </tbody>
    </table>
  </div>
</div>
