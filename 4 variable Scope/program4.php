<?php

$x="5"; // Global Declaration or Global scope

function test1(){
    echo $x;  // Not work
}
test1();

function test2(){
    $y=5; // Declaration of local scope of variable
    echo $y; // Works locally only
}
test2();

echo $y; // Not working

?>