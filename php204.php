<?php
    $x = 5;
    $y = 4;
    $z;

    function myTest(){
        global $x, $y, $z; //Global keyword
        $z = $x + $y;
        echo $z;
    }

    echo $z; //error
    myTest(); //Calling function
    echo $z; //Outputs 9
?>