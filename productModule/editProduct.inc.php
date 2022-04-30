<?Php include '../layoutModule/indexHeader.inc.php';?>
<?php include '../configDb/config.php'; 

if(isset($_GET['product_id']) && $_GET['product_id'] != ""){

$product_id = $conn->real_escape_string($_GET['product_id']);
// print_r($product_id);
$row[]= array();
 $sqlQry = "select * from `product_tbl` where `product_id` = '$product_id'";
$runQry = $conn->query($sqlQry);
    while($result = $runQry->fetch_assoc()){
        $row = $result;
        // print_r($row);
        //  $file=$row['file'];
        //  print_r($file);
    }
}
    ?>

<div class= "container-fluid">
    <div class="row">
            <div class="col-1"></div>
                <div class="col-10 ">
                    
                    <form method = "POST" action ="editProductData.inc.php" enctype ="multipart/form-data">
                        <div class ="card mt-5 alert alert-primary">
                           <div class="card-header"> <h3> Edit Product Form</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-25">
                                    <!-- <label>Product_id</label> -->
                                    </div>
                                    <div class="col-75 form-group ">
                                        
                                        <input type="hidden"  name="product_id" placeholder="Add your Product id here.." class="form-control" value = "<?php echo $row['product_id'];?>">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Category Id</label>
                                    </div>
                                    <div class="col-75 form-group">
                                    <select name = "cate_id" class="form-control atuo-complete">
                                        <option value = "<?php echo $row['cate_id']?>"><?php echo $row['cate_id']?></option>
                                    
                                    </select>
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Name</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="product_name" placeholder="Add your Product Name here.." class="form-control" value = "<?php echo $row['product_name'];?>">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Price</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="product_price" placeholder="Add your Product Price here.." class="form-control" value= "<?php echo $row['product_price'];?>">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Selling Price</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="selling_price" placeholder="Add your Product Selling here.." class="form-control" value= "<?php echo $row['selling_price'];?>">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label> Product Quantity</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="quantity" placeholder="Add your Product Quantity here.." class="form-control" value= "<?php echo $row['quantity'];?>">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Images</label>
                                    </div>
                                    <div class="col-75 form-group">
                                    
                                        <input type="file"  name="file" >
                                        <img src = "image/<?php echo  $row['file'];?>" style="width:50px; height:40px;">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Short discription</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="short_disc" placeholder="Add your Product Discription here.." class="form-control" value= "<?php echo $row['short_disc'];?>">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Discription</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="discrip" placeholder="Add your Product Discriptation here.." class="form-control" value= "<?php echo $row['discrip'];?>">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Meta Title</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="meta_title" placeholder="Add your Product Price here.." class="form-control" value= "<?php echo $row['meta_title'];?>">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Meta Discription</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="meta_discrip" placeholder="Add your Product meta discription here.." class="form-control" value= "<?php echo $row['meta_discrip'];?>">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Meta Keyword</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="meta_key" placeholder="Add your meta keyword here.." class="form-control" value= "<?php echo $row['meta_key'];?>">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Status</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="number"  name="status" placeholder="Add your Product Price here.." class="form-control" value= "<?php echo $row['status'];?>">
                                    </div>
                                </div>
                                <input type= "submit" name="update" value = "update" class ="btn btn-lg mb-4">
                                
                            </div>
                            <div class="card-footer"></div>
                        </div>
                </form>
            </div>
        <div class="col-4"></div>
    </div>
</div>


        

        