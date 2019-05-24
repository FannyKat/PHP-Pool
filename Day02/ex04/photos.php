#!/usr/bin/php
<?php
 
 function get_name($e) 
 {
     //Get info to have filename and extension of images
     $path_imgs = pathinfo($e);
     $e = $path_imgs['filename'];
     if (isset($path_imgs['extension']))
         $e = $e.".".$path_imgs['extension'];
     return ($e);
 }
 
 if ($argc > 1) 
 {
     if ($content = file_get_contents($argv[1])) 
     {
         $result = array();
        //Parse Url to have Host and Scheme
         $src = parse_url($argv[1]);
        //Check If file exists to create the folder
         if (!file_exists($src['host']))
             mkdir($src[host]);
        //Get all images of the page
         preg_match_all('/<img[^>]+>/i', $content, $result);
         foreach ($result[0] as $img)
         {
                 $ar = array();
                 preg_match( '@src="([^"]+)"@' , $img, $ar);
                 if ($ar[1]) 
                 {
                     $e = parse_url($ar[1]);
                     if (!isset($e["scheme"])) 
                     {
                         $b = $src["scheme"]."://" . $src["host"];
                         if (isset($src["path"]))
                             $b = $b.$src["path"];
                         $b = $b."/./";
                         $ar[1] = $b.$e["path"];
                     }
                    //Copy the image to the folder
                     $name = get_name($ar[1]);
                     copy($ar[1], $src["host"]."/$name");
                 }
             }
         }
 }
?>