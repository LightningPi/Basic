<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your留言板</title>
</head>

<body>

	<center><h1>歡迎來到Your留言板</h1></center>

		<?php  //會員登入表單，登入時，資料傳送到login.php  ?>

	<form width="30%" action="login.php" method="post">

		<center>會員帳號：<input type="text" name="id" /><br></center>
		<center>會員密碼：<input type="password" name="pw" /><br></center>
<br>
<br>
		<center><input type="submit" name="login" value="登入"  /></center>

	
<br>



	</form>


	<center>尚未註冊?<input type="button" name="register" value="註冊會員" onclick="location.href=('register.php')"  /></center>

		<?php  //註冊會員按鈕，導引到register.php  ?>

</body>
</html>
