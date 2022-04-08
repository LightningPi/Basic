<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>帳密核對</title>
</head>

<body>

<?php
mysql_connect("localhost","root","1234");
mysql_select_db("basic");
mysql_query("SET NAMES 'utf8'");



	if(empty($_POST['id'])){

		echo "<center><h2>請輸入帳號</h2></center>";

	   echo "<center><a href='index.php'>重新輸入</a></center>";


	}elseif(empty($_POST['pw'])){

		echo "<center><h2>請輸入密碼</h2></center>";

	   echo "<center><a href='index.php'>重新輸入</a></center>";



	}else{





$id=$_POST['id'];

//echo $id;

$pw=$_POST['pw'];

//echo $pw;


   $result = mysql_db_query("basic","select * from  register WHERE ID='".$id."' && code='".$pw."'");
   $row = mysql_fetch_object($result);
           
   if(mysql_num_rows($result)>0){
   
   echo "<center><h2>登入成功!</h2></center>";
  
	$_SESSION['account'] = $row->username;

   
   echo "<center><a href='guestbook.php'>按此進入留言板</a></center>";

   }else{
	   echo "<center><h2>帳號或密碼打錯囉!!!</h2></center>";
	   echo "<center><a href='index.php'>重新輸入</a></center>";
	   
	}



	}	//POST 驗證 else結尾


?>



</body>
</html>