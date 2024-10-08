<?php

$file = fopen('file.txt', 'rd');
$data = fread($file, 100);
fclose($file);
echo $data; 