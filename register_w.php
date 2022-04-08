<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>傳送到會員註冊資料庫</title>

</head>

<body>

<?php
mysql_connect("localhost","root","1234");
mysql_select_db("basic");
mysql_query("SET NAMES 'utf8'");





	if(empty($_POST["ID"])){


		echo "<center><h2>請輸入帳號</h2></center>";

	   echo "<center><a href='register.php'>重新輸入</a></center>";



	}elseif(empty($_POST["code"])){


		echo "<center><h2>請輸入密碼</h2></center>";

	   echo "<center><a href='register.php'>重新輸入</a></center>";



	}elseif(empty($_POST["recode"])){


		echo "<center><h2>請輸入確認密碼</h2></center>";

	   echo "<center><a href='register.php'>重新輸入</a></center>";



	}elseif($_POST["code"] != $_POST["recode"]){


		echo "<center><h2>請確認密碼與確認密碼相同</h2></center>";

	   echo "<center><a href='register.php'>重新輸入</a></center>";



	}elseif(empty($_POST["username"])){


		echo "<center><h2>請輸入會員名稱</h2></center>";

	   echo "<center><a href='register.php'>重新輸入</a></center>";



	}elseif(empty($_POST["sex"])){


		echo "<center><h2>請輸入性別</h2></center>";

	   echo "<center><a href='register.php'>重新輸入</a></center>";



	}elseif(empty($_POST["email"])){


		echo "<center><h2>請輸入電子郵件</h2></center>";

	   echo "<center><a href='register.php'>重新輸入</a></center>";



	}elseif(empty($_POST["cellphone"])){


		echo "<center><h2>請輸入手機號碼</h2></center>";

	   echo "<center><a href='register.php'>重新輸入</a></center>";



	}else{


$ID=$_POST["ID"];
$code=$_POST["code"];

$username=$_POST["username"];
$sex=$_POST["sex"];
$email=$_POST["email"];

$cellphone=$_POST["cellphone"];


$sql="insert into register(ID,code,username,sex,email,cellphone) values ('".$ID."','".$code."','".$username."','".$sex."','".$email."','".$cellphone."')";

mysql_query($sql);

?>

<center><h1>註冊成功</h1></center>

<center><a href="index.php">返回登入畫面</a></center>

<?php




	}	//POST 驗證 else 結尾



?>


</body>
</html>
