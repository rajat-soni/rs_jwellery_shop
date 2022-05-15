<?php require 'indexHeader.inc.php'; error_reporting(0);?>

            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">name of products</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach($_SESSION['cart'] as $key=>$value){
                                            $getcarte =  getProductDetails($conn,$key);
                                            $name = $getcarte['0']['product_name'];
                                            $image = $getcarte['0']['file'];
                                            $price = $getcarte['0']['product_price'];
                                            $selling = $getcarte['0']['selling_price'];
                                            $qty = $value['qty'];
                                           
                                            ?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src= "admin/productModule/image/<?php echo $image;?>" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#"><?php echo $name;?></a>
                                                <ul  class="pro__prize">
                                                    <li class="old__prize">&#8377;&nbsp;<?php echo $price;?></li>
                                                    <li></li>
                                                </ul>
                                            </td>
                                            <td class="product-price"><span class="amount">&#8377;&nbsp;<?php echo $selling;?></span></td>
                                            <td class="product-quantity"><input type="number" value="<?php echo $qty;?>" id ="<?php echo $key;?>qty" />
                                            <br/><a href = "javascript: void(0)" onclick = "add_to_cart('<?php echo $key;?>','update')" >update</a></td>
                                            <td class="product-subtotal">&#8377;&nbsp;<?php echo $selling*$qty;?></td>
                                            
                                            <td class="product-remove"><a href="javascript: void(0)" onclick = "add_to_cart('<?php echo $key;?>','remove')"><i class="icon-trash icons"></i></a></td>
                                        </tr>
                                        <?php }?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="index.inc.php">Continue Shopping</a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            
                                            <a href="checkout.inc.php">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>

<?php require 'indexFooter.inc.php'; ?>

