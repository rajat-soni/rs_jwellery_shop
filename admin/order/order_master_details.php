<?Php include '../layoutModule/indexHeader.inc.php';
 include "../configDB/config.php";
 
?>


    <div class="container-fluid mt-3">
        <div class="wishlist-table table-responsive">
            <table class="table table-hover table-bordered bg- text-mute">
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
                        $order_id = $_GET['order_id'];
                            $row[] = array();
                            $total_price = 0;
                            $sql = " SELECT distinct(`order_details_tbl`.`order_detail_id`),`order_details_tbl`.*,`product_tbl`.`product_name`,`product_tbl`.`file`,    `order_tbl`.`address`,`order_tbl`.`state`,`order_tbl`.`city`,`order_tbl`.`pin` from `order_details_tbl`,`product_tbl`,`order_tbl`
                             WHERE `order_details_tbl`.`order_id` =  '$order_id' and 
                             `order_details_tbl`.`product_id` = `product_tbl`.`product_id`";
                          
                            $mysql = $conn->query($sql) or die("error in sql query");
                            $result = $mysql->fetch_assoc();
                                    $row = $result;
                                    //prx($row);
                                    $price = $row['price'];
                                    $qty = $row['qty'];
                                    $total_price = $total_price+($row['qty']*$row['price']);
                        ?>
                        <tr>
                            <td class="product-name"><?php echo $row['product_name'];?></a></td>
                            <td><a href="#">
                            <img src="../productModule/image/<?php echo $row['file'];?>" alt="product images" height ="40px" width ="40px">
                            </a></td>
                            <td class="product-price"><span class="amount"></span><?php echo $row['qty'];?></td>
                            <td class="product-stock-status"><span class="wishlist-in-stock"><?php echo $row['price'];?></span></td>
                           
                        </tr>
                        <?php
                        ?>
                        <tr class = "bg-light">
                            <td class="product-stock-status" colspan = "3"><span class="wishlist-in-stock "style="float:right;">Total Price</span></td>
                                    <td  ><?php echo $total_price;?></span></td>
                        </tr>
                    </tbody>
                                     
            </table>
            <div id = "address_details"><strong> Adress :</strong>&nbsp; <?php echo $row['address']; 
             $row['city']; $row['pin'];?></div>
        </div>  
    </div>

<?php include '../layoutModule/indexFooter.inc.php';?>