

<?Php include '../layoutModule/indexHeader.inc.php';?>
<?php include '../configDb/config.php'; ?>

<div class= "container-fluid">
    <div class="row">
            <div class="col-1"></div>
                <div class="col-10 mb-4 ">
                    
                    <form method = "POST" action ="addProductFormData.inc.php" enctype ="multipart/form-data">
                        <div class ="card mt-5 shadow mb-4" id="isProductForm">
                           <div class="card-header"> <h3> Add Product Form</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-25">
                                    <!-- <label>Product_id</label> -->
                                    </div>
                                    <div class="col-75 form-group ">
                                        
                                        <input type="hidden"  name="product_id" placeholder="Add your Product id here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Category Id</label>
                                    </div>
                                    <div class="col-75 form-group">
                                    <select name = "cate_id" class="form-control atuo-complete" id ="isSelect">
                                        <option value = "" id="isOption">Select one</option>
                                    <?php
                                    
                                    $query = "select * from category_tbl";
                                    $exQury = $conn->query("select * from category_tbl") or die("qeury not vaild");
                                    if($result = $exQury->num_rows > 0){
                                        while($row = $exQury->fetch_array()){?>    
                                        <option value = "<?php echo $row ['cate_id'];?>">
                                        <?php echo $row['cate_name'];?> </option>
                                    <?php }  }?>
                                    </select>
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Name</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="product_name" placeholder="Add your Product Name here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Price</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="product_price" placeholder="Add your Product Price here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Selling Price</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="selling_price" placeholder="Add your Product Selling here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label> Product Quantity</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="quantity" placeholder="Add your Product Quantity here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Images</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="file"  name="file"  >
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Short discription</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="short_disc" placeholder="Add your Product Discription here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Discription</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="discrip" placeholder="Add your Product Discriptation here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Meta Title</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="meta_title" placeholder="Add your Product Price here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Meta Discription</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="meta_discrip" placeholder="Add your Product meta discription here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Meta Keyword</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name="meta_key" placeholder="Add your meta keyword here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Product Status</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="number"  name="status" placeholder="Add your Product Price here.." class="form-control">
                                    </div>
                                   
                                </div> <input type= "submit" name="submit" value = "submit" class ="btn btn-lg mb-4 text-dark mr-4">
                               
                                
                            </div>
                            <div class="card-footer mr-1 pt-4">&copy; AddProduct Details Reseved in Rj</div>
                        </div>
                </form>
            </div>
        <div class="col-4"></div>
    </div>
</div>


        

        
<?Php include '../layoutModule/indexFooter.inc.php';?>