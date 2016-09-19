<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$NbPrenoms = count($students);
$SommeAges = array_sum($students);
$MoyenneAges = $SommeAges/$NbPrenoms;


    foreach ($students as $key => $age) {
        echo   $key.'  =>  '.$age. '<br />';

}

echo 'Moyenne Ages  =>  '. $MoyenneAges;




?>