<?php

include '../layoutHeader.php'; 
include '../configDb/config.php';

  if(isset($_GET['cate_id']) && $_GET['cate_id'] != ""){

    $cate_id = $conn->real_escape_string($_GET['cate_id']);
    $row[]= array();
     $sqlQry = "select * from `category_tbl` where `cate_id` = '$cate_id'";
    $runQry = $conn->query($sqlQry);
        while($result = $runQry->fetch_assoc()){
            $row = $result;
        ?>
<div class="container mt-4 " id="wraperDiv">
    <form action="editCateData.inc.php" method="POST"> 
        <div class="row mt-4">
            <div class="col-25 pl-4">
                <label for="fname">Category Name</label>
            </div>
            <div class="col-75">
            <input type="hidden" id="" name="cate_id" value="<?php echo $row['cate_id'];?>">
                <input type="text" id="cate_name" name="cate_name" value="<?php echo $row['cate_name'];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25 pl-4">
                <label for="country">Status</label>
            </div>
            <div class="col-75">
            <input type="text" id="status" name="status" value="<?php echo $row['status'];?>">
                    
                </select>
            </div>

            <p class="pl-4"><input type="submit" value= "submit" name="submit"></p>
        </div>
       
            <?php } }?>
       
    </form>
</div>
 <?php include '../layoutFooter.php';

?>