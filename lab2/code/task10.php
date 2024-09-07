<?php
echo "\nTask 10)\n";

function isAmountMoreThan10(int $a, int $b){ 
	if ($a + $b > 10){
		return true;
	}else{
		return false;
	}
}

function isNumbersAreEquals(int $a, int $b){ 
	if ($a + $b > 10){
		return true;
	}else{
		return false;
	}
}

$test = 0;

echo ($test == 0) ? "Верно" : "Не верно";

$age = rand(1, 110);

if ($age < 10 || $age > 99){
	echo "\nAge is more than 99 or less than 10";
} 
else{
	$sum = 0;
	while ($age > 0) {
		$sum += $age % 10;
		$age = floor($age / 10);
	}
	if ($sum <= 9){
		echo "\nСумма цифр однозначна";
	}else{
		echo "\nСумма цифр двузначна";
	}
}

$arr = [10, 15, 23];
if (count($arr) == 3){
	echo "\n" . array_sum($arr);
}