<?php


$n = 11;

if($n == 12){
    echo "Twelve";
}
elseif($n == 10){
    echo "Ten";

}
else{
    echo "A Number";
}

echo PHP_EOL;

$ternary = ($n == 12)?'twelve' :(($n == 10)?"Ten": 'A number');
echo $ternary;



echo PHP_EOL;
echo PHP_EOL;


if($n % 2 == 0){
    echo "$n is Even Number";
}
else{
    echo "$n is Odd number";
}

echo PHP_EOL;

$ternary = $n % 2 == 0? "$n is Even Number":"$n is Odd Number";