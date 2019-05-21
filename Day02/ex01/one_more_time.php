#!/usr/bin/php
<?php
    date_default_timezone_set('Europe/Paris');
    if ($argc == 2)
    {
        $months = array(1 => 'janvier', 2 => 'fevrier', 3 => 'mars', 4 => 'avril', 5 => 'mai', 6 => 'juin', 7 => 'juillet',
                        8 => 'aout', 9 => 'septembre', 10 => 'octobre', 11 => 'novembre', 12 => 'decembre');
        $date = explode(" ", $argv[1]);
        if (!preg_match('/^([Ll]undi?|[Mm]ardi?|[Mm]ercredi?|[Jj]eudi?|[Vv]endredi?|[Ss]amedi?|[Dd]imanche?)$/', $date[0])
            || !preg_match('/^(([0-2]?\d{1})|([3][0,1]{1}))$/', $date[1])
            || !preg_match('/^([Jj]anvier?|[Ff]evrier?|[Mm]ars?|[Aa]vril?|[Mm]ai?|[Jj]uin?|[Jj]uillet?|[Aa]out?|[Ss]eptembre?|[Oo]ctobre?|[Nn]ovembre?|[Dd]ecembre?)$/', $date[2])
            || !preg_match('/^\d{4}$/', $date[3])
            || !preg_match('/^(([0-1]\d)|(2[0-3])){1}:([0-5]\d){1}:([0-5]\d){1}$/', $date[4])
            || (preg_match('/^[Ff]evrier$/', $date[2]) && preg_match('/^([3][0,1]{1})$/', $date[1])))
            echo "Wrong Format\n";
        else
        {
            $hour_format = explode(":", $date[4]);
            $hour = $hour_format[0];
            $min = $hour_format[1];
            $sec = $hour_format[2];
            if (!is_numeric($hour) || !is_numeric($min) | !is_numeric($sec))
            {
                echo "Wrong Format\n";
                exit();
            }
            $date[2] = strtolower($date[2]);
            $month = array_search($date[2], $months);
            $seconds = mktime($hour, $min, $sec, $month, $date[1], $date[3]);
            echo "$seconds\n";
        }
    }
?>