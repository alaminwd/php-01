<?php

$n = 12;

$result = $n % 2 ;

$output = match($result){
    0=>"$n is even number",
    1=>"$n is odd number",
};

echo $output;

echo PHP_EOL;

$color = "blue";

$output2 = match($color){
    "red"=>"red is Primary Color",
    "yellow"=>"yellow is secondary Color",
    "blue"=>"Fahim like this color ",
    default=> "Invalid Color",
};

echo $output2;
echo PHP_EOL;


$fahim = ($color == "blue")?"Fahima like this color" :"invalid color";

echo $fahim;