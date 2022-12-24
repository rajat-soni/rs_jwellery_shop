<?php
include "admin/configDb/config.php";

echo '<b>Transaction In Process, transcation failed</b>';
$pay_id=$_POST['mihpayid'];
$status=$_POST["payu_status"];
$txnid=$_POST["txnid"];

$conn->query("update `order_tbl` set `payment_status`='$status', `mihpayid`='$pay_id' where `txnid`='$txnid'");?> 
<script>
window.location.href='payment_fail.php';
</script>
        

    
    
