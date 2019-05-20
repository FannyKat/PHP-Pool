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
        foreach($array as $elem)
        {
            if (is_numeric($elem))
                $num[] = $elem;
            else if (ctype_alpha($elem))
                $alpha[] = $elem;
            else
                $ascii[] = $elem;
        }
        sort($num, SORT_STRING);
        natcasesort($alpha);
        sort($ascii);
        foreach($alpha as $elem)
            echo "$elem\n";
        foreach($num as $elem)
            echo "$elem\n";
        foreach($ascii as $elem)
            echo "$elem\n";
    }
?>