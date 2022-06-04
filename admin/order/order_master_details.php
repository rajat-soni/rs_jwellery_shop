<?Php include '../layoutModule/indexHeader.inc.php';
 include "../configDB/config.php";
 $order_id = $_GET['order_id'];

    if(isset($_POST['status_id'])){  // code for line no 71 t0 80 for update orderstatus //
        $update_id = $_POST['status_id'];
        
        $sql = " UPDATE `order_tbl` SET `order_status`= '$update_id' WHERE `order_id` = '$order_id'";
        $mysqli = $conn->query($sql);
       
        
    }                        
?>


    <div class="container-fluid mt-3">
        <div class="wishlist-table table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="bg-primary">
              
                    <tr>
                        <th class="product-name"><span class="nobr">Product Name </span></th>
                        <th class="product-price"><span class="nobr">Product image</span></th>
                        <th class="product-stock-stauts"><span class="nobr">Product Qty</span></th>
                        <th class="product-add-to-cart"><span class="nobr">Proudct Price</span></th>
                    </tr>
                </thead>
                    <tbody>
                        <?php 
                      
                      $total_price = 0;

                            $sqlQry = " SELECT distinct(`order_details_tbl`.`order_detail_id`),`order_details_tbl`.*,`product_tbl`.`product_name`,`product_tbl`.`file`,`order_tbl`.`address`,`order_tbl`.`city`, `order_tbl`.`pin_code`, `order_tbl`.`order_status` from `order_details_tbl`,`product_tbl`,`order_tbl` 
                                            WHERE `order_details_tbl`.`order_id` =  '$order_id' 
                                            and `product_tbl`.`product_id` = `order_details_tbl`.`product_id` ";
                          
                            $mysql = $conn->query($sqlQry) or die("error in sql query");
                            while($result = $mysql->fetch_assoc()){
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
                            }
                        ?>
                        <tr class = "bg-light">
                            <td class="product-stock-status" colspan = "3"><span class="wishlist-in-stock "style="float:right;">Total Price</span></td>
                                    <td  ><?php echo $total_price;?></span></td>
                        </tr>
                    </tbody>
                                     
            </table>
            <div id = "address_details"><strong> Adress :</strong>&nbsp; <?php echo $row['address']; 
             $row['city']; $row['pin_code'];?></div>
             <strong> Order Status :</strong>
             <?php 
             $run = $conn->query("SELECT `order_status`.`name` FROM `order_status`,`order_tbl` WHERE `order_tbl`.`order_id` = '$order_id' and `order_tbl`.`order_status` = `order_status`.`order_id` ");
              $reuslt = $run->fetch_assoc();
              echo $reuslt['name'];
             ?>
        </div> 
            <form method = "POST">              
                <select name = "status_id">
                    <?Php  $query = "SELECT * from `order_status` ";
                    $mysqli = $conn->query($query);
                    while( $reult = $mysqli->fetch_assoc()){?>
                    <option>Please Select Status</option>
                    
                        <option  value = "<?php echo $reult['order_id']; ?>"><?php echo $reult['name'];?></option>
                        
                    <?php }?>
                </select>
                <input type = "submit" name ="update" class="mt-3">
            </form>
                     
    </div>

<?php include '../layoutModule/indexFooter.inc.php';?>