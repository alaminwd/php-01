<?php

$years = 2016;

if($years % 4 ==0 && $years % 100  ==0 && $years % 400 ==0 ){
    echo "{$years} is a leap year";
}
elseif($years % 4 ==0 && $years %4  ==100 ){
    echo "{$years} is not a leap year";
}
elseif($years % 4 ==0 ){
    echo "{$years} is a leap year";
}
else{
    echo "{$years} is not a leap year";
} 

echo PHP_EOL;
echo PHP_EOL;


if($years % 4 == 0 && ($years % 100 != 0 || $years %400 == 0)){    // $Years = 2000;
    echo "$years is a leap year";                                  // 2000 %4 == 0 ; true
}                                                                  // 2000 %100 !=0; false
else{                                                              // 2000 % 400 == 0 true
    echo "{$years} is not a leap year";                             //if(true && (false || ture));
    }                                                                
                                                                     // if(ture && true);




echo PHP_EOL;
echo PHP_EOL;



if(true && false){   // true && false = false;
                     // false && ture = false;
                     // false && false = false ;
    echo "false"; 
}

if(true && true){   // true && true = true;
                    // false && false = false ;
    echo "true"; 
}


echo PHP_EOL;
echo PHP_EOL;


if(true || false){    // true || true = true;
    echo "true";      // ture || false = true;
}                     //false || true = true