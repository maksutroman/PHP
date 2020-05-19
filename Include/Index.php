<?php
//include_once "function.php";
require_once "function.php";

$fun = Test(2, 3);
//echo "Result = " . $fun;

$arr = [5, 89, 21, 48, 93, 555, 46, 28, 59, 84];

for ($i = 0; $i < sizeof($arr); $i++) {
    //echo $arr[$i] . " ";
}

// foreach(){
// }

#example 2

$email = "";
$pass = "";

if (!empty($_POST)) {
    //$email = $_POST['email'];
    // $pass = $_POST['password'];
    // if (isset($_POST['check'])) {
    //     $check = $_POST['check'];
    //     echo $check;
    // }
    if ($email = "maksutroman@gmail.com" && $pass = "romeo13") {
        $email = "true";
        $pass = "true";
    }
}




// echo "Email = " . $email;
// echo "Password = " . $pass;

//require_once "views/header.html";
//require_once "views/main.html";
//require_once "views/footer.html";

$i = 0;
do {
    $randomNumber = rand(0, 100);
    $i++;
    // if ($i == 6) {
    //     break;
    // }
    echo $randomNumber . " ";
} while ($randomNumber != 6);
echo "I = " . $i;
