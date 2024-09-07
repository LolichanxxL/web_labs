<?php 

echo "Task 1)\n";

$str = 'ahb acb aeb aeeb adcb axeb acbgb';

$strArray = str_split($str);

$regExpr = '!a.{2}b!';

$match = [];

preg_match_all($regExpr, $str, $match);
var_dump($match);

$str = 'a1b2c3';
$reg_exp = '![0-9]!';

$res = preg_replace_callback( 
    $reg_exp,
    function ($reg_exp) { return pow($reg_exp[0], 3);  },
    $str);
echo $res;

