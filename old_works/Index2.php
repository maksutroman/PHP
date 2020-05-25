<?php
$variable = 10;
$str = "Bill";
echo $variable;
echo $str;

if (isset($str)) {
    echo "$str exist";
} else {
    echo "Does not exist";
}

define('PI', 3.14);

echo "Pi = " . PI;

$arr = array(
    '1' => "One",
    '2' => "Two",
    '3' => "Three"
);
print_r($arr);
var_dump($arr);

$arr2 = [1, 2, 3, 4, 5, ["test", 123, true]];
print_r($arr2);

$arr2[5][0] = "best";
print_r($arr2);

$a = 40;
$b = 50;
$c = 30;

if ($a > $b and $a > $b) {
    echo "A = $a = maksimum";
} else if ($b > $a and $b > $c) {
    echo "b = $b = maksimum";
} else echo "c = $c = maksimum";
echo "<br/>";

$x = 1;
$duim = 2.54;
$sm = $duim / $x;
echo "10 duimiv = ", $x * 10 * 2.54, "sm";
echo "<br/>";
echo "10 sm = ", $x * 10 / 2.54, "duimiv";
