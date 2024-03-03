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
    <label>Nhập tên slider & banner:</label> <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã slider</th>
          <th>Hình</th>
          <th>Tên slider & banner</th>
          <th>Trạng thái</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($slider_banners as $sd)
    {
    ?>  
        <tr>
          <td><input type="checkbox" /></td>
          <td><a href="#" title="Edit"><?php echo $sd->id; ?></a></td>
          <td><img src="../public/images/<?php echo $sd->hinh; ?>"  style=" width:150px; height:150px"/></td>
          <td><?php echo $sd->ten_slide ?></td>
          <td><?php echo $sd->trang_thai==0?"Bật":"Tắt" ?></td>
          <td><!-- Icons --> 
            <a href="#" title="Edit" >
            <img src="public/images/layout/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $sd->id ?>,' bk_slider_banner','id')"> 
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
