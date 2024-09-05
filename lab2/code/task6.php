<?php
$a = 10;
$b = 3;
echo "\nTask 6)\n" . $a % $b;

if ($a % $b == 0){
	echo "\nДелится: " . $a / $b;
}else{
	echo "\nДелится c остатком: " . $a % $b;
}

echo "\nИли можно сделать следующим способом при помощи тернарного оператора:";
echo ($a % $b == 0) ? "\nДелится: " . $a / $b : "\nДелится c остатком: " . $a % $b;

echo "\n2 ^ 10 is: " . pow(2, 10);
echo "\nsqrt(245) is: " . sqrt(245);

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
echo "\nArray [4, 2, 5, 19, 13, 0, 10]";
foreach ($arr as $key => $value) {
	$sum += pow($value, 2);
}

echo "\nResult: " . sqrt($sum);

echo "\nRounding to int: " . round(sqrt(379), 0);

echo "\nRounding to one decimal: " . round(sqrt(379), 1);

echo "\nRounding to two decimals: " . round(sqrt(379), 2);

$arr1 = ["Floor" => floor(sqrt(587)), "Ceil" =>ceil(sqrt(587))];

echo "\nFloor: " . $arr1["Floor"];

echo "\nCeil: " . $arr1["Ceil"];

echo "\nMin from [4, -2, 5, 19, -130, 0, 10] is: " . min(4, -2, 5, 19, -130, 0, 10);

echo "\nMax from [4, -2, 5, 19, -130, 0, 10] is: " . max(4, -2, 5, 19, -130, 0, 10);

echo "\nRandom num from 1 to 100 is: " . rand(1, 100);

$resArr = [];
for ($i = 0; $i < 10; $i++){
	$resArr[] = rand(1, 100);
}
echo "\n";
print_r($resArr);

$a = rand(1, 100);
$b = rand(1, 100); 

echo "\na is: " . $a;
echo "\nb is: " . $b;
echo "\nabs(a-b): " . abs($a - $b);

$arr = [1, 2, -1, -2, 3, -3];
echo "\nBefore:";
print_r($arr);
foreach ($arr as $key => $value) {
	$arr[$key] = abs($value);
}
echo "\nAfter:";
print_r($arr);


$a = rand(1, 1487);
$dividers = [];

for ($i=1; $i < round(sqrt($a)) + 1; $i++) { 
	if ($a % $i == 0){ 
		$dividers[] = $i;
		$dividers[] = ($a / $i);
	} 
}

sort($dividers);
echo "\nNumber is: " . $a;
echo "\nDividers:\n";
print_r($dividers);

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;

while ($sum <= 10){ 
	$sum += $arr[$count];
	$count += 1;
}
echo "\nCount: " . $count;
