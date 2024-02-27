<?php

$n = 13;

$result = ($n % 2);

switch($result){
    case 0:
        echo "$n is Even Number";
        break ;
    case 1 :
        echo "$n is Odd Number";
}


echo PHP_EOL;
echo PHP_EOL;


$day = "saturday";

switch ($day) {
    case "saturday":
        echo "It's the beginning of the week!";
        break;

    case "Friday":
        echo "It's almost the weekend!";
        break;

    default:
        echo "It's a regular day.";
}