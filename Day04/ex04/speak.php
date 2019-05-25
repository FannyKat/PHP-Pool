<?php
		session_start();

		if ($_SESSION["loggued_on_user"])
		{
			if ($_POST["msg"] != "")
			{
				if (!file_exists("../private"))
				{
					mkdir("../private", 0755);
					file_put_contents("../private/chat", NULL);
				}
				if (!file_exists("../private/chat"))
					file_put_contents("../private/chat", NULL);
				$chat = unserialize(file_get_contents("../private/chat"));
				while (!($file = fopen("../private/chat", "c+")))
					continue ;
				if ($file)
				{
					flock($file, LOCK_EX);
					$tab['login'] = $_SESSION['loggued_on_user'];
					$tab['time'] = time();
					$tab['msg'] = $_POST['msg'];
					$chat[] = $tab;
					file_put_contents("../private/chat", serialize($chat));
					fclose($file);
				}
			}
		}
		else
			echo "ERROR\n";
?>

<html>
	<head>
			<script langage="javascript">top.frames['chat'].location ='chat.php';</script>
	</head>
	<body>
		<form action="speak.php" method="POST">
			<input type="text" name="msg" value=""/>
			<input type="submit" name="submit" value="Send"/>
		</form>
	</body>
</html>
