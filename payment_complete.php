<?php
//echo '<b>Transaction In Process, Please do not reload</b>';
require 'admin/configDb/config.php';
// echo '<pre>';
// print_r($_POST);
$payment_mode=$_POST['payment_type'];
$pay_id=$_POST['mihpayid'];
$status=$_POST["payu_status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$MERCHANT_KEY = 'DHuM1K'; 
$SALT = 'tLIa4u1pdBwleEUqK5CKxGwsPVCswdCv';
$udf5='';
$keyString 	= $MERCHANT_KEY .'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
$keyArray 	= explode("|",$keyString);
$reverseKeyArray = array_reverse($keyArray);
$reverseKeyString =	implode("|",$reverseKeyArray);
$saltString     = $SALT.'|'.$status.'|'.$reverseKeyString;
$sentHashString = strtolower(hash('sha512', $saltString));


if($sentHashString != $posted_hash){
	$conn->query("update `order_tbl` set `payment_status`='$status', `mihpayid`='$mihpayid' where `txnid`='$txnid'");	?>
	<script>
		window.location.href = 'payment_fail.php';
		</script>
		<?php
} else{
	$conn->query("update `order_tbl` set `payment_status`='$status', `mihpayid`='$mihpayid' where `txnid`='$txnid'");?>
		<script>
		window.location.href = 'thankyou.inc.php';
		</script>
<?php	
}
?>