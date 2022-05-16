<?php

require 'indexHeader.inc.php';
   
        foreach($_SESSION['cart'] as $key=>$value){
            $getcarte =  getProductDetails($conn,$key);
            $total_amount = 0;  
            $selling = $getcarte['0']['selling_price'];
            $qty = $value['qty'];
            $total_amount = $total_amount+($selling*$qty);
        }
        if(isset($_POST['save'])){
            $user_id = $_SESSION['USER_ID'];
            $adress = $_POST['address'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $pin = $_POST['pin'];
            $mobile = $_POST['mobile'];
            $payment_type = $_POST['payment_type'];
            $total_price = $total_amount;
            $payment_status = 'success';
            if($payment_type == 'COD'){
                echo "success";
            }
            $order_status = "pedding";
            $add_on = date('y-m-d h:i:s');
                if ($user_id != '' && $adress != '' && $state != '' && $city != '' && $pin != '' &&     $mobile         != '' && $payment_type != '' && $total_price != '' && $payment_status != '' && $payment_type != ''&& $order_status != '') {
                
                    $sql = " INSERT INTO `order_tbl`(`user_id`, `address`, `state`, `city`, `pin`, `mobile`, `payment_type`, `price`,`payment_status`,`order_status`, `add_on`) 
                    VALUES ('$user_id','$adress','$state', '$city','$pin','$mobile','$payment_type','$total_price', '$payment_status', '$order_status' ,'$add_on')";
                    $exSql = $conn->query($sql) or die("error in sql");
                        if($exSql == 'true'){?>

            <script> 
             alert("data successfully submitred");
            window.location.href  = 'checkout.inc.php';
           
            </script>
                        <?php } 

                }else{
                    echo "data not empty";
                }       
            }
        
?>