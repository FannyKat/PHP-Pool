#!/usr/bin/php
<?php
    if ($argc < 3)
        exit();
    $key_to_search = $argv[1];
    unset($argv[0], $argv[1]);
    $argv = array_reverse($argv);
    foreach ($argv as $key)
    {
        $val = explode(":", $key);
        if ($key_to_search == $val[0])
        {
            echo $val[1]."\n";
            break ;
        }
    }
?>