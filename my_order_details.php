<?php include 'indexHeader.inc.php';
$order_id = $_GET['order_id'];

?>
<div class="ht__bradcaump__area" style="background-image:url('../admin/productModule/image/pro.jpg');background-size: 100% 100%; background-repeat: no-repeat; cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                    <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                 
                                 
                                 
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

<div class="wishlist-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                          
                                <div class="wishlist-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                               
                                               
                                                <th class="product-name"><span class="nobr">Product Name </span></th>
                                                <th class="product-price"><span class="nobr">Product image</span></th>
                                                <th class="product-stock-stauts"><span class="nobr">Product Qty</span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Proudct Price</span></th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                           
                                            $user_id = $_SESSION['USER_ID'];
                                            echo $sql = " SELECT distinct(`order_details_tbl`.`order_detail_id`),`order_details_tbl`.*,`product_tbl`.`product_name`,`product_tbl`.`file` from `order_details_tbl`,`product_tbl`,`order_tbl` 
                                            WHERE `order_details_tbl`.`order_id` =  '$order_id' 
                                            and `order_tbl`.`user_id` = '$user_id' 
                                            and `product_tbl`.`product_id` = `order_details_tbl`.`product_id` ";
                                             $sql = " SELECT distinct(`order_details_tbl`.`order_detail_id`),`order_details_tbl`.*,`product_tbl`.`product_name`,`product_tbl`.`file` from `order_details_tbl`,`product_tbl`,`order_tbl` 
                                            WHERE `order_details_tbl`.`order_id` =  '$order_id' 
                                            and `order_tbl`.`user_id` = '$user_id' 
                                            and `product_tbl`.`product_id` = `order_details_tbl`.`product_id` ";
                                            $total_price = 0;
                                            $row[] = array();
                                            $mysql = $conn->query($sql) or die("error in sql query");
                                            while($result = $mysql->fetch_assoc()){
                                                $row = $result;
                                                //prx($row);

                                                $price = $row['price'];
                                                $qty = $row['qty'];
                                                $total_price = $total_price+($row['qty']*$row['price']);
                                                ?>

                                            <tr>
                                                
                                                <td class="product-name"><a href="#"><?php echo $row['product_name'];?></a></td>
                                                <td><a href="#">
                                                <img src="../admin/productModule/image/<?php echo $row['file'];?>" alt="product images">
                                                </a></td>
                                                <td class="product-price"><span class="amount"></span><?php echo $row['qty'];?></td>
                                                <td class="product-stock-status"><span class="wishlist-in-stock"><?php echo $row['price'];?></span></td>
                                               
                                            </tr>
                                            <?php
                                            }?>
                                            <tr>
                                            <td class="product-stock-status"><span class="wishlist-in-stock">Total Price</span></td>
                                                 <td  colspan = "3"><?php echo $total_price;?></span></td>
                                                 
                                               
                                            </tr>
                                        </tbody>
                                     
                                    </table>
                                </div>  
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'indexFooter.inc.php';?>