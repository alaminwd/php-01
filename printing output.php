<?php

$name = "Al Amin";
$age = "22";

var_dump($name);
var_dump($age);

echo PHP_EOL;

var_dump($name, $age);

echo PHP_EOL;


$fname = "Al Amin";
$lname = "Sikdar";

echo "My name is {$fname} {$lname}";

echo PHP_EOL ;


// ==== Printf =====//

$boyfriend = "Raj Barmon";
$girlFriend = "Lima";

printf("My best name is %s and %s", $boyfriend, $girlFriend); 

echo PHP_EOL; 
echo PHP_EOL; 




$fname = "Issac";
$lname = "Newton";

printf('My name is %2$s %1$s ', $lname, $fname);
echo "\n";

$output = sprintf("My name is %s %s", $fname , $lname);

echo $output;



