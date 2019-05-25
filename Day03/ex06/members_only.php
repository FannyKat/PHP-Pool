<?php
	if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
	{
		$html = file_get_contents("../img/42.png");
		$base_64 = base64_encode($_SERVER['PHP_AUTH_PW']);
		echo "<html><body>Bonjour Zaz<br /><img src='data:image/png;base64".$html."</body></html>";
	}
	else
	{	
		header('HTTP/1.0 401 Unauthorized');
		header('WWW-Authenticate: Basic realm="\'Espace membres\'"');
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
	}
?>
