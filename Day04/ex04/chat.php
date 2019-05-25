<?php
		session_start();

		if (file_exists("../private") && file_exists("../private/chat"))
		{
			$array = unserialize(file_get_contents("../private/chat"));
			foreach ($array as $value)
			{
				$date = date('H:i', $value["time"]);
				echo "[".$date."] <b>".$value["login"]."</b>: ".$value["msg"]."<br />";
			}
		}
?>
