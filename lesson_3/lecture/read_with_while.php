<?php

$adress = 'file.txt';

if(file_exists($adress) && is_readable($adress)){
    $file = fopen($adress, 'rb');

    $contents = '';
    while(!feof($file)){
        $contents .= fread($file, 100);
    }
    fclose($file);
    echo $contents;
}else{
    echo 'File not found or not readable';
}