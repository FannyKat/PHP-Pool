#!/usr/bin/php
<?php
    unset($argv[0]);
    $array = array();
    function ft_split($str)
    {
        $tab = array_filter(explode(' ', $str));
        sort($tab);
        return ($tab);
    }

    function    issort($i, $j)
    {
        $a = strtolower($i);
        $b = strtolower($j);
        $ctype = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
        for ($i = 0; $i < (strlen($a) || strlen($b)); $i++)
        {
            $case1 = strpos($ctype, $a[$i]);
            $case2 = strpos($ctype, $b[$i]);
            if ($case1 > $case2)
                return (1);
            else if ($case1 < $case2)
                return (-1);
        }
    }

    if ($argc > 1)
    {
        $alpha = array();
	    $num = array();
    	$ascii = array();
        foreach($argv as $str)
        {
            $tab = ft_split($str);
            $array = array_merge($array, $tab);
        }
        usort($array, "issort");
        foreach ($array as $arg)
            echo $arg."\n";
    }
?>