<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SRI SAIDATTA MANASA PEETHAM - DHRMA GAUSHALA</title>
    <link rel="icon" href="img/fav.png" type="image/gif">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="css/slicknav.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	<style>
		body {
			background-color: whitesmoke;
		}

		@media print {
			.print {
				display: none;
			}

		}
	</style>
</head>

<body>
	<div class="header-area print">
		<div class="social-media">
			<div class="container">
				<ul>
					<li><a href="tel:+917981756410"><i class="fa fa-phone"></i>(+91) 7981756410</a></li>
					<li><a href="mailto:srisaidattamanasapeetham@gmail.com"><i class="fa fa-envelope-o"></i>srisaidattamanasapeetham@gmail.com</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo">
						<a href="index.html"><img src="img/logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="mainmenu-wrap">
						<div class="row">
							<div class="mainmenu">
								<ul id="mainmenu">
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="service.html">Services</a></li>
									<li><a href="recent.html">Recent Activities</a></li>
									<li><a href="gallery.html">Gallery</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="donation.php">Donate Now</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php


	// following files need to be included
	require_once("config_paytm.php");
	require_once("encdec_paytm.php");

	$paytmChecksum = "";
	$paramList = array();
	$isValidChecksum = "FALSE";

	$paramList = $_POST;
	$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

	//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
	$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.
	?>
	<?php
	if ($isValidChecksum == "TRUE") {
		//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
		if ($_POST["STATUS"] == "TXN_SUCCESS") {

			if (isset($_POST['ORDERID'], $_POST['STATUS'], $_POST['TXNAMOUNT'], $_POST['TXNDATE'], $_POST['TXNID'])) {
				// echo 'Order id=' . $_POST['ORDERID'];
				// echo 'Amount=' . $_POST['TXNAMOUNT'];
				// echo 'STATUS=' . $_POST['STATUS'];
				// echo 'TXNID=' . $_POST['TXNID'];
				// echo 'TXNDATE=' . $_POST['TXNDATE'];
	?>
				<div style="max-width: 400px; margin:auto; background-color:white;margin-top:50px">
					<div class="bg-success m-auto d-flex align-items-center justify-content-center text-white" style="    background-color: green;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;">
						<h5 class="" style="margin-bottom: 0">Payment Success</h5>
						<div class="bg-white text-dark p-1  ml-2" style="border-radius: 50%;width: 40px;
    height: 40px;margin:15px">
							<i class="fa fa-check" aria-hidden="true" style="
							    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;"></i>
						</div>
					</div>
					<div class="" style="padding: 15px">
 						<div class="d-flex justify-content-between align-items-center flex-wrap flex-column text-center w-100">
							<p class="m-0"> To: Sri Sai Datta Manasa Peetham </p>
							<p class="m-0" style="font-size: 25px;"> <i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_POST['TXNAMOUNT'] ?></p>
						</div>
						<hr style="height: 1px; background-color:gray">
						<div style="display:flex;justify-content:space-between">
							<p>Order id </p>
							<p><?php echo $_POST['ORDERID']; ?></p>
						</div>
						<div  style="display:flex;justify-content:space-between">
							<p>Status </p>
							<p><?php echo $_POST['STATUS']; ?></p>
						</div>
						<div  style="display:flex;justify-content:space-between">
							<p>Txn Id </p>
							<p><?php echo $_POST['TXNID']; ?></p>
						</div>
						<h5 class="text-center"><?php echo $_POST['TXNDATE']; ?></h5>
					</div>
					<div class="bg-light p-3 text-center"  style="text-align:center">
						<h6 class="m-0">
							Please Contact for Further Information
						</h6>
						<a href="mailto:contact@srisaidattamanasapeetham.org" style="font-size: 18px;">contact@srisaidattamanasapeetham.org</a>
					</div>
					<div style="padding:40px 0;margin:auto;text-align:center">
						<button onclick="window.print()" class="print btn btn-success" style="width: 25%">Print</button>
					</div>
				</div>

			<?php
			}
			//Process your transaction here as success transaction.
			//Verify amount & order id received from Payment gateway with your application's order id and amount.

			//written by kmk starts here

			$v2 = 1;
			$v3 = $_POST['TXNID'];
			$v4 = $_POST['PAYMENTMODE'];
			$v5 = $_POST['CURRENCY'];
			$v6 = $_POST['BANKTXNID'];
			$v11 = $_POST['TXNDATE'];

			//written by kmk ends here
		} else {
			?>
			<div class="bg-white text-center p-3 my-5 mx-auto" style="max-width: 350px;">
				<i class="fa fa-times-circle" aria-hidden="true" style="font-size: 50px;color:red"></i>
				<h3 class="text-danger"> Transaction status is failure</h3>
			</div>
	<?php
			// echo "<b>Transaction status is failure</b>" . "<br/>";
			//written by kmk starts here
			$v2 = 0;
			$v3 = "TXN_Failed";
			$v4 = $_POST['PAYMENTMODE'];
			$v5 = $_POST['CURRENCY'];
			$v6 = "TXN_Failed";
			$v11 = date("Y-m-d H:i:s");

			//written by kmk ends here	
		}


		//written by kmk starts here

		include "./inc/dbd.php";

		// prepare and bind
		$stmt = $conn->prepare("UPDATE Donations SET Tran_Status=?, Txn_id=?,  TXN_Date=?, PAYMENTMODE=?, CURRENCY=?, BANKTXNID=? WHERE Donations.Order_id=?");
		$stmt->bind_param("issssss", $v2, $v3, $v11, $v4, $v5, $v6, $orderid);

		// set parameters and execute


		$orderid = $_POST['ORDERID'];


		$stmt->execute();


		$stmt->close();



		include "./inc/mail.inc.php";

		$sql = "SELECT FName, LName, Phone, Email, Amount, Tran_Status, TXN_Date FROM Donations WHERE Order_id=?";
		$stmt2 = $conn->prepare($sql);
		$stmt2->bind_param("s", $orderid);
		$stmt2->execute();

		$result = $stmt2->get_result(); // get the mysqli result
		$details = $result->fetch_assoc();
		$stmt2->close();
		$conn->close();

		if ($details["Tran_Status"] == "1") {
			$emailTo = $details["Email"];
			$emailToName = $details["FName"] . " " . $details["LName"];


			$m = new email('Donation Receipt from SRI SAIDATTA MANASA PEETHAM', $details["Email"], $details["FName"], $details["LName"]);

			$m->sendfrom('Contact');

			$m->generatefordonation(date('Y-m-d H:i:s', strtotime($details["TXN_Date"])), $details["Amount"], $orderid);

			// $m->send();
			$m->sendwithattachment();
		}


		// var_dump($paramList);
		//written by kmk ends here    


	} else {
		echo "<b>Checksum mismatched.</b>";
		//Process transaction as suspicious.
	}

	?>

	<div class="footer-top-area print">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="single-footer-item">
						<div class="footer-logo">
							<img src="img/logo-icon.png" alt="">
							<a href="index.html">
								<h1>SRI SAI DATTA MANASA <span>PEETHAM</span></h1>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="single-footer-item-padding-left">
						<div class="single-footer-item footer-info">
							<h2>Contact Us</h2>
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> 12-126, Main Road Gandhinagar,
								Pendurthi, Visakhapatnam, AP. Pin-531173
							</p>
							<p><i class="fa fa-phone"></i><a href="tel:+917981756410">(+91) 7981756410</a></p>

							<p><i class="fa fa-envelope-o"></i><a href="mailto:srisaidattamanasapeetham@gmail.com">srisaidattamanasapeetham@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="single-footer-item">
						<li style="color:orange;">
							<a href="terms-conditions.html">Terms and conditions</a>
						</li>
						<li style="color:orange;">
							<a href="disclaimer.html">Disclaimer</a>
						</li>
						<li style="color:orange;">
							<a href="privacy-policy.html">Privacy-Policy</a>
						</li>
						<li style="color:orange;">
							<a href="intellectual-property.html">Intellectual Property</a>
						</li>
						<li style="color:orange;">
							<a href="refund-cancellationpolicy.html">Refund & cancellation policy</a>
						</li>
					</div><br>
					<div class="single-footer-item">
						<h3>Follow Us</h3>
						<div class="footer-social-icon">
							<a href="#"><i class="fa fa-facebook social-icon-border"></i></a>
							<a href="#"><i class="fa fa-twitter social-icon-border"></i></a>
							<a href="#"><i class="fa fa-youtube social-icon-border"></i></a>
							<a href="#"><i class="fa fa-instagram social-icon-border"></i></a>
						</div>
						<div id="google_translate_element"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="footer-bottom-right">
						<p>SRI SAIDATTA MANASA PEETHAM <span>&copy;</span> 2020. All right reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>