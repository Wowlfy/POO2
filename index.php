<?php


require_once 'Formula1.php';

$charlesL = new Formula1('red',1,'Gasoline');

$maxV = new Formula1('Blue',1,'Gasoline');

$lap = 1;
$maxLap = 10;

for ($i=1;$i<$maxLap;$i++){
    $charlesL->forward();
    $lmax->forward();
    echo "The " . $charlesL->getColor() . " passed the " . $i . " Lap." . PHP_EOL;
    echo "The " . $maxV->getColor() . " passed the " . $i . " Lap." . PHP_EOL;
    $lap++;
}

if ($lap = 10) {
    echo "the Race is end";
}   

 echo '🏆 '. $charlesL->getColor() . " and " . $maxV->getColor() . ' cars won 💙';
