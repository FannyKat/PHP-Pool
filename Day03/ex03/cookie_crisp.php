<?php
    if ($_GET["action"] == "set")
        setcookie($_GET["name"], $_GET["value"], time()+3600);
    if ($_GET["action"] == "get" && $_GET["value"] != NULL)
        echo $_COOKIE[$_GET["name"]]."\n";
    if ($_GET["action"] == "del" && $_GET["value"] != NULL)
        setcookie($_GET["name"], NULL, -1);
?>