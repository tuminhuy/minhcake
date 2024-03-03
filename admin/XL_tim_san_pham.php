<?php
$gtTim=$_POST["gtTim"];
include("models/m_san_pham.php");
$m_san_pham=new M_san_pham();
$san_pham=$m_san_pham->Tim_san_pham_theo_ten($gtTim);
if($gtTim!="")
{
?>
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
    <caption>
    <form method="post">
    <p>
    <label>Nhập tên sản phẩm:</label> <input type="text" name="keyword" class="text-input small-input" onkeyup="Timsanpham(this.value)"/>
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã SP</th>
          <th>Tên chủ đề</th>
          <th>Hương vị</th>
          <th>Tên sản phẩm</th>
          <th>Hình ảnh</th>
          <th>Đơn giá</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <th colspan="7">
            <div style="clear:both; text-align:center;margin-top:15px;margin-bottom:15px"><?php echo $lst ?></div>
            <div class="clear"></div></th>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($san_pham as $sp)
    {
    ?>  
        <tr>
          <td><input type="checkbox" /></td>
          <td><a href="#" title="Edit"><?php echo $sp->ma_san_pham ?></a></td>
          <td><?php echo $sp->ten_chu_de; ?></td>
          <td><?php echo $sp->ten_huong_vi; ?></td>
          <td><?php echo $sp->ten_san_pham; ?></td>
          <td><img src="../public/images/<?php echo $sp->hinh_anh; ?>" style="width:150px;height:150px;border-radius:30px" /></td>
          <td><?php echo number_format($sp->don_gia); ?> đồng</td>
          <td><!-- Icons --> 
            <a href="sua_san_pham.php?ma_san_pham=<?php echo $sp->ma_san_pham ?>" title="Edit" >
            <img src="public/images/layout/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $sp->ma_san_pham ?>,'bk_san_pham','ma_san_pham')"> 
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

<?php
}
?>