<?php require 'indexHeader.inc.php';
//print_r($_GET);
$cate_id = $_GET['cate_id'];

if(isset($_GET['sort'])){
    $sort = $conn->real_escape_string($_GET['sort']);


    if($sort == 'high_price'){
     $sort = "order by `product_price` desc";
    }

    if($sort == 'low_price'){
        $sort = "order by `product__price` asc";
    }
    if($sort == 'new'){
        $sort = "order by `product_id` desc";
    }
    if($sort == 'old'){
        $sort = "order by `product_id` asc";
    }

}


if($cate_id > 0){
$getProduct = getProductCate($conn,$cate_id,3,"");
}else{ ?>
   <script> 
        window.location.href = 'index.inc.php';
   </script> 
   <?php
}

// ?>

<div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">   
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/categoryLogo.jpg" alt="product images">
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
        <div class="ht__bradcaump__area" style="background-image: url('images/categoryLogo.jpg');background-size: 100% 100%; background-repeat: no-repeat; cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.inc.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right">Products</i></span>
                                  
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Grid -->
        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
              
                    <div class="col-lg-12 col-lg-push- col-md-12 col-md-push- col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                            <div class="htc__grid__top">
                                <div class="htc__select__option">
                                    <select class="ht__select" onchange = "sort_product('<?Php echo $cate_id;?>')" id ="sort_product">
                                    <option value = "">Default softing</option>
                                        <option value = "high_price">Sort by low price</option>
                                        <option value = "low_price">Sort by high price</option>
                                        <option value = "new">Sort by new</option>
                                        <option value = "old">Sort by old</option>
                                    </select>
                                </div>
                                
                                <!-- Start List And Grid View -->
                                <ul class="view__mode" role="tablist">
                                    <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                    <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                </ul>
                                <!-- End List And Grid View -->
                            </div>
                            <!-- Start Product View -->
                            <?php if(count($getProduct)>0){?>
                            <div class="row">
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                        <!-- Start Single Product -->
                                       <?php
                                       
                                        foreach($getProduct as $list){?>
                                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product.php?procduct_id=<?php echo $list['product_id'];?>">
                                                        <img src="admin/productModule/image/<?php echo $list['file'];?>" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">Largest Water Pot</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <label>price</label>
                                                        <li class="old__prize">&#8377;&nbsp;<?php echo $list['product_price'];?></li>
                                                        <label>Selling Price</label>
                                                        <li>&#8377;&nbsp;<?php echo $list['selling_price'];?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <?php }else{
                                        echo "Data not fount";
                                    }   ?> 
                                        <!-- End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">Chair collection</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                         End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/3.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">dummy Product name</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div> 
                                         </div> --> 
                                        <!-- End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/4.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">Largest Water Pot</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/5.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">Largest Water Pot</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                         End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/6.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">Special Wood Basket</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>  -->
                                        <!-- End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/7.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">Largest Water Pot</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/8.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">donec ac tempus nrb</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/9.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">nemo enim ipsam</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/10.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">dummy Product name</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/11.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">Chair collection</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --> 
                                        <!-- End Single Product -->
                                        <!-- Start Single Product -->
                                        <!-- <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details.html">
                                                        <img src="images/product/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html">Largest Water Pot</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">$30.3</li>
                                                        <li>$25.9</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- End Single Product -->
                                    <!-- </div>
                                    <div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
                                        <div class="col-xs-12">
                                            <div class="ht__list__wrap">
                                                <!-- Start List Product -->
                                                <!-- <div class="ht__list__product">
                                                    <div class="ht__list__thumb">
                                                        <a href="product-details.html"><img src="images/product-2/pro-1/1.jpg" alt="product images"></a>
                                                    </div>
                                                    <div class="htc__list__details">
                                                        <h2><a href="product-details.html">Product Title Here </a></h2>
                                                        <ul  class="pro__prize">
                                                            <li class="old__prize">$82.5</li>
                                                            <li>$75.2</li>
                                                        </ul>
                                                        <ul class="rating">
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqul Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div class="fr__list__btn">
                                                            <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div> --> 
                                                <!-- End List Product -->
                                                <!-- Start List Product -->
                                                <!-- <div class="ht__list__product">
                                                    <div class="ht__list__thumb">
                                                        <a href="product-details.html"><img src="images/product-2/pro-1/2.jpg" alt="product images"></a>
                                                    </div>
                                                    <div class="htc__list__details">
                                                        <h2><a href="product-details.html">Product Title Here </a></h2>
                                                        <ul  class="pro__prize">
                                                            <li class="old__prize">$82.5</li>
                                                            <li>$75.2</li>
                                                        </ul>
                                                        <ul class="rating">
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqul Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div class="fr__list__btn">
                                                            <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- End List Product -->
                                                <!-- Start List Product -->
                                                <!-- <div class="ht__list__product">
                                                    <div class="ht__list__thumb">
                                                        <a href="product-details.html"><img src="images/product-2/pro-1/3.jpg" alt="product images"></a>
                                                    </div>
                                                    <div class="htc__list__details">
                                                        <h2><a href="product-details.html">Product Title Here </a></h2>
                                                        <ul  class="pro__prize">
                                                            <li class="old__prize">$82.5</li>
                                                            <li>$75.2</li>
                                                        </ul>
                                                        <ul class="rating">
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqul Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div class="fr__list__btn">
                                                            <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- End List Product -->
                                                <!-- Start List Product -->
                                                <!-- <div class="ht__list__product">
                                                    
                                                    <div class="htc__list__details">
                                                        <h2><a href="product-details.html">Product Title Here </a></h2>
                                                        <ul  class="pro__prize">
                                                            <li class="old__prize">$82.5</li>
                                                            <li>$75.2</li>
                                                        </ul>
                                                        <ul class="rating">
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                        </ul> -->
                                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqul Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div class="fr__list__btn">
                                                            <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- End List Product -->
                                            <!-- </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Product View -->
                        <!-- </div>
                        
                    </div>
                    <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="htc__product__leftsidebar">
                            <!-- Start Best Sell Area -->
                            <!-- <div class="htc__recent__product">
                                <h2 class="title__line--4">best seller</h2>
                                <div class="htc__recent__product__inner">
                                    <!-- Start Single Product -->
                                    <!-- <div class="htc__best__product">
                                        <div class="htc__best__pro__thumb">
                                            <a href="product-details.html">
                                                <img src="images/product-2/sm-smg/1.jpg" alt="small product">
                                            </a>
                                        </div>
                                        <div class="htc__best__product__details">
                                            <h2><a href="product-details.html">Product Title Here</a></h2>
                                            <ul class="rating">
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                            </ul>
                                            <ul  class="pro__prize">
                                                <li class="old__prize">$82.5</li>
                                                <li>$75.2</li>
                                            </ul>
                                        </div> 
                                    </div> -->
                                    <!-- End Single Product -->
                                    <!-- Start Single Product -->
                                    <!-- <div class="htc__best__product">
                                        <div class="htc__best__pro__thumb">
                                            <a href="product-details.html">
                                                <img src="images/product-2/sm-smg/2.jpg" alt="small product">
                                            </a>
                                        </div>
                                        <div class="htc__best__product__details">
                                            <h2><a href="product-details.html">Product Title Here</a></h2>
                                            <ul class="rating">
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                            </ul>
                                            <ul  class="pro__prize">
                                                <li class="old__prize">$82.5</li>
                                                <li>$75.2</li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <!-- End Single Product -->
                                    <!-- Start Single Product -->
                                    <!-- <div class="htc__best__product">
                                        <div class="htc__best__pro__thumb">
                                            <a href="product-details.html">
                                                <img src="images/product-2/sm-smg/1.jpg" alt="small product">
                                            </a>
                                        </div>
                                        <div class="htc__best__product__details">
                                            <h2><a href="product-details.html">Product Title Here</a></h2>
                                            <ul class="rating">
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                            </ul>
                                            <ul  class="pro__prize">
                                                <li class="old__prize">$82.5</li>
                                                <li>$75.2</li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <!-- End Single Product -->
                                </div>
                            </div>
                            <!-- End Best Sell Area -->
                        </div>
                 
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Grid -->
        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require 'indexFooter.inc.php';?>