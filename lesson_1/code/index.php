<?php
    $a = 5; //Присвоение int переменной
    $b = '05'; // Присвоение str переменной
    var_dump($a == $b); // не строгое сравнение двух переменных, str приводится к int. Вывод true
    var_dump((int)'012345'); // Перевод str в int. Вывод 12345
    var_dump((float)123.0 === (int)123.0); // строгое сравнение int и float. Так как сравниваются и типы данных, вывод false
    var_dump(0 == 'hello, world'); // Сравнение int и str. вывод false