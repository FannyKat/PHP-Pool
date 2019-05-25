<?php 
	session_start();
	if ($_GET["submit"] === "OK")
	{	
		$_SESSION['login'] = $_GET['login'];	
		$_SESSION['passwd'] = $_GET['passwd'];
	} 
?>

<!DOCTYPE html>
<html>
	<form method="GET" action="index.php">
		Login <br><input type="text" name="login" value="<?php echo "$_SESSION[login]"; ?>"/>
		<br />
		Passwd <br><input type="password" name="passwd" value="<?php echo "$_SESSION[passwd]"; ?>"/>
		<br />
		<input type="submit" name="submit" value="OK" />
	</form>
</html>
