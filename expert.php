<?php
declare(strict_types=1);

ini_set('display_errors', '1');

ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


echo "Exercise 1 starts here:";

function new_exercise() {
    $x=1;
    //$x was undefined, this is what was causing the error.
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}
new_exercise(2);
// === Exercise 2 ===



//arrays start counting from 0, not 1, so instead of monday it read tuesday.
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;
