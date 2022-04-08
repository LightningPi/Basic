<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your留言板</title>
</head>

<body>

<?php
mysql_connect("localhost","root","1234");
mysql_select_db("basic");
mysql_query("SET NAMES 'utf8'");

$thecontent=mysql_db_query("basic","select * from message ORDER BY no DESC");
?>

<center><h1><strong>歡迎來到Your留言板</h1></center></strong>
<center><h2>歡迎大家留下自己的足跡唷!</h2></center>

<center><h2><?php echo $_SESSION['account']."您好";  ?></h2></center>

<br/>
<center><input type="button" value="登出" onclick="location.href=('logout.php')" /></center>
<hr size="5" align="center" noshade width="100%" color="gray"><br/>
<center><input type="button" name="left" value="我要留言" onclick="location.href=('message.php')" /></center>

<center>
<?php
while($rows=mysql_fetch_object($thecontent)){
?>

<table name="catch" width="50%" border="2">

<?php



echo "<br><br><br>";	
echo "<tr>
		<td>留言人：</td>
		<td>".$rows->gname."</td>
	 </tr>"	;

echo "<tr>
		<td>標題：</td>
		<td>".$rows->gtitle."</td>
	  </tr>";
echo "<tr>
		<td>留言內容：</td>
		<td>".$rows->lmessage."</td>
	  </tr>";
  
	  }

?>
</table>
</center>




</body>
</html>
