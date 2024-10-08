<?php

function main(string $configFileAdress): string{
    $config = readConfig($configFileAdress);

    if($config){
        return handleError("Invalid config file");
    };

    $storageFileAdress = $config['storage']['adress'];

    $functionName = parseCommand();

    if(function_exists($functionName)){
        $result = $functionName($storageFileAdress);
    }else{
        $result = handleError("Function not found");
    }

    return $result;
}

function parseCommand(){
    $functonName = 'helpFunction';

    if (isset($_SERVER['argv'][1])) {
        $functionName = match($_SERVER['argv'][1]){
            'read-all' => 'readAllFunction',
            'add' => 'addFunction',
            'clear' => 'clearFunction',
            'help' => 'helpFunction',
            default => 'helpFunction',
        };
    };
    return $functonName;
};