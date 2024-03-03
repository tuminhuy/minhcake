<?php foreach($tin_tucs as $tin) { ?>

<div class="" style="float:left;width:150px;height:150px;margin: 0 0 0 2px ">
  <div>
    <figure class="img-indent"><a href="javascript:void(0)" onclick="Doc_tin_tuc(<?php echo $tin->ma_tin_tuc?>)" > <img src="public/images/tin_tuc/<?php echo $tin->hinh_anh ?>" alt="" width="150px" height="100px"></a> </figure>
  </div>
  <div> <a href="javascript:void(0)" onclick="Doc_tin_tuc(<?php echo $tin->ma_tin_tuc?>)" >
    <h5>
      <?php echo $tin->ten_tin_tuc?>
    </h5>
    </a> </div>
</div>
<?php } ?>
<div style="clear:both"></div>
