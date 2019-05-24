#!/usr/bin/php
<?php
    date_default_timezone_set('Europe/paris');
    $format = "a256user/a4id/a32line/ipid/itype/itime";
    if ($fd = fopen("/var/run/utmpx", "r"))
    {
        $who = array();
        while ($content = fread($fd, 628))
        {
            $data = unpack($format, $content);
            $date = date("M d H:i", $data['time']);
            if ($data['type'] == 7)
            {
                $data['user'] = rtrim($data['user'], "\0");
                $data['line'] = rtrim($data['line'], "\0");
                $date = rtrim($date, "\0");
                $who[$data['line']] = $data['user'].' '.$data['line'].'  '.$date." \n";
            }
        }
        foreach ($who as $user)
            echo $user;
    }
?>