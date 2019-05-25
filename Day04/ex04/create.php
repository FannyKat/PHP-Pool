<?php
	if ($_POST['login'] !== "" && $_POST["passwd"] !== "" && $_POST["submit"] === "OK")
	{
		if (!file_exists("../private") || !file_exists("../private/passwd"))
		{
			mkdir ("../private", 0755);
			file_put_contents("../private/passwd", NULL);
		}
		if (file_exists("../private/passwd"))
		{
			$exist = FALSE;
			$array = unserialize(file_get_contents("../private/passwd"));
			foreach ($array as $user)
				if ($user["login"] === $_POST["login"])
					$exist = TRUE;
		}
		if ($exist === FALSE)
		{
			$str["login"] = $_POST["login"];
			$str["passwd"] = hash('whirlpool', $_POST["passwd"]);
			$array[] = $str;
			file_put_contents("../private/passwd", serialize($array));
			echo ("OK\n");
			header('Location: index.html');
		}
		else
			echo ("ERROR\n");
	}
	else
		echo ("ERROR\n");
?>
