<?php
$GamerBall = 0;
$CompBall = 0;
for ($i = 0; $i < $_POST['count']; $i++) {
    $Gamer1 = rand(1, 6);
    $Gamer2 = rand(1, 6);

    $Comp1 = rand(1, 6);
    $Comp2 = rand(1, 6);

    //echo "У мене випало{$Gamer1} і {$Gamer2} \nУ комютера {$Comp1} і {$Comp2}\n";

    $GamerSum = $Gamer1 + $Gamer2;
    $CompSum = $Comp1 + $Comp2;

    if (($Gamer1 == $Gamer2) && (($Gamer1 + $Gamer2) > ($Comp1 + $Comp2))) {
        $GamerBall += 2;
    } elseif (($Comp1 == $Comp2) && (($Gamer1 + $Gamer2) < ($Comp1 + $Comp2))) {
        $CompBall += 2;
    } elseif (($Gamer1 + $Gamer2) > ($Comp1 + $Comp2)) {
        $GamerBall += 1;
    } elseif (($Gamer1 + $Gamer2) < ($Comp1 + $Comp2)) {
        $CompBall += 1;
    }
}
echo "Мої бали:   $GamerBall\n";
echo "Копютера бали:   $CompBall";

// if (!empty($_POST)) {
//     $GamerBall = $_POST['gamer'];
//     $CompBall = $_POST['comp'];
// }

require_once "../Game_bound/Index.html";
