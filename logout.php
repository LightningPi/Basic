<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>登出</title>

</head>

<body>

<?php

session_destroy();

echo "<center><h1>已登出</h1></center>";

?>

<br>
<center><input type="button" value="首頁" onclick="location.href=('index.php')" /></center>




</body>

</html>