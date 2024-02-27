<?php

$n = 11;
$result = $n % 2 ;

switch($result){
    case $n > 0:
        echo "$n  is Positive Even Number";
        break ;
    case $n < 0 :
        echo "$n is negative Even Number";
}