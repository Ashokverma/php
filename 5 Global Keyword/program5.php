<?php

$x=20;
$y=30;

function test1(){

      //  $y=$x+$y;

}
test1(); // Generates Error because you are accessing global variable in local scope 

function test2(){

    global $x, $y;
     $y=$x+$y;

    // echo $y;

    # or 

    $GLOBALS['y']=$GLOBALS['x'] + $GLOBALS['y'];
    
}
test2();


///$GLOBALS="6";
echo $y;  // Output 50

?>