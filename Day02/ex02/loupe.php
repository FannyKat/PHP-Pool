#!/usr/bin/php
<?php
if($argc < 2 || !file_exists($argv[1]))
        exit();
    $file = file($argv[1]);
    foreach ($file as $line)
    {
        if (preg_match("/<a[^>]*>/isU", $line, $matches))
            $balise = 1;
        else if (preg_match("/<\/a>/isU", $line, $matches))
            $balise = 0;
        if ($balise == 1 && preg_match_all("/<[a-z]*[^>]*( title=)((\"|').*?(\"|'))/mi", $line, $title))
        {
            for ($i = 0; $i <= count($title[2]); $i++)
                $line = str_replace($title[2][$i], strtoupper($title[2][$i]), $line);
        }
        if (preg_match("/<a[^>]*>(.*)</isU", $line, $matches))
        {
            $line = str_replace($matches[1], strtoupper($matches[1]), $line);
            if (preg_match("/<\/a>/", $line))
                $balise = 0;
        }
        else if ($balise == 1)
        {          
            if (preg_match_all("/>(.+?)</is", $line, $matches))
                for($i = 0; $i < count($matches[1]); $i++)
                    $line = str_replace($matches[1][$i], strtoupper($matches[1][$i]), $line);
            if (preg_match("/[^<]*/", $line, $matches))
                $line = str_replace($matches[0], strtoupper($matches[0]), $line);
        }
        
        echo $line."\n";
    }
    echo "\n";
?>