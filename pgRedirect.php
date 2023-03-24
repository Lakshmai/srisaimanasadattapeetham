<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("config_paytm.php");
require_once("encdec_paytm.php");

$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];



// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;


$paramList["CALLBACK_URL"] = "https://www.srisaidattamanasapeetham.org/pgResponse.php";
/* 
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer

$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);


//written by kmk starts here

    // $paramList["fname"] = stripcslashes($_POST["FName"]);
    // $paramList["lname"] = stripcslashes($_POST["LName"]);
    // $paramList["phn"] = stripcslashes($_POST["Phone"]);
    // $paramList["eml"] = stripcslashes($_POST["Email"]);
    // $paramList["addr"] = stripcslashes($_POST["address"]);
    // $paramList["eventtype"] = stripcslashes($_POST["event"]);
    // $paramList["amount"] = stripcslashes($_POST["TXN_AMOUNT"]);
    // $paramList["orderid"] = stripcslashes($_POST["ORDER_ID"]);
    
    include "./inc/dbd.php";
    
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO Donations (Order_id,  FName, LName, Phone, Email, Address, Activity_Type, Amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssi", $v1, $v4, $v5, $v6, $v7, $v8, $v9, $v10);

    // set parameters and execute
    
    $v1 = stripcslashes($_POST["ORDER_ID"]);
    $v4 = stripcslashes($_POST["FName"]);
    $v5 = stripcslashes($_POST["LName"]);
    $v6 = stripcslashes($_POST["phn"]);
    $v7 = stripcslashes($_POST["Email"]);
    $v8 = stripcslashes($_POST["address"]);
    $v9 = stripcslashes($_POST["event"]);
    $v10 = stripcslashes($_POST["TXN_AMOUNT"]);
    

    $stmt->execute();


    $stmt->close();
    $conn->close();
//written by kmk ends here  

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>