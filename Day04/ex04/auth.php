<?php
		function auth($login, $passwd)
		{
			if (file_exists("../private") && file_exists("../private/passwd"))
			{
				$array = unserialize(file_get_contents("../private/passwd"));
				foreach ($array as $key)
				{
					if ($key["login"] === $login)
					{
						if ($key["passwd"] === hash('whirlpool', $passwd))
							return (TRUE);
					}
				}
			}
			return (FALSE);
		}
?>
