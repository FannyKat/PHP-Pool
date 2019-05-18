#!/usr/bin/php
<?php
    function ft_is_sort($tab)
    {
        $sort_tab = $tab;
        sort($sort_tab);
        if (array_diff_assoc($sort_tab, $tab))
            return (false);
        else
            return (true);
    }
?>