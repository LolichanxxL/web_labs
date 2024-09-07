<?php
echo "\nTask 12)\n";


$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo array_sum($a) / count($a);

echo "\n" . array_sum(range(1, 100)) . "\n";
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = array_map('sqrt', $a);
var_dump($result);

$keys = range('a', 'z');
$values = range(1, 26);
$a = array_combine($keys, $values);
var_dump($a);


$str = '1234567890';
$a = str_split($str, 2);
$result = array_sum($a);
echo $result;