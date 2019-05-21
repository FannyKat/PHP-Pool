#!/usr/bin/php
<?php
    $html = file_get_contents($argv[1]);
    preg_match_all('/<img[^>]+>/i', $html, $img);
    print_r($img);
    for ($i = 0; $i < count($img[0]); $i++)
    {
        preg_match_all('/src="([^"]+)/i', $img[0][$i], $img_src);
    }
    print_r($img_src);
?>