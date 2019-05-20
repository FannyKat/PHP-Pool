#!/usr/bin/php
<?php
    unset($argv[0]);
    $array = array();
    if ($argc > 1)
    {
        foreach ($argv as $str)
        {
            $arg = array_filter(explode(' ', $str));
            foreach ($arg as $str)
                $array[] = $str;
        }
        sort($array);
        foreach ($array as $elem)
            echo "$elem\n";
    }
?>