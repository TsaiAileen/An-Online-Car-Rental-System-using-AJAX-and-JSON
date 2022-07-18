<?php
    session_start();
    
    /*$cars = array (
        //thumbnail,cartype,pricePerDay,rentalDays,qty
        array("images\\Toyota-Camry-2013.jpeg","Toyota-Camry-2013",240,1,1), 
        array("images\\Nissan-X-trail-2015.jpeg","Nissan-X-trail-2015",360,3,1)
        );*/

    $carType = $_POST["carType"];
    $pricePerDay = $_POST["pricePerDay"];
    $rentalDays = $_POST["rentalDays"];
    $thumbNail = $_POST["thumbNail"];
    $qty = 1;

    //initialize
    $car = array();

    //session is not null
    if(isset($_SESSION[$carType]) && !empty($_SESSION[$carType])) {
        $car= $_SESSION[$carType];
        $car[4] += $qty;
    } else {
        array_push($car,$thumbNail,$carType,$pricePerDay,$rentalDays,$qty);
    }

    //print_r("car array:" . (string)$car . "<br/>");

    foreach ($car as $key => $val) {
        echo $val . "," ;
    }
    echo "<br>";

    //add $car to session
    $_SESSION[$carType] = $car;
    print_r($_SESSION);

?>