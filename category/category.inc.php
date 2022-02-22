<?php 

    include '../layoutHeader.php';
    include '../configDb/config.php';
    
    //include '../function.inc/function.inc.php';
    
    if(isset($_GET['type'])){
        
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

        // if($type == 'edit'){
           
        //     $edit_id = $conn->real_escape_string($_GET['cate_id']);
        //     $editSqlQry = " UPDATE `category_tbl` SET `cate_name`= '$status' WHERE `cate_id` = ".$_GET['cate_id']." ";
        //     $exEditSql = $conn->query($Sql);     ;
              
        // }
      
      
     
    }else{ 
        echo "data not get";
    }
    
    $sqlQry = "select * from `category_tbl`";
    $runQry = $conn->query($sqlQry);
?>

<div class="container">
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
                           echo"<a href='?type=status&operation=deactive&cate_id=".$data['cate_id']."'>Active</a> ";

                        }else{
                            echo "<a href='?type=status&operation=active&cate_id=".$data['cate_id']."'>Deactive</a>&nbsp;" ; //never leave the space between from href  to $data['cate_id'] and active id name same as database id   
                        }
                        echo "<a href='?type=delete&cate_id=".$data['cate_id']."'>Delete</a> &nbsp;";
                        echo "<a href='?type=edit&cate_id=".$data['cate_id']."'>Edit</a>";
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
include '../layoutFooter.php';

?>