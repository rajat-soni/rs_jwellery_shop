<?php require 'indexHeader.inc.php';
// require 'admin/configDb/config.php';

         if(!isset($_SESSION['cart']['0']) && count($_SESSION['cart'] ) == 0){?>
            <script> 
            window.location.href  = 'index.inc.php';
            alert("Please Add Product First");
            </script>
            <?php } 
            $total_amount = 0;
        if(isset($_POST['save'])){
            
            $user_id = $_SESSION['USER_ID'];
            $adress = $_POST['address'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $pin = $_POST['pin_code'];
            $mobile = $_POST['mobile'];
            $payment_type = $_POST['payment_type'];
            
            foreach($_SESSION['cart'] as $key=>$value){
                $getcarte =  getProductDetails($conn,$key);   
                $selling = $getcarte['0']['selling_price'];
                $qty = $value['qty'];
                $total_amount = $total_amount+($selling*$qty);
            }
                $total_price = $total_amount;
                $payment_status = 'success';
                    if($payment_type == 'COD'){
                        $payment_status =  "success";
                    }
                $order_status = 1;
                $add_on = date('y-m-d h:i:s');  
                $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
                $sql = " INSERT INTO `order_tbl`(`user_id`, `address`, `state`, `city`, `pin_code`, `mobile`, `payment_type`, `price`,`payment_status`,`order_status`,`txnid`, `add_on`) 
                VALUES ('$user_id','$adress','$state', '$city','$pin','$mobile','$payment_type','$total_price', '$payment_status', '$order_status' , '$txnid','$add_on')";
                $exSql = $conn->query($sql) or die("error in sql");
        
                $order_id = $conn->insert_id; 

            
                foreach($_SESSION['cart'] as $key=>$value){
                    $getcarte =  getProductDetails($conn,$key);
                     
                    $selling = $getcarte['0']['selling_price'];
                    // $product_id = $key;
                    $qty = $value['qty'];
                
                    $sqlQury = " INSERT INTO `order_details_tbl`(`order_id`, `product_id`, `qty`, `price`) VALUES ('$order_id','$key','$qty','$selling') ";
                    $runQury = $conn->query($sqlQury) or die("Error in get order detail table data");
                    // print_r($sqlQury);
                    
                }
                
                         unset($_SESSION['cart']);

                        if($payment_type == 'payU'){

                            $MERCHANT_KEY = 'DHuM1K'; 
                            $SALT = 'tLIa4u1pdBwleEUqK5CKxGwsPVCswdCv';
                            $hash_string = '';
                            //$PAYU_BASE_URL = "https://test.payu.in/_payment";
                            $PAYU_BASE_URL = "https://secure.payu.in";
                            
                            $action = '';
                            $posted = array();
                            if(!empty($_POST)) {
                            foreach($_POST as $key => $value) {    
                                $posted[$key] = $value; 
                            }
                            }
                            $qry  = "SELECT * FROM `user_registration_tbl` WHERE `user_id` = '$user_id'";
                            $mysql = $conn->query($qry);
                            $userArr = $mysql->fetch_assoc(); 

                            $formError = 0;
                            $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
                            $posted['txnid']=$txnid;
                            $posted['amount']=$total_amount;
                            $posted['firstname'] = $userArr['name'];
                            $posted['email']= $userArr['email'];
                            $posted['phone']= $userArr['mobile'];
                            $posted['productinfo']="productinfo";
                            $posted['key']=$MERCHANT_KEY ;
                            $hash = '';
                            $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
                            if(empty($posted['hash']) && sizeof($posted) > 0) {
                            if(
                                    empty($posted['key'])
                                    || empty($posted['txnid'])
                                    || empty($posted['amount'])
                                    || empty($posted['firstname'])
                                    || empty($posted['email'])
                                    || empty($posted['phone'])
                                    || empty($posted['productinfo'])
                                    
                            ) {
                                $formError = 1;
                            } else {    
                                $hashVarsSeq = explode('|', $hashSequence);
                                foreach($hashVarsSeq as $hash_var) {
                                $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
                                $hash_string .= '|';
                                }
                                $hash_string .= $SALT;
                                $hash = strtolower(hash('sha512', $hash_string));
                                $action = $PAYU_BASE_URL . '/_payment';
                            }
                            } elseif(!empty($posted['hash'])) {
                            $hash = $posted['hash'];
                            $action = $PAYU_BASE_URL . '/_payment';
                            }


                            $formHtml ='<form method="post" name="payuForm" id="payuForm" action="'.$action.'"><input type="hidden" name="key" value="'.$MERCHANT_KEY.'" /><input type="hidden" name="hash" value="'.$hash.'"/><input type="hidden" name="txnid" value="'.$posted['txnid'].'" /><input name="amount" type="hidden" value="'.$posted['amount'].'" /><input type="hidden" name="firstname" id="firstname" value="'.$posted['firstname'].'" /><input type="hidden" name="email" id="email" value="'.$posted['email'].'" /><input type="hidden" name="phone" value="'.$posted['phone'].'" /><textarea name="productinfo" style="display:none;">'.$posted['productinfo'].'</textarea><input type="hidden" name="surl" value="http://localhost:3000/payment_complete.php" /><input type="hidden" name="furl" value="payment_fail.php"/><input type="submit" style="display:none;"/></form>';
                            echo $formHtml;
                            echo '<script>document.getElementById("payuForm").submit();</script>';
                        }else{
                        ?>

                        
                            <script> 
                                alert("data successfully submitred");
                                window.location.href  = 'thankyou.inc.php';
                            </script>
                        <?php }  }
                        ?>    



<div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product-2/sm-smg/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product-2/sm-smg/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.inc.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                    <?php 
                                    $accodoin_class = 'accordion__title';
                                    if(!isset($_SESSION['USER_LOGIN'])){
                                        $accodoin_class = 'accordion__hide';
                                        
                                        ?>
                                    <div class="accordion__hide">
                                        Checkout Method
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__body__form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkout-method__login">
                                                        
                                                            <h5 class="checkout-method__title">Login</h5>
                                                            <div class="single-input">
                                                                <label for="user-email">Email Address</label>
                                                                <input type="email" id = "email" placeholder="Your Email*" style="width:100%">
                                                                <span id ="email_error" class="field_eror " ></span>
                                                                
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="text" id ="password" placeholder="Your Password*" style="width:100%"><span id ="password_error" class="field_eror " ></span>
                                                               
                                                            </div>
                                                           
                                                            <div class="dark-btn" onclick = "checkInLogin()">
                                                                <a href="#">LogIn</a>
                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="checkout-method__login">
                                                        
                                                            <h5 class="checkout-method__title">Register</h5>
                                                            <div class="single-input">
                                                                <label for="user-email">Name</label>
                                                                <input type="email" id="user-email">
                                                            </div>
															<div class="single-input">
                                                                <label for="user-email">Email Address</label>
                                                                <input type="email" id="user-email">
                                                            </div>
															
                                                            <div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="password" id="user-pass">
                                                            </div>
                                                            <div class="dark-btn">
                                                                <a href="#">Register</a>
                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    
                                    <div class="<?php echo $accodoin_class;?>">
                                        Address Information
                                    </div>


                                    
                                        <div class="accordion__body">
                                            <div class="bilinfo">
                                            <form method ="POST" >
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" name = "address" placeholder="Street Address" required>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="State address" name = "state" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" name ="city" placeholder="city address" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="number" name = "pin_code" placeholder="pin code address" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" name = "mobile" placeholder="Phone number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="<?php echo $accodoin_class;?>">
                                            payment information
                                            </div>
                                            <div class="accordion__body">
                                                <div class="paymentinfo">
                                                    <div class="single-method">
                                                        &nbsp;COD&nbsp;<input type = "radio" name ="payment_type" value = "COD" required>
                                                    
                                                        &nbsp;payU &nbsp;<input type = "radio" name ="payment_type" value = "payU" required>
                                                    </div>
                                                  
                                                        <input type = "submit" name ="save">
                                                        
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                              
                            </div>
                        </div>
                        <!-- </form> -->
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <div class="order-details__item">

                            <?php  
                                $total_amount = 0;
                                foreach($_SESSION['cart'] as $key=>$value){
                                    $getcarte =  getProductDetails($conn,$key);
                                    $name = $getcarte['0']['product_name'];
                                    $image = $getcarte['0']['file'];
                                    $price = $getcarte['0']['product_price'];
                                    $selling = $getcarte['0']['selling_price'];
                                    $qty = $value['qty']; 
                                    $total_amount =  $total_amount+($selling*$qty);
                                            
                                            
                                ?>
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="../admin/productModule/image/<?php echo $image;?>" alt="ordered item">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="#"><?php echo $name;?></a>
                                        <span class="price"><?php echo $selling*$qty;?></span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="javascript: void(0)"onclick = "check_out('<?php echo $key;?>','remove')"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                    
                                </div>
                                <?php }?>
                                <div class="order-details__count">
                            
                               
                            </div>
                            <div class="ordre-details__total">
                                <h5>Order total</h5>
                                <span class="price"><?php echo  $total_amount;?></span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require 'indexFooter.inc.php';?>