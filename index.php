<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hertz-UTS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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

</head>

<body>
    <!--read json-->
    <?php
        session_start();
        $_SESSION['session_id'] =md5 (uniqid ("")); 
        require("cart.php");
    ?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.php">Hertz-UTS</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a id="aCart" class="active" href="carReservation.php">Car Reservation</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <!--<section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Welcome to Serenity</h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>-->
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="course" class="services ">
            <div class="container">
                <div id="car_row" class="row">
                </div>
            </div>
        </section>
        <!-- End Services Section -->

    </main>
    <!-- End #main -->

    <!--Modal Dialog-->
    <!-- Modal AddToCart-->
    <div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    modal-message
                </div>
                <div class="modal-footer">
                    <button type="button" id="closeModal" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Cart-->
    <div id="Cart" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Car Rental Center</h5>
                    <button id="closeCart" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    modal-message
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnCheckout" class="btn btn-secondary" data-dismiss="modal">Proceeding to CheckOut</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <!--<div class="footer-top">
            <div class="container">

            </div>
        </div>-->

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Aileen</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="main.js"></script>

</body>

</html>

<script type="text/javascript">
	
    //var car_arr = [];

    //document ready
    $(function(){
        
        //alert('hello');

        var car_arr = [];

        getJsonData();

        function getJsonData(){
            
            car_arr = [];
    
            $.getJSON('carls.json', function(json_data) {
            
                var json_obj = [];
    
                for(var i in json_data){
                    json_obj.push([i, json_data[i]]);
                }
    
                for(var j =0;j<json_obj.length;j++){
                    //console.log(json_obj[j][0]);
                    //console.log(json_obj[j][1]);
    
                    var car_type = json_obj[j][0];
    
                    var car = [];
                    var car_prop = json_obj[j][1];
                    car.mileage = car_prop.mileage;
                    car.fuel_type = car_prop.fuel_type;
                    car.seats = car_prop.seats;
                    car.price_per_day = car_prop.price_per_day;
                    car.availability = car_prop.availability;
                    car.description = car_prop.description;
                    car.image = car_prop.image;
    
                    car_arr.push([car_type,car]);
                }
                        
                //car_arr
                //car_arr[0][0], car_arr[0][1]
                setCarRow();
            });
        }

        function setCarRow(){

            //clear content
            $('#car_row').empty();

            var _html="";
            var rowLength = car_arr.length;
            //console.log(rowLength);

            for (var i=0;i<rowLength;i++){
                var idno = i+1;

                //i: row index
                _html += '<div class="col-md-3">';
                _html += '    <div class="row">';
                _html += '        <div class="col-lg-12 video-box align-self-center position-relative">';
                _html += '              <div><img id="img_' + idno + '" class="car-image" src="' + car_arr[i][1].image.replace("\\","\/") + '" style="width:90%;"></div>';
                _html += '              <div id="carType_' + idno + '" class="car-title">' + car_arr[i][0] + '</div>';
                _html += '              <div id="mileage_' + idno + '" ><span class="car-title-sub">mileage:</span>' + car_arr[i][1].mileage + '</div>';
                _html += '              <div id="fueltype_' + idno + '" ><span class="car-title-sub">fuel type:</span>' + car_arr[i][1].fuel_type + '</div>';
                _html += '              <div id="seats_' + idno + '" ><span class="car-title-sub">seats:</span>' + car_arr[i][1].seats + '</div>';
                _html += '              <div id="pricePerDay_' + idno + '" ><span class="car-title-sub">price_per_pay:</span>' + car_arr[i][1].price_per_day + '</div>';
                _html += '              <div id="availability_' + idno + '" ><span class="car-title-sub">availability:</span>' + car_arr[i][1].availability + '</div>';
                _html += '              <div id="description_' + idno + '" ><span class="car-title-sub">description:</span>' + car_arr[i][1].description.substring(0,20) + '...' + '</div>';
                var add2cart = "addToCart('" + car_arr[i][0] + "');";
                _html += '              <button type="button" id="addToCart_' + idno + '" class="btn btn-primary add-to-cart" onclick="' + add2cart + '">Add to cart</button>';
                _html += '      </div>';
                _html += '   </div>';
                _html += '</div>';
            }

            //console.log(_html);

            //$('#car_row').html(_html);
            $('#car_row').html(_html);
        }
        
        //modal
        $('#closeModal').click(function(){
            $('#modalMessage').modal('hide');
        });

        $('.close').click(function(){
            $('#modalMessage').modal('hide');
        });

        //Cart
        /*$('#aCart').click(function(){
            //alert('hello');
            //$('#Cart').modal('show');
        });*/

        $('#closeCart').click(function(){
            //$('#Cart').modal('hide');
        });
    });
   
    function getJsonData(){
            
        var car_arr = [];

        $.getJSON('carls.json', function(json_data) {
        
            var json_obj = [];

            for(var i in json_data){
                json_obj.push([i, json_data[i]]);
            }

            for(var j =0;j<json_obj.length;j++){
                //console.log(json_obj[j][0]);
                //console.log(json_obj[j][1]);

                var car_type = json_obj[j][0];

                var car = [];
                var car_prop = json_obj[j][1];
                car.mileage = car_prop.mileage;
                car.fuel_type = car_prop.fuel_type;
                car.seats = car_prop.seats;
                car.price_per_day = car_prop.price_per_day;
                car.availability = car_prop.availability;
                car.description = car_prop.description;
                car.image = car_prop.image;

                car_arr.push([car_type,car]);
            }
                    
            //car_arr
            //car_arr[0][0], car_arr[0][1]
            //setCarRow();
            
        });

        return car_arr;
    }

    function addToCart(carType){
        
        var availability = false;

        var car_arr = [];

        //get json data real time
        $.getJSON('carls.json', function(json_data) {
        
            var json_obj = [];

            for(var i in json_data){
                json_obj.push([i, json_data[i]]);
            }

            for(var j =0;j<json_obj.length;j++){
                //console.log(json_obj[j][0]);
                //console.log(json_obj[j][1]);

                var car_type = json_obj[j][0];

                var car = [];
                var car_prop = json_obj[j][1];
                car.mileage = car_prop.mileage;
                car.fuel_type = car_prop.fuel_type;
                car.seats = car_prop.seats;
                car.price_per_day = car_prop.price_per_day;
                car.availability = car_prop.availability;
                car.description = car_prop.description;
                car.image = car_prop.image;

                car_arr.push([car_type,car]);
            }
                    
            //car_arr
            //car_arr[0][0], car_arr[0][1]
            //setCarRow();
            
            //20220514
            var pricePerDay = "";
            var rentalDays = 0;
            var thumbNail = "";

            var rowLength = car_arr.length;

            for (var i=0;i<rowLength;i++){
                if (car_arr[i][0] == carType){
                    availability = car_arr[i][1].availability;
                    pricePerDay = car_arr[i][1].price_per_day;
                    //rentalDays = car_arr[i][1].price_per_day;
                    thumbNail = car_arr[i][1].image;
                    break;
                }
            }

            if (availability){
                //Add to Cart
                //20220514
                $.ajax({
                    method: "POST",
                    url: "addToCart.php",
                    data: { carType: carType,pricePerDay:pricePerDay,rentalDays:1,thumbNail:thumbNail}
                    })
                    .done(function( response ) {
                        console.log("add to cart success!");
                    })
                    $('.modal-body').text('Add to the cart successfully.'); 
                
            } else {
                $('.modal-body').text('Sorry, the car is not available now. Please use try other cars.'); 
            }
            $('#modalMessage').modal('show'); //bootstrap modal dialog

        });

        

    }

</script>