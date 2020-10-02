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


new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as $param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    echo implode(" - ",$params);
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i++) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes))][rand(0, 10)];

    echo $randname;
}

echo "Here is the name: " . combineNames();

new_exercise(7);
function copyright(int $year) {
    return "&copy; $year BeCode";
}
//print the copyright
// it's missing an int data, also was missing a way to print it on screen
echo copyright((int)date('Y'));

new_exercise(8);
function login(string $email, string $password) {
    if($email === 'john@example.be' and $password === 'pocahontas') {
        return 'Welcome John';
        return ' Smith';
    }else {
        return 'No access';
    }
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!
