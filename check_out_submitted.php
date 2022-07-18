<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My submitted page</title>

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
					<div class="page-header">
						<h2>Your Submitted Details</h2>
					</div>
					<!--<a href="index.php"><image class="col-sm-12 col-md-12 col-lg-12" src="images\table-title.png" /></a>-->
				</div>
			</div>
		</header>
		<main id="main" style="margin-top:120px;margin-left:30%;margin-right:30%;">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							
							<!--<form method="post">-->
							<div class="form-group">
								<label>First Name<span style="color:red">*</span></label>
								<input type="text" name="firstName" class="form-control" readonly="readonly" value="<?php echo $_POST['firstName'];?>">
							</div>
							<div class="form-group">
								<label>Last Name<span style="color:red">*</span></label>
								<input type="text" name="lastName" class="form-control" readonly="readonly"  value="<?php echo $_POST['lastName'];?>">
							</div>
							<div class="form-group">
								<label>Email Address<span style="color:red">*</span></label>
								<input type="text" name="emailAddress" class="form-control" readonly="readonly"  value="<?php echo $_POST['emailAddress'];?>">
							</div>
							<div class="form-group">
								<label>Address Line 1<span style="color:red">*</span></label>
								<input type="text" name="addressOne" class="form-control" readonly="readonly"  value="<?php echo $_POST['addressOne'];?>">
							</div>
							<div class="form-group">
								<label>Address Line 2<span style="color:red">*</span></label>
								<input type="text" name="addressTwo" class="form-control" readonly="readonly"  value="<?php echo $_POST['addressTwo'];?>">
							</div>
							<div class="form-group">
								<label>City<span style="color:red">*</span></label>
								<input type="text" name="city" class="form-control" readonly="readonly"  value="<?php echo $_POST['city'];?>">
							</div>
							<div class="form-group">
								<label>State<span style="color:red">*</span></label>
								<input type="text" name="state" class="form-control" readonly="readonly"  value="<?php echo $_POST['state'];?>">
							</div>
							<div class="form-group">
								<label>Post Code<span style="color:red">*</span></label>
								<input type="text" name="postCode" class="form-control" readonly="readonly"  value="<?php echo $_POST['postCode'];?>">
							</div>
							<div class="form-group">
								<label>Payment Type<span style="color:red">*</span></label>
								<input type="text" name="paymentType" class="form-control" readonly="readonly"  value="<?php echo $_POST['paymentType'];?>">
							</div>
							<div class="form-group">
									<label for="orderPrice">You are required to pay $</label>
									<input type="text" name="orderPrice" class="form-control" value="<?php echo $orderPrice;?>" readonly="readonly">
								</div>
							<!--<input type="button" class="btn btn-primary" name="continueSelection" value="Continue Selection">
							<input type="submit" class="btn btn-primary" name="booking" value="Booking">
							</form>-->
						</div>
					</div>        
				</div>
			</div>
			<div style="font-weight:bold;text-align:center;padding:20px;"><h3>Thank you!</h3> </div>
		</main>
	</body>
</html>