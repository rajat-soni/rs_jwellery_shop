<?php 

    include '../layoutHeader.php';
    include '../configDb/config.php';
    
    $sqlQry = "select * from `category_tbl`";
    $runQry = $conn->query($sqlQry);
?>

<div class="container">
<table class="table table-hover table-bordered mt-4">
    <thead>
        <tr>
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
                    <tr>
                    <td><?php echo $sr; ?></td>
                    <td><?php echo $data['cate_name'];?></td>
                    <td><?php echo $data['status'];?></td>
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