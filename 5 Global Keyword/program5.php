<?php

$x=20;
$y=30;

function test1(){

        $y=$x+$y;

}
test(); // Generates Error because you are accessing global variable in local scope 

function test2(){

    global $x, $y;
    $y=$x+$y;

    # or 

    $GLOBALS['y']=$GLOBALS['x'] + $GLOBALS['y'];
    
}

test2();

echo $y;  // Output 50

?>