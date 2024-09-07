<?php
function increaseEnthusiasm(string $param) : string {
	return $param . "!!!";
}

function repeatThreeTimes(string $param) : string {
	return str_repeat($param, 3);
}

function cut(string $str, $to = 10){
	return mb_substr($str, 0, $to);
}

function printArray(&$arr, $start_index = 0){
	if ($start_index < count($arr) - 1){
		echo $arr[$start_index] . " ";
		printArray($arr, $start_index + 1);
	}else{ 
		echo $arr[$start_index];
	}
}

function sum(int $n){ 
	$sum = 0;
	while ($n > 0) {
		$sum += ($n % 10);
		$n = floor($n / 10); 
	}
	if ($sum > 9){ 
		sum($sum);
	}else{
		echo "\nSum is: " . $sum;
	}
}

echo "\nTask 8)\n";

echo increaseEnthusiasm("Hello world");
echo "\n" . repeatThreeTimes("hi");
echo "\n" . increaseEnthusiasm(repeatThreeTimes("hi"));

echo "\n" . cut("Hello", 3);

echo "\n";
$arr = [1, 2, 3, 4, 5];
printArray($arr, 0);

sum(247);