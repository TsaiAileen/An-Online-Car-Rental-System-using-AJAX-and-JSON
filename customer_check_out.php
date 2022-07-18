<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Out</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="style.css" rel="stylesheet">

    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
    <h1>Car Rental Center</h1>
</head>
<body>
    <?php
        session_start();
        $car = array();
        $cars = array();

        $orderPrice = 0; //sum price

        //To get carts details
        foreach ($_SESSION as $key=>$val){
            if (is_array($val)){
                $car = $val;
                array_push($cars,$car);
                //$carType = $car[1];
                $pricePerDay = $car[2];
                $rentalDays = $car[3];
                $orderPrice = $orderPrice + ($pricePerDay * $rentalDays);
            }
        }
        //print_r($cars);

    ?>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="w-100 text-center" style="font-size: 28px;font-family:Raleway, sans-serif;font-weight: 600;">
                <!-- Car Reservation -->
                <!--<a href="index.php"><image class="col-sm-12 col-md-12 col-lg-12" src="images\table-title.png" /></a>-->
                <h2>Check Out</h2>
            </div>
        </div>
    </header>
    <main id="main" style="margin-top:50px;">
        <!--<form method="POST" >-->
        <div class="wrapper">
            <div class="container-fluid">
                <h4>Customer Details and Payment</h4>
                <h5>Please fill in your details. <span style="color:red">*</span>indecates require field</h5>
                <div class="row" style="margin-top:30px;">
                    <div class="col-md-12">
                        <!--<div class="page-header">
                            <h2>Check Out</h2>
                            <h3>Customer Details and Payment</h3>
                            <h4>Please fill in your details. <span style="color:red">*</span>indecates require field</h4>
                        </div>-->
                        
                        <form id="formCheckOut" method="post" action="check_out_submitted.php" onsubmit="return validate();">
                            
                            <div class="form-group">
                                <label>First Name<span style="color:red">*</span></label>
                                <input type="text" name="firstName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name<span style="color:red">*</span></label>
                                <input type="text" name="lastName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address<span style="color:red">*</span></label>
                                <input type="text" id="emailAddress" name="emailAddress" class="form-control" required>
                                <p id ="errEmail" style="display:none;"><span style="color:red">Email not valid</span></p>
                            </div>
                            <div class="form-group">
                                <label>Address Line 1<span style="color:red">*</span></label>
                                <input type="text" name="addressOne" class="form-control"required>
                            </div>
                            <div class="form-group">
                                <label>Address Line 2</label>
                                <input type="text" name="addressTwo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>City<span style="color:red">*</span></label>
                                <input type="text" name="city" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>State<span style="color:red">*</span></label>
                                <select name = "state" class="form-select">
                                    <option>Australia Capital Territory</option>
                                    <option>New South Wales</option>
                                    <option>Victoria</option>
                                    <option>Queensland</option>
                                    <option>South Australia</option>
                                    <option>Western Australia</option>
                                    <option>Nothern Territory</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Post Code<span style="color:red">*</span></label>
                                <input type="text" name="postCode" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Payment Type<span style="color:red">*</span></label>
                                <select name = "paymentType" class="form-select">
                                    <option>Visa</option>
                                    <option>Master</option>
                                    <option>American Express</option>
                                    <option>UnionPay</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="orderPrice">You are required to pay $</label>
                                <input type="text" name="orderPrice" class="form-control" value="<?php echo $orderPrice;?>" readonly="readonly">
                            </div> 
                            <input type="button" class="btn btn-primary" name="continueSelection" value="Continue Selection" onclick="window.location.href='index.php';">
                            <input type="submit" class="btn btn-primary" name="booking" value="Booking">
                        </form>
                        
                    </div>
                </div>        
            </div>
        </div>
    </main>
</body>
</html>
<script type="text/javascript">
    //document ready
    $(function(){

    });

    //validate before submit
    function validateSubmit(){
        //alert('flase');
        //return false;
        var email = $('#emailAddress').val();
        console.log(isEmail(email))
        if (IsEmail(email))
        {
            $.ajax({
                method: "POST",
                url: "check_out_submitted.php",
                data: ""
                .done(function( response ) {
                })
            });
        }
        else
        {
            alert('email formt error!!');
        }
    };

    function isEmail(email) {
        return true;
    }

    function validate(){
        var error="";
        var $emailAddress = $('#emailAddress');
        if( $emailAddress.val().indexOf('\@') == -1 || $emailAddress.val().indexOf('\.') == -1)
        {
            error = " Email format not valid. ";
            $('#errEmail').show();
            return false;
        }else{
            $('#errEmail').hide();
            return true;
        }
        return true;
    }
</script>
