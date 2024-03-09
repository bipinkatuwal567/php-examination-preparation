<?php
// 1. We create function using function keyword in php

/* Function without parameters */
function mySimpleFunctions(){
    echo "simple function";
}

/* Function with parameters */
function addNumber($value1, $value2){
    $sum = $value1 + $value2;
    echo "This sum of $value1 and $value2 is $sum";
}

/* Function which returns */
function multiplyNumber($num1, $num2){
    $multiply = $num1 * $num2;

    return $multiply;
}

/* Calling functions */
mySimpleFunctions();
echo "<br>";
addNumber(5, 5);
echo "<br>";

$funcVal = multiplyNumber(5, 5);
echo $funcVal;

?>