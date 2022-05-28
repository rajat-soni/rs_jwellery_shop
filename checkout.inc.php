<?php require 'indexHeader.inc.php';
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
            $pin = $_POST['pin'];
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
                $sql = " INSERT INTO `order_tbl`(`user_id`, `address`, `state`, `city`, `pin`, `mobile`, `payment_type`, `price`,`payment_status`,`order_status`, `add_on`) 
                VALUES ('$user_id','$adress','$state', '$city','$pin','$mobile','$payment_type','$total_price', '$payment_status', '$order_status' ,'$add_on')";
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
                        ?>
                            <script> 
                                alert("data successfully submitred");
                                window.location.href  = 'thankyou.inc.php';
                            </script>
                        <?php }  
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
                                                                <input type="number" name = "pin" placeholder="pin code address" required>
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