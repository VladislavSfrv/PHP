<?php

// подключение файлов логики
// require_once('src/main.function.php');
// require_once('src/template.function.php');
// require_once('src/file.function.php');

require_once('vendor/autoload.php');

// вызов корневой функции
$result = main("/code/config.ini");
// вывод результата
echo $result; 

//docker container run -it -v ${pwd}/php-cli/code:/code/ test php app.php 