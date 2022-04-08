<?php session_start(); ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>傳送到留言資料庫</title>

</head>

<?php
mysql_connect("localhost","root","1234");
mysql_select_db("basic");
mysql_query("SET NAMES 'utf8'");



	if(empty($_POST["gtitle"])){


		echo "<center><h2>請輸入留言標題</h2></center>";

	   echo "<center><a href='message.php'>重新輸入</a></center>";



	}elseif(empty($_POST["gcontent"])){


		echo "<center><h2>請輸入留言內容</h2></center>";

	   echo "<center><a href='message.php'>重新輸入</a></center>";



	}else{

$gname=$_POST["gname"];

$gtitle=$_POST["gtitle"];
$gcontent=$_POST["gcontent"];

$sql="insert into message(gname,gtitle,lmessage) values ('".$gname."','".$gtitle."','".$gcontent."')";

mysql_query("$sql");




?>

<script language="javascript">

location.href="guestbook.php";

</script>

<?php




	}	//POST 驗證 else 結尾



?>

<body>
</body>
</html>
