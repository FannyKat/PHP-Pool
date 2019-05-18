#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        $str = array_filter(explode(' ', $argv[1]));
        $str[count($str)] = $str[0];
        unset($str[0]);
        $var = "";
        foreach($str as $word)
            $var .= $word.' ';
        echo trim($var)."\n";
    }
?>