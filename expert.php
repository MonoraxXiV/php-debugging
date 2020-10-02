<?php
declare(strict_types=1);

ini_set('display_errors', '1');

ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


echo "Exercise 1 starts here:";

function new_exercise($x) {

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

new_exercise(3);

// in php strings in double quotes are for special characters
$str = 'Debugged ! Also very fun';
echo substr($str, 0, 10);

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!


//for each needs an extra symbol being '&'
foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}
print_r($week);

new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array


//found at https://www.php.net/manual/en/control-structures.for.php (comments, 8 years ago by Matthiaz to be precise)


//basically putting an upper limit so it won't go past aa and thus stops at z.
$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);


}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array