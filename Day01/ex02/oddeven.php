#!/usr/bin/php
<?php
    while (!feof(STDIN))
    {
        echo "Entrez un nombre: ";
        $num = trim(fgets(STDIN));
        if (feof(STDIN) == TRUE)
            break ;
        if (is_numeric($num) == FALSE)
            echo "'$num' n'est pas un chiffre\n";
        else
        {
            if ($num % 2 == 0)
                echo "Le chiffre $num est Pair\n";
            else
                echo "Le chiffre $num est Impair\n";
        }
    }
    echo "\n";
?>