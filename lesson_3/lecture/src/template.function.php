<?php 

function handleError($errorText){
    return '\033[31m' . $errorText . '\r\n \033[97m';
}

function handleHelp(){
    $help = "The program to work with file storage \r\n";

    $help .= "The order of the call \r\n\r\n";

    $help .= "php /code/app.php [COMMAND] \r\n\r\n";

    $help .= "Available commands:\r\n";
    $help .= "read-all - read all files \r\n";
    $help .= "add  - add a file \r\n";
    $help .= "clear - clear a file \r\n";
    $help .= "help - get help \r\n";

    return $help;
}