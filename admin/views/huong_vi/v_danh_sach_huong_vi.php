<div class="content-box-header">
   <label id="kqXoa"><h3><?php echo $tieude ?></h3></label>
  <div class="clearfix"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
    <caption>
    <form method="post">
    <p>
    <label>Nhập tên hương vị:</label> <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>STT</th>
          <th>Mã hương vị</th>
          <th>Tên hương vị</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
<?php /*?>      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot><?php */?>
      <tbody>
        <?php
        foreach ($huong_vis as $huong)
    {
    ?>  
        <tr>
          <td><input type="checkbox" /></td>
          <td><a href="#" title="Edit"><?php echo $huong->id ?></a></td>
          <td><?php echo $huong->ma_huong_vi ?></td>
          <td><?php echo $huong->ten_huong_vi ?></td>
          <td><!-- Icons --> 
            <a href="sua_huong_vi.php?id=<?php echo $huong->id ?>" title="Edit" >
            <img src="public/images/layout/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $huong->id ?>,'bk_huong_vi','id')"> 
            <img src="public/images/layout/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        <?php 
    }
    ?>
      </tbody>
    </table>
   
  </div>
  
</div>
