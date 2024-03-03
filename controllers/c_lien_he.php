<?php
class C_lien_he{
 function Hien_thi_lien_he(){
	include_once("captcha.php");
	if(!isset($_POST["th_gui"]))
	{
		taocaptcha();
	}
	if(isset($_POST['th_gui']))
	{
	  require_once("smtpgmail/class.phpmailer.php");
	  $mail=new PHPMailer();
	  $mail->IsSMTP(); // Chứng thực SMTP
	  $mail->SMTPAuth=TRUE;
	  $mail->Host="smtp.gmail.com";
	  $mail->Port=465;
	  $mail->SMTPSecure="ssl";
	  /* Server google*/
	  $mail->Username="tienminh31995@gmail.com"; // Nhập mail 
	  $mail->Password="tienminh1901"; // Mật khẩu
	  /* Server google*/
	  $mail->CharSet="utf-8";
	  $noidung="Họ tên:" .$_POST["th_hoten"];
	  $noidung .="Email:" .$_POST["th_email"];
	  $noidung .="<hr><br>Chủ đề:" .$_POST["th_chude"];
	  $noidung .="<br>Nội dung:" .$_POST["th_noidung"];
	  $mail->SetFrom($_POST["th_email"],$_POST["th_hoten"]);
	  $mail->Subject=$_POST["th_chude"];
	  $mail->MsgHTML($noidung);
	  
	  $mail->AddAddress("tienminh31995@gmail.com","Admin"); // Mail người nhận
	  
	  $mail->AddBCC($_POST["th_email"],"Khach hang");
	  if($_POST["security_code"]==$_SESSION["code"])
	  {
		  if(!$mail->Send())
		  {
			  echo "Mail lỗi".$mail->ErrorInfo;
		  }
		  else
		  {
			  echo "Gửi mail thành công";
		  }
	  }
	  else
	  {
		  echo "Nhập mã bảo vệ...";	
	  }
	 
  } 
  	$title="Bakery | Liên hệ";
	$view="views/v_lien_he.php";
	include("include/layout_2.php");
	}
}

?>