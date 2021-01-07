<?php
    $x = 5;
    $y = 10;
    $z = 0;
    function myTest(){
        //global $z = $x + $y;
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest();
    echo $z; //Outputs 15
?>