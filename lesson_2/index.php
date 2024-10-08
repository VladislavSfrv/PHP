<?php

// Задание 1
// function operation($num1, $num2, $operation)
// {
//     switch ($operation) {
//         case '+':
//             return $num1 + $num2;
//         case '-':
//             return $num1 - $num2;
//         case '*':
//             return $num1 * $num2;
//         case '/':
//             if ($num2 == 0) {
//                 throw new Exception('Division by zero is not allowed');
//             }
//             return $num1 / $num2;
//         default:
//             throw new Exception('Unknown operation');
//     }
// }
// ;

// try {
//     $result = operation(10, 2, '-');
//     echo "Result: $result";
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// }
// ;

// //Задание 2 

// function mathOperation($arg1, $arg2, $operation)
// {
//     switch ($operation) {
//         case 'сложение':
//             return $arg1 + $arg2;
//         case 'вычитание':
//             return $arg1 - $arg2;
//         case 'умножение':
//             return $arg1 * $arg2;
//         case 'деление':
//             if ($arg2 == 0) {
//                 throw new Exception('Division by zero is not allowed');
//             }
//             return $arg1 / $arg2;
//         default:
//             throw new Exception('Unknown operation');
//     }
// }
// ;

// try {
//     $result = mathOperation(10, 2, 'сложение');
//     echo "Result: $result";
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// }
// ;

// // Задание 3 

// $area = [
//     'Московская область:' => ['Москва ', 'Зеленоград ', 'Клин '],
//     'Ленинградская область:' => ['Санкт-Петербург ', 'Пушкин ', 'Красноармейск '],
//     'Рязанская область:' => ['Рязань ', 'Спасск ', 'Касимов '],
// ];

// foreach ($area as $key => $value) {
//     echo $key;
//     foreach ($value as $city) {
//         echo $city;
//     }
// }

// Задание 4

// function translit($str){
//     $arr = str_split($str);
//     $translate = [
//         'a' => 'a',
//         'б' => 'b',
//         'в' => 'v',
//         'г' => 'g',
//         'д' => 'd',
//         'ж' => 'zh',
//         'з' => 'z',
//         'и' => 'i',
//         'й' => 'j',
//         'к' => 'k',
//         'л' => 'l',
//         'м' => 'm',
//         'н' => 'n',
//         'о' => 'o',
//         'п' => 'p',
//         'р' => 'r',
//         'с' => 's',
//         'т' => 't',
//         'у' => 'u',
//         'ф' => 'f',
//         'х' => 'h',
//         'ц' => 'ts',
//         'ч' => 'ch',
//         'ш' => 'sh',
//         'щ' => 'sch',
//         'ъ' => '',
//         'ы' => 'y',
//         'ь' => '',
//         'э' => 'e',
//         'ю' => 'yu',
//         'я' => 'ya'
//     ];
    
//     $result = '';
//     foreach($arr as $char){
//         $result .= $translate[$char];
//     }
//     return $result;
// }

// $trans = translit('абвгд');

// echo $trans;

// Задание 5 Возведение числа в степень при помощи рекурсии

// function power($number, $amount){
//     if($amount == 0){
//         return 1;
//     }else{
//         return $number * power($number, $amount - 1);
//     }
// };

// $result = power(3, 3);
// echo $result;

// Задание 6 Функция, которая вычесляет текущее время и возвращает его в правильном склонении

date_default_timezone_set('Europe/Moscow');

function getCurrentTime(){
    $timeArr = explode(":", date('h:i', time()));
    $hour = $timeArr[0] ;
    $minutes = $timeArr[1];

    if($hour == 01 || $hour == 21){
        $hour .= ' час';
    }else if($hour > 1 && $hour < 5 || $hour > 21 && $hour <= 24){
        $hour.= ' часа';
    }else{
        $hour.= ' часов';
    }

    if($minutes % 10 == 1 && $minutes != 11){
        $minutes .= ' минута';
    }else if($minutes >= 5 && $minutes <= 20 || $minutes % 10 >= 5 && $minutes % 10 <= 9 || $minutes % 10 == 0){
        $minutes.= ' минут';
    }else{
        $minutes.= ' минуты';
    }

    return $hour . " : " . $minutes;
}

print getCurrentTime();