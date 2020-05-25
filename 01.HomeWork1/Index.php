<?php
//Дано номер дня тижня (1 – понеділок і т.д.). Визначити чи це вихідний день.  (if)
$monday = 1;
$tuesday = 2;
$wednesday = 3;
$thursday = 4;
$friday = 5;
$saturday = 6;
$sanday = 7;

$how_it_day = 7;
echo "1. ";
if (($how_it_day >= 1) && ($how_it_day <= 5)) {
    echo "Це робочий день - $how_it_day";
} elseif (($how_it_day >= 6) && ($how_it_day <= 7)) {
    echo "Це вихідний день - $how_it_day";
} else  echo "Ця цифра не відповідає дню тижня!!!!!!!";
echo "\n\n";

//Дано тварина (номер тварини. 1 – жираф. 2 – орел. тощо). Вивести клас, до якого відноситься тварина (хижак, травоїдна). (Switch)
$i = 0;
$count_name = 3;
echo "2. ";

$Jiraf = 1;
$Orel = 2;
$Lev = 3;
$Korop = 4;

if ($count_name == 1)
    $i = 1;
elseif (($count_name == 2) || ($count_name == 3))
    $i = 2;
elseif ($count_name == 4)
    $i = 3;
else echo "Error!!!";
switch ($i) {
    case 1:
        echo "травоїдний";
        break;
    case 2:
        echo "хижак";
        break;
    case 3:
        echo "риба";
        break;
}
echo "\n\n";
//Дано країна. Вивести назву континенту. (Switch)
echo "3. ";
$arr = ["Ukraine", "Poland", "Turkey", "USA", "Australia", "SAR", "Argentina"];
print_r($arr);
$country = 2;
if (($country >= 0) || ($country <= 2))
    $i = 1;
elseif ($country == 3)
    $i = 2;
elseif ($country == 4)
    $i = 3;
elseif ($country == 5)
    $i = 4;
elseif ($country == 6)
    $i = 5;
else echo "Error!!!";
switch ($i) {
    case 1:
        echo "Evropa";
        break;
    case 2:
        echo "North America";
        break;
    case 3:
        echo "Australia";
        break;
    case 4:
        echo "Africa";
        break;
    case 5:
        echo "South America";
        break;
}
echo "\n\n";

//Є 10 чисел. Знайти суму та середнє арифметичне цих чисел. - while 
echo "4. ";
$sum = 0;
$sa = 0;
$i = 0;
$arr2 = [4, 8, 6, 9, 2, 4, 7, 3, 6, 1];
while ($i != 9) {
    $i++;
    $sum += $arr2[$i];
    $sa += $arr2[$i] / sizeof($arr2);
}
echo "Сума чисел = $sum\n";
echo "Середнє арифметичне = $sa";
