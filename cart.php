<?php
    session_start();
    
    $carType ="";
    $pricePerDay="";
    $rentalDays="";
    $thumbNail="";
    $qty = 1;

    //initialize
    $car = array();

    if(isset($_SESSION[$carType]) && !empty($_SESSION[$carType])) {
        $carType = $_POST["carType"];
        $car= $_SESSION[$carType];
    }
    if(isset($_SESSION["pricePerDay"]) && !empty($_SESSION["pricePerDay"])) {
        $pricePerDay = $_POST["pricePerDay"];
    }
    if(isset($_SESSION["rentalDays"]) && !empty($_SESSION["rentalDays"])) {
        $rentalDays = $_POST["rentalDays"];
    }
    if(isset($_SESSION["thumbNail"]) && !empty($_SESSION["thumbNail"])) {
        $thumbNail = $_POST["thumbNail"];
    }
    
    foreach ($car as $key => $val) {
        echo $val . "," ;
    }
    echo "<br>";

?>