<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
   var id=null;
   if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
      {
      var title = $(this).attr("title");
      id=document.getElementById(title);
      $(this).addClass("current");
      $(id).addClass("current");  
      }
      
     })
    
  $(id).click();
  
});

</script>

<ul id="main-nav">
  <!-- Accordion Menu -->
  
  <li> <a href="#" class="nav-top-item" id="nhanvien"> Quản lý nhân viên </a>
    <ul>
      <li><a href="danh_sach_nhan_vien.php" title="nhanvien">Danh sách nhân viên</a></li>
      <li><a href="them_nhan_vien.php" title="nhanvien">Thêm nhân viên</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="loainhanvien">Quản lý loại nhân viên </a>
    <ul>
      <li><a href="danh_sach_loai_nhan_vien.php" title="loainhanvien">Danh sách loại nhân viên</a></li>
      <li><a href="them_loai_nhan_vien.php" title="loainhanvien" >Thêm loại nhân viên</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="sanpham"> Quản lý sản phẩm </a>
    <ul>
      <li><a href="danh_sach_san_pham.php" title="sanpham">Danh sách sản phẩm</a></li>
      <li><a href="them_san_pham.php" title="sanpham">Thêm sản phẩm</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="huongvi"> Quản lý hương vị </a>
    <ul>
      <li><a href="danh_sach_huong_vi.php" title="huongvi">Danh sách hương vị</a></li>
      <li><a href="them_huong_vi.php" title="huongvi">Thêm hương vị</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="chude"> Quản lý chủ đề </a>
    <ul>
      <li><a href="danh_sach_chu_de.php" title="huongvi">Danh sách chủ đề</a></li>
      <li><a href="them_chu_de.php" title="huongvi">Thêm chủ đề</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="donhang"> Quản lý đơn hàng </a>
    <ul>
      <li><a href="danh_sach_don_hang.php" title="donhang">Danh sách đơn hàng</a></li>
      <li><a href="#" title="donhang">Đơn hàng đã xử lý</a></li>
      <li><a href="#" title="donhang">Đơn hàng chưa xử lý</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="khuyenmai"> Quản lý khuyến mãi </a>
    <ul>
      <li><a href="danh_sach_khuyen_mai.php" title="khuyenmai">Danh sách khuyến mãi</a></li>
      <li><a href="them_khuyen_mai.php" title="khuyenmai">Thêm khuyến mãi</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="khachhang"> Quản lý khách hàng </a>
    <ul>
      <li><a href="danh_sach_khach_hang.php" title="khachhang">Danh sách khách hàng</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="khachhang"> Quản lý tin tức </a>
    <ul>
      <li><a href="danh_sach_tin_tuc.php" title="khachhang">Danh sách tin tức</a></li>
      <li><a href="them_tin_tuc.php" title="khachhang">Thêm tin tức</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="khachhang"> Quản lý Banner </a>
    <ul>
      <li><a href="danh_sach_slider_banner.php" title="khachhang">Danh sách banner</a></li>
      <li><a href="them_banner.php" title="khachhang">Thêm banner</a></li>
    </ul>
  </li>
</ul>
<!-- End #main-nav -->