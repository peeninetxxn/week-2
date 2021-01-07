<?php
    //Global Variable Scope
    $message = "Hello World";
    echo $message;

    function myTest(){
        $message = "<br />Mark<br />"; //Local scope
        echo "<br />$message<br />";
    }
    myTest();//Calling function
    echo $message;
?>