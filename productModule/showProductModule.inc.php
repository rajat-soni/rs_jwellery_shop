<?php  include "../layoutModule/indexHeader.inc.php";?>
<?php  include "../configDB/config.php";
// Print_r($_GET);
// Print_r($_POST);

if(isset($_GET['type'])){  // active and deactive functionality //
        
    $type = $conn->real_escape_string($_GET['type']);
    if($type == 'status'){
        $operation = $_GET['operation'];
        $id = $_GET['product_id'];
        if($operation == 'active'){
            $status = '1';
        }else{
            $status = '0';
        }     
        $Sql = "UPDATE `product_tbl` SET `status`= '$status' WHERE `product_id` = ".$_GET['product_id']." ";
        $exSql = $conn->query($Sql);    
    }

    if($type == 'delete'){
       
        $del_id = $conn->real_escape_string($_GET['product_id']);
        $delSqlQry = " DELETE FROM `product_tbl` WHERE `product_id` =  '$del_id' ";
        $exDelSql = $conn->query($delSqlQry);    
    }
  }else{ 
    echo "";
}
?>


<table class="table table-hover table-bordered">
    <thead class="bg-light">
        <tr>
            <th scope="col">Sr No</th>
            <th scope="col">Pro_id</th>
            <th scope="col">Cate_id</th>
            <th scope="col">Name</th>
            <th scope="col">Mrp</th>
            <th scope="col">Price</th>
            <th scope="col">qty</th>
            <th scope="col">img</th>
            <th scope="col">disp</th>
            <th scope="col">Bdisp</th>
            <th scope="col">Title</th>
            <th scope="col">m_Dis</th>
            <th scope="col">m_key</th>
            <th scope="col">status</th>
        </tr>
    </thead>
    <?php 
        $response[] = array();
        $sr = 1;
        $showSql = "SELECT `product_tbl`.*,`category_tbl`.`cate_name`  FROM `product_tbl`,category_tbl where `product_tbl`.`cate_id` = `category_tbl`.`cate_id` order by `product_tbl`.`product_id`";
        $exSql = $conn->query($showSql) or die("error in sql table");

        if($result = $exSql->num_rows > 0){
            while($row = $exSql->fetch_array()){
            $response = $row;
            echo '<pre>'; 
            // print_r($response);   
    ?>

  <tbody>
    <tr class="table-active">
    <td><?php echo $sr; ?></td>
      <td><?php echo $response['0']; ?></td>
      <td><?php echo $response['1']; ?></td>
      <td><?php echo $response['2']; ?></td>
      <td><?php echo $response['3']; ?></td>
      <td><?php echo $response['4']; ?></td>
      <td><?php echo $response['5']; ?></td>
      <td><img src = " image/<?php echo $response['file'];?>" style ='height:50px; width:50px;'></td>
      <td><?php echo $response['7']; ?></td>
      <td><?php echo $response['8']; ?></td>
      <td><?php echo $response['9']; ?></td>
      <td><?php echo $response['10']; ?></td>
      <td><?php echo $response['11']; ?></td>
      <td><?php  
      if($response['status'] == 1){
        echo "<a href='?type=status&operation=deactive&product_id=".$response['product_id']." ' class='btn btn-sm bg-success text-light'>Active</a> ";

        }else{
            echo "<a href='?type=status&operation=active&product_id=".$response['product_id']."' class='btn btn-sm bg-warning text-light'>Deactive</a>&nbsp;" ; //never leave the space between from href  to $data['cate_id'] and active id name same as database id  in anchor tag. //
        }
        echo "<a href='?type=delete&product_id=".$response['product_id']."' class='btn btn-sm bg-danger text-light'>Delete</a> &nbsp;";
        echo "<a href='editProduct.inc.php?product_id=".$response['product_id']."' class='btn btn-sm bg-primary text-light'>Edit</a>";
        ?>
    
    </td>


     
      
    </tr>
<?php $sr++; } 
?>

<?php }{}?>


<?php  include "../layoutModule/indexFooter.inc.php";?>