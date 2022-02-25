<?php
include '../layoutModule/indexHeader.inc.php';
include '../configDb/config.php';
    
    //include '../function.inc/function.inc.php';
    
    if(isset($_GET['type'])){
        $type = $_GET['type'];

        if($type == 'delete'){
            // confirm("Are you sure to delete the record");
            $del_id = $conn->real_escape_string($_GET['contact_id']);
            $delSqlQry = " DELETE FROM `contact_tbl` WHERE `contact_id` =  '$del_id' ";
            $exDelSql = $conn->query($delSqlQry);    
        }

    }    
    
    $sqlQry = "select * from `contact_tbl`";
    $runQry = $conn->query($sqlQry);
?>

<div class="container">
<a href="addCate.inc.php" class="btn btn-info mt-4 mb-2" role="button">Add Category</a>
<table class="table table-hover table-bordered mt-4 btn-light shadow">
    <thead>
        <tr class="text-center btn-info">
        <th scope="col">Sr No</th>
        <th scope="col">Visitor Name</th>
        <th scope="col">Visitor Email</th>
        <th scope="col">Visitor Mobile</th>
        <th scope="col">Visitor Query</th>
        <th scope="col">Action</th>
        
        </tr>
    </thead>
    <tbody>
        
        <?php 
        $sr = 1;
        $row[] = array();
            

                while($result = $runQry->fetch_assoc()){
                    $row= $result;
                    ?>
                    <tr class="text-center bordered">
                    <td><?php echo $sr; ?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo $row['query'];?></td>
                    <td>
                        <?php
                    echo "<a href='?type=delete&contact_id=".$row['contact_id']."' class='btn btn-md bg-danger text-light'>Delete</a> &nbsp;";
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
