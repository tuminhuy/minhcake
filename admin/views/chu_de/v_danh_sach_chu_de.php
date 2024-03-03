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
    <label>Nhập tên chủ đề:</label> <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã chủ đề</th>
          <th>Tên chủ đề</th>
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
        foreach ($chu_des as $cd)
    {
    ?>  
        <tr>
          <td><input type="checkbox" /></td>
          <td><a href="#" title="Edit"><?php echo $cd->ma_chu_de ?></a></td>
          <td> <?php echo $cd->ten_chu_de ?></td>
          <td><!-- Icons --> 
            <a href="sua_chu_de.php?ma_chu_de=<?php echo $cd->ma_chu_de ?>" title="Edit" >
            <img src="public/images/layout/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $cd->ma_chu_de ?>,'bk_chu_de','ma_chu_de')"> 
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
