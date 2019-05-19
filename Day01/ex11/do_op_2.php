#!/usr/bin/php
<?php
    if ($argc == 2)
    {
        $calcul = str_replace(" ", "", $argv[1]);
        $first_num = intval($calcul);
        $op = substr($calcul, strlen($first_num), 1);
        $second_num = substr($calcul, (strlen((string)$first_num) + strlen((string)$op)));
        if (!is_numeric($first_num) || !is_numeric($second_num))
        {
            echo "Syntax Error\n";
            exit();
        }
        if ($op == '+')
            echo $first_num + $second_num;
        else if ($op == '-')
            echo $first_num - $second_num;
        else if ($op == '*')
            echo $first_num * $second_num;
        else if ($op == '%')
            echo $first_num % $second_num;
        else if ($op == '/')
            echo $first_num / $second_num;
        else
            echo "Syntax Error";
    }
    else
        echo "Incorrect Parameters";
    echo "\n";
?>