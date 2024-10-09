<?php

function searchByBirthday(array $config) : string {
    $address = $config['storage']['address'];
    
    if (file_exists($address) && is_readable($address)) {
        $file = fopen($address, "rb");
        
        $contents = ''; 
    
        while (!feof($file)) {
            $contents .= fread($file, 100);
        }
        
        fclose($file);

        $data = explode("\r\n", $contents);    

        $date = date("d-m-Y");

        foreach ($data as $record){
            $recordData = explode(',', $record);
            if(isset($recordData[1]) && trim($recordData[1]) == $date){
                return $recordData[0];
            }
        }

        return "Записей с данной датой рождения не найдено";
    }
    else {
        return handleError("Файл не существует");
    }
}