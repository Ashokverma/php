<?php

function test1(){
    static $x = 10;
    echo $x;
    $x++;
}

test1();
test1();
test1();
test1();
test1();
test1();
test1();
test1();
test1();
?>