<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>我要留言</title>

</head>

<body>

	<?php //留言功能表單，留言時傳送資料到lmessage.php  ?>

	<center><h2>我要留言</h2></center>
	
    <center><form action="lmessage.php" method="post">

		<h2><?php echo $_SESSION['account']; ?></h2>

		<input type="hidden" name="gname" value="<?php echo $_SESSION['account']; ?>"> <br/>
		
		標題<input type="text" name="gtitle" value=""><br/>

		留言內容<textarea rows="10" cols="20" name="gcontent"></textarea><br/>

		<input type="submit" name="lmessage" value="留言"  />

		<input type="reset" nema="greset" value="清除重填" />




	</form></center>
    
    <center><a href="guestbook.php">按我回留言版</a></center>


</body>
</html>
