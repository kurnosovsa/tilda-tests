<?php
/*
Задача 1: лесенка
Нужно вывести лесенкой числа от 1 до 100.
1
2 3
4 5 6
...
 */

$number = 1;
$stringLength = 1;
$endNum = 100;

do {
    for ($i = 1; $i <= $stringLength; $i++) {
        echo $number . ' ';
        $number++;
        if ($number > $endNum) {
            break;
        }
    }
    echo PHP_EOL;
    $stringLength++;
} while ($number <= $endNum);
