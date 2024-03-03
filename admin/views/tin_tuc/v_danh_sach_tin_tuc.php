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
          <label>Nhập tên tin tức:</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã tin tức</th>
          <th>Tên tin tức</th>
          <th>Ngày đăng tin </th>
          <th>Hình ảnh</th>
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
        foreach ($tin_tucs as $tt)
    {
    ?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><a href="#" title="Edit"><?php echo $tt->ma_tin_tuc; ?></a></td>
          <td><?php echo $tt->ten_tin_tuc; ?></td>
          <td><?php echo $tt->ngay_dang_tin; ?></td>
          <td><img style="width:90px;height:90px; border-radius:25px" src="../public/images/tin_tuc/<?php echo $tt->hinh_anh; ?>" /></td>
          <td><!-- Icons --> 
            <a href="sua_tin_tuc.php?ma_tin_tuc=<?php echo $tt->ma_tin_tuc ?>" title="Edit" > <img src="public/images/layout/pencil.png" alt="Edit" /> </a>
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $tt->ma_tin_tuc ?>,'bk_tin_tuc','ma_tin_tuc')">  <img src="public/images/layout/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php 
    }
    ?>
      </tbody>
    </table>
  </div>
</div>
