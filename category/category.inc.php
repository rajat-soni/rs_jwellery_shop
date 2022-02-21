<?php 

    include '../layoutHeader.php';
    include '../configDb/config.php';
    
    $sqlQry = "select * from `category_tbl`";
    $runQry = $conn->query($sqlQry);
?>

<div class="container">
<table class="table table-hover table-bordered mt-4 btn-info shadow">
    <thead>
        <tr class="text-center">
        <th scope="col">Sr No</th>
        <th scope="col">Category Name</th>
        <th scope="col">Status</th>
        
        </tr>
    </thead>
    <tbody>
        
        <?php 
        $sr = 0;
        $data = "";
            if($result = $runQry->num_rows > 0){

                while($result = $runQry->fetch_assoc()){
                    $data = $result;
                    ?>
                    <tr class="text-center">
                    <td><?php echo $sr; ?></td>
                    <td><?php echo $data['cate_name'];?></td>
                    <td>
                        <?php  if($data['status'] == 1){
                           echo "<a href = '?type = status&operation = deactive&id = ".$data['cate_id']."'>Active</a>";

                        }else{
                            echo "<a href = '?type = status&operation = active&id = ".$data['cate_id']."'>Deactive</a>";
                           
                        }?>
                </td>
                </tr>
                <?php 
                $sr ++;   
                }
            }else{
                $msg = "data not get";
            }
        ?>
       
        
      
        
    </tbody>
</table>
        </div>

<?php
include '../layoutFooter.php';

?>