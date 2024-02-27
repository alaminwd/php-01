<?php


$d = 12;
$o = 012;
$h =0x2B;


//conver to decimal number 

printf("Convert  decimal Number = %d , %d", $o,$h);

echo PHP_EOL;

//conver to binnary number
printf("%d Decimal to Binarry %b",$d, $d);


//conver to hexadecimal number
echo PHP_EOL;
printf("the hexadecimal equivment of %d is %x",1212, $d);

echo PHP_EOL;
echo PHP_EOL;


$float = 66.20354;
printf("%.2f", $float);


echo PHP_EOL;
echo PHP_EOL;

$int = 6667;
$int2 = 12;

printf("%04d \n", $int);
printf("%04d", $int2);


echo PHP_EOL;
echo PHP_EOL;

$int = 6667.4544;
$int2 = 12.4543;

printf("%07.2f \n", $int);
printf("%07.2f", $int2); 