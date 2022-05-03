<?php  include "../layoutModule/indexHeader.inc.php";?>
<?php  include "../configDB/config.php";
 ?>


<table class="table table-hover table-bordered">
    <thead class="bg-light">
        <tr>
            <th scope="col">Sr No</th>
            <th scope="col">User Name</th>
            <th scope="col">Mobile no</th>
            <th scope="col">Email</th>
            <th scope="col">Add_on</th>
            
          
            <th scope="col">status</th>
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
      <td><?php echo $response['0']; ?></td>
      <td><?php echo $response['1']; ?></td>
      <td><?php echo $response['2']; ?></td>
      <td><?php echo $response['3']; ?></td>
     
      
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