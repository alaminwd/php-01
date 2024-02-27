<?php

//Comparison Operators 
// 1.   == 	Equal
// 2.   !=  Not equal
// 3.   >	Greater than 
// 4.   <	Less than
// 5.   >=	Greater than or equal to
// 6.   <=  Less than or equal to



$n = 12 ;

if($n % 2 == 0){
    echo "$n is Even Number";
}
else{
    echo "$n is Odd Number";
}

echo PHP_EOL;


$Fahima = 100;
$alamin = 10;


if($Fahima == $alamin){
    echo "Fahima and alamin has same amount: of money";
}elseif($Fahima > $alamin){
    echo "Fahima has more money than alamin";
}
elseif($Fahima < $alamin){
    echo "Fahima has less money than alamin";
}

echo PHP_EOL;
echo PHP_EOL;


$age = 13;

if($age >= 13 && $age <=19){

    echo "This person is a Teenager";
}
else{
    echo "This person not a Teenager";
}


echo PHP_EOL;
echo PHP_EOL;

$food =  "tuna";


if("tuna" == $food || "salmon" == $food){
    echo "It has Vitamin D";
}
elseif("apple" == $food){
    echo "Apple doesn't containe Vitamin D";
}




