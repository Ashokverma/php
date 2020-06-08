<?php

$a=['Ashok','computer','board'];

//echo  $a['2'];

echo "<pre>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

//echo $age['Ben'];


print_r($age);

?>
\\



 <?php 


    $xml='<?xml version="1.0" encoding="UTF-8"?>
    <snacks_menu_of_girl_hostel>
        <food_items>
        <br/>
            <name>SAMOSA</name>
            <price>Rs 7</price>
            <br/>
        </food_items>
        <food_items>
        <br/>
            <name>NOODLES</name>
            <price>RS 25</price>
            <br/>
        </food_items>
        <food_items>
        <br/>
            <name>BUTTER TOAST</name>
            <price>RS 15</price>
            <br/>
        </food_items>
        <food_items>
        <br/>
            <name>ALOO TOAST</name>
            <price>RS 20</price>
            <br/>
        </food_items>
        <food_items>
        <br/>
            <name>MAGGI</name>
            <price>RS 12</price>
            <br/>
        </food_items>
        <food_items>
        <br/>
            <name>SPRING ROLLS</name>
            <price>RS 20</price>
            <br/>
        </food_items>
        <food_items>
        <br/>
            <name>BHEL PURI</name>
            <price>RS 25</price>
                <br/>
        </food_items>
        <food_items>
        <br/>
            <name>NIMBUPANI</name>
            <price>RS 10</price>
            <br/>
        </food_items>
        <food_items>
        <br/>
            <name>PASTA</name>
            <price>RS 50</price>
            <br/>
        </food_items>

    </snacks_menu_of_girl_hostel>';


    $var=simplexml_load_string($xml);

    echo "<pre>";

    print_r($var);


    ?>