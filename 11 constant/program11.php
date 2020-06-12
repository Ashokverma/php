<?php

# constant is global in Entire document

define("INCOME","20k");  // Case sensitive

echo INCOME;

# case Insensitive decalaration

define("WELCOME","Ashok verma",true);

echo welcome;

# Access in function

define("CAR","BUGATI");

function myDreamCar(){
    echo CAR;
}

myDreamCar();

?>