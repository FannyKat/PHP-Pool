<?php
	if ($_POST["login"] !== "" && $_POST["oldpw"] !== "" && $_POST["newpw"] !== "" && $_POST["submit"] === "OK")
	{
		if (file_exists("../private") && file_exists("../private/passwd"))
		{
			$exist = FALSE;
			$tab = unserialize(file_get_contents("../private/passwd"));
			foreach ($tab as &$key)
			{
				if ($key["login"] === $_POST["login"] && $key["passwd"] === hash('whirlpool', $_POST["oldpw"]))
				{
					$exist = TRUE;
					$key["passwd"] = hash('whirlpool', $_POST["newpw"]); 
				}
			}
			if ($exist == TRUE)
			{
				file_put_contents("../private/passwd", serialize($tab));
				echo ("OK\n");
				header('Location: index.html');
			}
			else
				echo "ERROR\n";
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>
