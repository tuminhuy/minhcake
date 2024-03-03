<div class="container">
  <ol class="breadcrumb">
    <li><a href="index.php">Trang chủ</a></li>
    <li class="active">Liên hệ</li>
  </ol>
  <!--start contact-->
  <h2 align="center">Liên hệ với chúng tôi</h2>
  <div class="section group">
    <div class="col-md-6 span_1_of_3">
      <div class="contact_info">
        <h4>Địa điểm</h4>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.953629329359!2d106.66046331422584!3d10.738057392347544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e5ae9e502a1%3A0x453fa4a1df2ee9e4!2zQsO0bmcgU2FvLCBwaMaw4budbmcgNSwgUXXhuq1uIDgsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2sus!4v1487993569389" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="company_address">
        <h4>Thông tin cửa hàng</h4>
        <p>Bông Sao, TP.Hồ Chí Minh</p>
        <p>Phone:(08)11 222 333</p>
        <p>Email: <a href="mailto:wil.bro12@gmail.com">wil.bro12@gmail.com</a></p>
      </div>
    </div>
    <div class="col-md-6 span_2_of_3">
      <div class="contact-form">
        <form method="post">
          <div> <span>
            <label>Họ và tên</label>
            </span> <span>
            <input name="th_hoten" type="text" class="textbox">
            </span> </div>
          <div> <span>
            <label>E-MAIL</label>
            </span> <span>
            <input name="th_email" type="text" class="textbox">
            </span> </div>
          <div> <span>
            <label>CHỦ ĐỀ</label>
            </span> <span>
            <input name="th_chude" type="text" class="textbox">
            </span> </div>
          <div> <span>
            <label>Nội dung</label>
            </span> <span>
            <textarea name="th_noidung"> </textarea>
            </span> </div>
            <tr>
          <td>Nhập mã bảo vệ</td>
          <td>
            <input type="text" id="security_code" name="security_code" style="width:100px !important; background-color:#CCC; border-style:none" />
            &nbsp;<img src="public/images/captcha/captcha.gif" alt="captcha" />
            
            <input type="image" name="th_recapcha" src="images/refresh.jpg" style="width:20px" value="recapcha"  />
          </td>
        </tr>
          <div> <span>
            <input type="submit" name="th_gui" class="mybutton" value="Gửi" onclick="return kiemtralienhe()">
            </span> </div>
        </form>
      </div>
    </div>
  </div>
</div>
