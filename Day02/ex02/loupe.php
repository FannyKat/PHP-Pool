#!/usr/bin/php
<?php
    if ($argc < 2 || !file_exists($argv[1]))
        exit();
    $file = file($argv[1]);
    foreach ($file as $line)
    {
        if (preg_match_all("/<[a|img][^>]*( title=)(\".*?\")/mi", $line, $title))
        {
            for ($i = 0; $i <= count($title[2]); $i++)
                $line = str_replace($title[2][$i], strtoupper($title[2][$i]), $line);
        }
        if (preg_match("/<a[^>]*>(<.*>)*(.*)(<.*>)*<\/a>/isU", $line, $matches))
            $line = str_replace($matches[2], strtoupper($matches[2]), $line);
        echo $line;
    }
    echo "\n";
?>