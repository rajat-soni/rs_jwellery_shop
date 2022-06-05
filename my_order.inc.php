<?php include 'indexHeader.inc.php';
if(!isset($_SESSION['USER_LOGIN'])){?>
    <script>
        window.location.href = 'login.inc.php';
    </script>
  <?php }
  ?>
?>
<div class="wishlist-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name"><span class="nobr">Order Date </span></th>
                                                <th class="product-price"><span class="nobr">Address</span></th>
                                                <th class="product-stock-stauts"><span class="nobr">Payment Type</span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Payment Status</span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Order Status</span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Order Id</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $row[] = array();
                                            $user_id = $_SESSION['USER_ID'];
                                            // $sql = "SELECT * From `order_tbl` where `user_id` = '$user_id' ";
                                            $sql = "SELECT `order_tbl`.*,`order_status`.`name`  FROM `order_tbl`, `order_status` WHERE  `order_tbl`.`user_id` = '$user_id' AND `order_status`.`order_id` = `order_tbl`.`order_status`  ";
                                            $mysql = $conn->query($sql) or die("error in sql query");
                                            while($result = $mysql->fetch_assoc()){
                                                $row = $result;
                                                ?>
                                                <tr>
                                                    <td class="product-name"><a href="#"><?php echo $row['add_on'];?></a></td>
                                                    <td class="product-price"><span class="amount"></span><?php echo $row['address'];?></td>
                                                    <td class="product-stock-status"><span class="wishlist-in-stock"><?php echo $row['payment_type'];?></span></td>
                                                    <td class="product-stock-status"><span class="wishlist-in-stock"><?php echo $row['payment_status'];?></span></td>
                                                    <td class="product-stock-status"><span class="wishlist-in-stock"><?php echo $row['name'];?></span></td>
                                                    <td class="product-add-to-cart"><a href="my_order_details.php?order_id=<?php echo $row['order_id'];?>"><?php echo $row['order_id'];?></a></td>
                                                </tr>
                                            <?php
                                            }?>
                                           
                                        </tbody>
                                     
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'indexFooter.inc.php';?>