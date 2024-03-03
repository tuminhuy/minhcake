<?php
$ma_tin_tuc=$_POST["ma_tin"];
// Models 
include("models/m_tin_tuc.php");
$m_tin_tuc=new M_tin_tuc();
$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc);
?>
<h3><?php echo $tin_tuc->ten_tin_tuc?></h3>
<div class="wrapper img-indent-bot" style="float:left" >
    <figure class="img-indent"  >
        <img src="public/images/tin_tuc/<?php echo $tin_tuc->hinh_anh ?>" alt=""  />
    </figure>
    <div>
        <h5><?php echo $tin_tuc->noi_dung_tom_tat?></h5>
        <div style="font-style:italic">
        <?php echo $tin_tuc->noi_dung_chi_tiet?>
        </div> 
    </div>
</div>
</div>