<?php
$number1 = 3050;
$number2 = 990099;
$number3 = 50000;

if ($number1 > $number2 && $number1 > $number3){
    echo $number1;
} elseif ($number2 > $number1 && $number2 > $number3){
    echo $number2;
} else{
    echo $number3;
}