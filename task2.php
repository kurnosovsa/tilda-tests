<?php
/*
 Задача 2: массивы
Нужно заполнить массив 5 на 7 случайными уникальными числами от 1 до 1000.
Вывести получившийся массив и суммы по строкам и по столбцам
 */

$rows = 5;
$columns = 7;

$arr = [];
$rowsSums = array_fill(0, $rows, 0);
$columnsSums = array_fill(0, $columns, 0);
$allValues = [];
for ($i = 0; $i < $rows; $i++) {
    $arr[$i] = [];
    for ($j = 0; $j < $columns; $j++) {
        do {
            $notUnique = true;
            $newValue = mt_rand(0, 1000);
            $notUnique = in_array($newValue, $allValues);
        } while ($notUnique);
        $arr[$i][$j] = $newValue;
        $allValues[] = $newValue;
        $rowsSums[$i] += $newValue;
        $columnsSums[$j] += $newValue;
    }
}

foreach ($arr as $key => $row) {
    echo $key + 1 . ': ';
    foreach ($row as $value) {
        echo $value . ' ';
    }
    echo '= ' . $rowsSums[$key] . PHP_EOL;
}
echo 'Columns summary' . PHP_EOL . ' ';
foreach ($columnsSums as $key => $sum) {
    echo $key + 1 . ':' . $sum . ' ';
}
echo PHP_EOL;