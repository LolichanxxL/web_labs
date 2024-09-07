<?php


echo "\nTask 9)\n";
function arrayFill(string $char, int $count = 0): array{
	$arr = [];
	for($i = 0; $i < $count; $i++){
		$arr[] = $char;
	}
	return $arr;
}

function sumOf2dArray(array &$arr){
	$sum = 0;
	foreach ($arr as $key => $value) {
		foreach($value as $key1 => $value1){
			$sum += $value1;
		}
	}
	return $sum; 
}
$arr = arrayFill('x', 10);
print_r($arr);

$arr = [[1, 2, 3], [4, 5], [6]];

echo "\nArray sum: " . sumOf2dArray($arr) . "\n";

$arr = [];

for ($i=0; $i < 3; $i++) { 
	for ($j=0; $j < 3; $j++) { 
		$arr[$i][$j] = ($i * 3) + $j + 1;
	}
}
print_r($arr);

$arr = [2, 5, 3, 9];
$result = 0;
for ($i=0; $i < count($arr) - 1; $i++) { 
	$result += $arr[$i] * $arr[$i + 1];
}
echo "\nresult is: " . $result ."\n";


$user = ["name" => "Pavel", "surname" => "Bobnev", "patronymic" => "Konstantinovich"];
print_r($user);
echo "\n";
$date = ["year" => "2024", "month" => "09", "day" => "07"];

foreach ($date as $key => $value) {
	if ($key != "day"){
		echo $date[$key] . "-";
	}
	else{
		echo $date[$key];
	}
}

$arr = ['a', 'b', 'c', 'd', 'e'];

echo "\n" . count($arr) . " " . $arr[count($arr) - 1] . " " . $arr[count($arr) - 2];