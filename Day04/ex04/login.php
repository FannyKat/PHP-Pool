<?php
		require_once("auth.php");
		session_start();
		if (auth($_POST["login"], $_POST["passwd"]) === FALSE)
		{
			$_SESSION["loggued_on_user"] = "";
			echo "ERROR\n";
			header('Location: index.html');
		}
		else
			$_SESSION["loggued_on_user"] = $_POST["login"];
?>
<!DOCTYPE html>
<html><body>
		<iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
		<iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>	
</body></html>
