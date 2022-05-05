<?php  include "../layoutModule/indexHeader.inc.php";?>
<?php  include "../configDB/config.php";
if(isset ($_GET['type'])){
    $type = $_GET['type'];
    if($type == 'status'){
        $operation  = $_GET['operation']; 
        $user_id = $_GET['user_id'];
        if($operation == 'active'){

            $status = 1;
        }else{
            $status = 0;
        }
        $updateStatus = "UPDATE `user_tbl` SET `status` = '$status' WHERE `user_id` = ".$_GET['user_id']."";
        $exeUpdate = $conn->query($updateStatus)  or die("error in sql table");
    }

}
if(isset ($_GET['type'])){
    $type = $_GET['type'];
    if($type == 'delete'){
        echo "<script>alert('Are you sure to delete'')</script>";
    $user_id = $_GET['user_id'];
    $delSql = "DELETE  from `user_tbl` WHERE `user_id` =  '$user_id'";
    $exeDel = $conn->query($delSql)  or die("error in sql table");
    
    }else{

    }
}


 ?>


<table class="table table-hover table-bordered">
    <thead class="bg-light">
        <tr>
            <th scope="col">Sr No</th>
            <th scope="col">User Name</th>
            <th scope="col">Mobile no</th>
            <th scope="col">Email</th>
            <th scope="col">status</th>
            
          
            <th scope="col">add_on</th>
        </tr>
    </thead>
    <?php 
    $response[] = array();
$sr = 1;
$showSql = "SELECT * FROM `user_tbl`";
$exSql = $conn->query($showSql);
if($result = $exSql->num_rows > 0){
    while($row = $exSql->fetch_array()){
    $response = $row;
    echo '<pre>'; 
    // print_r($response);   
?>

  <tbody>
    <tr class="table-active">
    <td><?php echo $sr; ?></td>
      <td><?php echo $response['user_name']; ?></td>
      <td><?php echo $response['mobile']; ?></td>
      <td><?php echo $response['email']; ?></td>
      <td><?php  
      if($response['status'] == 1){
        echo "<a href='?type=status&operation=deactive&user_id=".$response['user_id']." ' class='btn btn-sm bg-success text-light'>Active</a> ";

        }else{
            echo "<a href='?type=status&operation=active&user_id=".$response['user_id']."' class='btn btn-sm bg-warning text-light'>Deactive</a>&nbsp;" ; //never leave the space between from href  to $data['cate_id'] and active id name same as database id  in anchor tag. //
        }
        echo "<a href='?type=delete&user_id=".$response['user_id']."' class='btn btn-sm bg-danger text-light'>Delete</a> &nbsp;";
        echo "<a href='editProduct.inc.php?user_id=".$response['user_id']."' class='btn btn-sm bg-primary text-light'>Edit</a>";
        ?></td>
     
    
    </td>

    <td><?php echo $response['add_on']; ?></td>
     
      
    </tr>
<?php $sr++; } 
?>

<?php }{}?>


<?php  include "../layoutModule/indexFooter.inc.php";?>