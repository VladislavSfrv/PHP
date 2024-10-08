<?php

function readAllFunction($adress)
{
    if (file_exists($adress) && is_readable($adress)) {
        $file = fopen($adress, 'rb');

        $contents = '';
        while (!feof($file)) {
            $contents .= fread($file, 100);
        }
        fclose($file);
        echo $contents;
    } else {
        echo 'File not found or not readable';
    }
    ;
}
;

function addFunction($adress)
{
    $name = readline('Input name: ');
    $date = readline('Input your birthday: ');

    $data = $name . ', ' . $date . "\r\n";

    $fileHandler = fopen($adress, 'a');

    if (fwrite($fileHandler, $data)) {
        echo 'Successfully added';
    } else {
        echo 'Failed added, try again';
    }

    fclose($fileHandler);
}

function clearFunction($adress){
    if(file_exists(($adress)) && is_readable($adress)) {
        $file = fopen($adress, "w");

        fwrite($file,"");

        fclose($file);
        return "File is clear";
    }else{
        return "File not found or not readable";
    }
}

function helpFunction() {
    return handleHelp();
}

function readConfig(string $configAddress): array|false{
    return parse_ini_file($configAddress, true);
}

function readProfilesDirectory(array $config): string {
    $profilesDirectoryAddress = $config['profiles']['address'];

    if(!is_dir($profilesDirectoryAddress)){
        mkdir($profilesDirectoryAddress);
    }

    $files = scandir($profilesDirectoryAddress);

    $result = "";

    if(count($files) > 2){
        foreach($files as $file){
            if(in_array($file, ['.', '..']))
                continue;
            
            $result .= $file . "\r\n";
        }
    }
    else {
        $result .= "Директория пуста \r\n";
    }

    return $result;
}

function readProfile(array $config): string {
    $profilesDirectoryAddress = $config['profiles']['address'];

    if(!isset($_SERVER['argv'][2])){
        return handleError("Не указан файл профиля");
    }

    $profileFileName = $profilesDirectoryAddress . $_SERVER['argv'][2] . ".json";

    if(!file_exists($profileFileName)){
        return handleError("Файл $profileFileName не существует");
    }

    $contentJson = file_get_contents($profileFileName);
    $contentArray = json_decode($contentJson, true);

    $info = "Имя: " . $contentArray['name'] . "\r\n";
    $info .= "Фамилия: " . $contentArray['lastname'] . "\r\n";

    return $info;
}