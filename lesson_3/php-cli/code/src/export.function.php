<?php

function export(array $config) : string {
    $address = $config['storage']['address'];
    
    if (file_exists($address) && is_readable($address)) {
        $inputFile = fopen($address, "rb");
        $contents = ''; 
        while (!feof($inputFile)) {
            $contents .= fread($inputFile, 100);
        }
        fclose($inputFile);

        $data = explode("\r\n", $contents);
        $outputFileName = str_replace('.txt', '.csv', $address);
        $outputFile = fopen($outputFileName, 'w'); 
        fputcsv($outputFile, $data);
        fclose($outputFile);

        return "Файл данных сконвертирован в csv";
    }
    else {
        return handleError("Файл не существует");
    }
}