<?php  include "../layoutModule/indexHeader.inc.php";?>
<?php  include "../configDB/config.php";


?>
<div class="container mt-3">
    <table class="table table-hover table-bordered bg-light text-mute">
        <thead class="bg-light">
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
       
            $sql = "SELECT `order_tbl`.*,`order_status`.`name`  FROM `order_tbl`, `order_status` WHERE   `order_status`.`order_id` = `order_tbl`.`order_status`  ";
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
                <td class="product-add-to-cart"><a href="order_master_details.php?order_id=<?php echo $row['order_id'];?>"><?php echo $row['order_id'];?></a></td>
            </tr>
            <?php
            }?>
            
        </tbody>
        
    </table> 
        </div>           
    

<?php  include "../layoutModule/indexFooter.inc.php";?>