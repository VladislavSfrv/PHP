<?php

$adress = 'file.txt';

$name = readline('Введите имя: ');
$date = readline('Введите дату рождения: ');

$data = $name . ', ' . $date . "\r\n";

$fileHandler = fopen($adress, 'a');

if(fwrite($fileHandler, $data)){
    echo 'Данные успешно записаны в файл.';
}else{
    echo 'Ошибка при записи в файл.';
}

fclose($fileHandler);