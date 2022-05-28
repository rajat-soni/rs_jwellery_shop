

// require 'indexHeader.inc.php';
// error_reporting(E_ALL & ~E_NOTICE);
        
//         if(isset($_POST['save'])){
//             $user_id = $_SESSION['USER_ID'];
//             $adress = $_POST['address'];
//             $state = $_POST['state'];
//             $city = $_POST['city'];
//             $pin = $_POST['pin'];
//             $mobile = $_POST['mobile'];
//             $payment_type = $_POST['payment_type'];
//             $total_amount = 0; 
//             foreach($_SESSION['cart'] as $key=>$value){
//                 $getcarte =  getProductDetails($conn,$key);
                 
//                 $selling = $getcarte['0']['selling_price'];
//                 $qty = $value['qty'];
//                 $total_amount = $total_amount+($selling*$qty);
//             }
            //     $total_price = $total_amount;
            //     $payment_status = 'success';
            //         if($payment_type == 'COD'){
            //             echo "success";
            //         }
            //     $order_status = "pedding";
            //     $add_on = date('y-m-d h:i:s');
             
            //     $sql = " INSERT INTO `order_tbl`(`user_id`, `address`, `state`, `city`, `pin`, `mobile`, `payment_type`, `price`,`payment_status`,`order_status`, `add_on`) 
            //     VALUES ('$user_id','$adress','$state', '$city','$pin','$mobile','$payment_type','$total_price', '$payment_status', '$order_status' ,'$add_on')";
            //     $exSql = $conn->query($sql) or die("error in sql");
        
            // $order_id = $conn->insert_id; 
            // $total_amount = 0; 
            //     foreach($_SESSION['cart'] as $key=>$value){
            //         $getcarte =  getProductDetails($conn,$key);
                     
            //         $selling = $getcarte['0']['selling_price'];
            //         $product_id = $key;
            //         $qty = $value['qty'];
                
            //         $sqlQury = " INSERT INTO `order_details_tbl`(`order_id`, `poduct_id`, `qty`, `price`) VALUES ('$order_id','$product_id','$qty','$selling') ";
            //         $runQury = $conn->query($sqlQury) or die("Error in get order detail table data");
            //     }
            //             if($runQury = $conn->query($sqlQury) == TRUE){?>
                            <!-- <script> 
                                alert("data successfully submitred");
                                window.location.href  = 'thankyou.inc.php';
                            </script> -->
                    
        // }

// ?> /*
                        
                    
         -->