<?php 

    include '../layoutModule/indexHeader.inc.php';
    include '../configDb/config.php';
    
    //include '../function.inc/function.inc.php';
    
    if(isset($_GET['type'])){  // active and deactive functionality //
        
        $type = $conn->real_escape_string($_GET['type']);
        if($type == 'status'){
            $operation = $_GET['operation'];
            $id = $_GET['cate_id'];
            if($operation == 'active'){
                $status = '1';
            }else{
                $status = '0';
            }     
            $Sql = "UPDATE `category_tbl` SET `status`= '$status' WHERE `cate_id` = ".$_GET['cate_id']." ";
            $exSql = $conn->query($Sql);    
        }

        if($type == 'delete'){
           
            $del_id = $conn->real_escape_string($_GET['cate_id']);
            $delSqlQry = " DELETE FROM `category_tbl` WHERE `cate_id` =  '$del_id' ";
            $exDelSql = $conn->query($delSqlQry);    
        }

        
      
      
     
    }else{ 
        echo "";
    }
    
    $sqlQry = "select * from `category_tbl`";
    $runQry = $conn->query($sqlQry);
?>

<div class="container">
<a href="addCate.inc.php" class="btn btn-info mt-4 mb-2" role="button">Add Category</a>
<table class="table table-hover table-bordered mt-4 btn-light shadow">
    <thead>
        <tr class="text-center btn-info">
        <th scope="col">Sr No</th>
        <th scope="col">cate_id</th>
        <th scope="col">Category Name</th>
        <th scope="col">Status</th>
        
        </tr>
    </thead>
    <tbody>
        
        <?php 
        $sr = 1;
        $data[] = array();
            

                while($row = $runQry->fetch_assoc()){
                    $data = $row;
                    ?>
                    <tr class="text-center bordered">
                    <td><?php echo $sr; ?></td>
                    <td><?php echo $data['cate_id'];?></td>
                    <td><?php echo $data['cate_name'];?></td>
                    <td>
                        <?php  if($data['status'] == 1){
                           echo"<a href='?type=status&operation=deactive&cate_id=".$data['cate_id']." ' class='btn btn-md bg-success text-light'>Active</a> ";

                        }else{
                            echo "<a href='?type=status&operation=active&cate_id=".$data['cate_id']."' class='btn btn-md bg-warning text-light'>Deactive</a>&nbsp;" ; //never leave the space between from href  to $data['cate_id'] and active id name same as database id  in anchor tag. //
                        }
                        echo "<a href='?type=delete&cate_id=".$data['cate_id']."' class='btn btn-md bg-danger text-light'>Delete</a> &nbsp;";
                        echo "<a href='editCate.inc.php?cate_id=".$data['cate_id']."' class='btn btn-md bg-primary text-light'>Edit</a>";
                        ?>
                    </td>
                    </tr>
                <?php 
                $sr ++;   
                }
            // }else{
            //     $msg = "data not get";
            // }
        ?>
       
        
      
        
    </tbody>
</table>
        </div>

<?php
include '../layoutModule/indexFooter.inc.php';

?>