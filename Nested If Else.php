<?php

$contiditon1 = true;
$contiditon2 = true;
$contiditon3 = false;


if($contiditon1){
    if($contiditon2){
        if($contiditon3){
            echo "Hello";
        }
        else{
            echo "One";
        }
    }
    else{
        echo "two";
    }
}
else{
    echo "three";
}

echo PHP_EOL;

if($contiditon1 && $contiditon2 && $contiditon3){
    echo "Hello"; 
}
elseif($contiditon1 && $contiditon2){
    echo "One";
}
elseif($contiditon1){
    echo "two";
}
else{
    echo "three";
}
