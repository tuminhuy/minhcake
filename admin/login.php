<?php
@session_start();
$err="";
if(isset($_SESSION["error"]))
{
	$err=$_SESSION["error"];
	$_SESSION["error"]="";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Quản lý Bakery | Đăng nhập</title>
<link href="../admins/public/css/login.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:#D7BF92">
<div id="main">
  <h1>QUẢN LÝ BAKERYSTORE</h1>
  <div id="login">
    <h2>ĐĂNG NHẬP</h2>
    <form action="quan_tri.php" method="post">
      <label>Tên đăng nhập :</label>
      <input id="name" name="ten_dang_nhap" placeholder="username" type="text">
      <label>Mật khẩu:</label>
      <input id="password" name="mat_khau" placeholder="**********" type="password">
      <input name="login" type="submit" value=" Login ">
      <span><?php echo $err; ?></span>
    </form>
  </div>
</div>
</body>
</html>