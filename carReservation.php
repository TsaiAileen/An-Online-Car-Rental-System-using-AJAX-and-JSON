<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!--<style>
		.show{
			display:block;
		}
		.hide{
			display:none;
		}
	</style>-->
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
    <?php
        session_start();
        //require("cart.php");
        $car = array();
        $cars = array();

        foreach ($_SESSION as $key=>$val){
            if (is_array($val)){
                $car = $val;
                array_push($cars,$car);
                /*foreach ($car as $key1 => $val1) {
                    echo $val1 . "," ;
                }*/
                $carType = $car[1];
                $pricePerDay = $car[2];
                $rentalDays = $car[3];
                $thumbNail = $car[0];
                $qty = $car[4];
                /*echo "carType:" . $carType . "<br/>";
                echo "pricePerDay:" . $pricePerDay . "<br/>";
                echo "rentalDays:" . $rentalDays . "<br/>";
                echo "thumbNail:" . $thumbNail . "<br/>";
                echo "qty:" . $qty . "<br/>";*/

            }
        }
        //print_r($cars);
    ?>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="w-100 text-center" style="font-size: 28px;font-family:Raleway, sans-serif;font-weight: 600;">
                <!-- Car Reservation -->
                <a href="index.php"><image class="col-sm-12 col-md-12 col-lg-12" src="images\table-title.png" /></a>
            </div>
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

    <main id="main" style="margin-top:120px;">

        <!-- ======= Services Section ======= -->
        <section id="course" class="services ">
            <div class="container"  id="car_table">
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

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Aileen</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer

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
    <script src="assets/js/main.js"></script>
</body>
</html>
<script type="text/javascript">
    //document ready
    $(function(){
        var carArr = <?php echo json_encode($cars); ?>;

        var _html="";
        for(var i=0; i<carArr.length; i++){
            //console.log(jArray[i]);
            var carType = carArr[i][1];
            var pricePerDay = carArr[i][2];
            var rentalDays = carArr[i][3];
            var thumbNail = carArr[i][0];
            var qty = carArr[i][4];
            // console.log("carType:" + carType);
            // console.log("pricePerDay:" + pricePerDay);
            // console.log("rentalDays:" + rentalDays);

            var idno = i+1;

            //i: row index
            //_html += '<div class="row">'
            _html += '  <div class="form-inline col-12">';
            _html += '              <div class="car-image-s col-sm-2 col-md-2 col-lg-2" style="width:180px;height:120px;"><img id="img_' + idno + '" style="width:60%;" src="' + thumbNail.replace("\\","\/") + '"></div>';
            _html += '              <div id="carType_' + idno + '" class="car-title col-sm-4 col-md-4 col-lg-4" style="text-align:left;">' + carType + '</div>';
            _html += '              <div id="pricePerDay_' + idno + '" class="car-title-sub col-sm-2 col-md-2 col-lg-2" style="text-align:center;">' + pricePerDay + '</div>';
            _html += '              <div id="rentalDays_' + idno + '" class="car-title-sub col-sm-2 col-md-2 col-lg-2" style="text-align:center;"><input type="text" class="form-control" id="inpRentalDays_"' + idno + ' placeholder="Rental Days" value="' + rentalDays + '" style="width:50px;"/></div>';
            var deleteCart = "deleteCart('" + carType + "');";
            _html += '              <button type="button" id="deleteCart_' + idno + '" class="btn btn-primary col-sm-2 col-md-1 col-lg-1 btnDelete" style="" onclick="' + deleteCart + '">Delete</button>';
            _html += '  </div>';
        }

        _html += '      <div class="col-12" style="text-align:right;">';
        var checkout = "checkout('" + carType + "');";
        _html += '          <button type="button" id="checkOut" class="btn btn-primary col-sm-6 col-md-5 col-lg-3" style="" onclick="' + checkout + '">Proceding to CheckOut</button><br>';
        _html += '      </div>';

        $('#car_table').html(_html);


        // function checkout(carType){
        //     window.location.href="carReservation.php";
        // }

    });

    function checkout(carType){
        window.location.href="customer_check_out.php";
    }

    function deleteCart(carType){
        $.ajax({
            method: "POST",
            url: "removeFromCart.php",
            data: { carType: carType}
        })
        .done(function( response ) {
            console.log("remove from cart success!");
            window.location.href="carReservation.php";
        })
    }

</script>