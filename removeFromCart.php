<?php
    session_start();
    
    $carType = $_POST["carType"];

    //session is not null
    if(isset($_SESSION[$carType]) && !empty($_SESSION[$carType])) {
        unset($_SESSION[$carType]);
    }

    //$_SESSION[$carType] = $car;
    //print_r($_SESSION);

?>