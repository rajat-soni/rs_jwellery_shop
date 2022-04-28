<?php  print_r($_POST);
 include "../configDB/config.php";
if(isset($_POST['product_id'])){  // update record //
    $product_id = $conn->real_escape_string($_POST['product_id']); 
    $cate_id = $conn->real_escape_string($_POST['cate_id']);    
    $prouct_name = $conn->real_escape_string($_POST['product_name']);
    $product_price = $conn->real_escape_string($_POST['product_price']);
    $selling_price = $conn->real_escape_string($_POST['selling_price']);
    $quantity = $conn->real_escape_string($_POST['quantity']);
    $file = $conn->real_escape_string($_POST['file']);
    $short_disc = $conn->real_escape_string($_POST['short_disc']);
    $discrip = $conn->real_escape_string($_POST['discrip']);
    $meta_title = $conn->real_escape_string($_POST['meta_title']);
    $meta_discrip = $conn->real_escape_string($_POST['meta_discrip']);
    $meta_key = $conn->real_escape_string($_POST['meta_key']);
    $status = $conn->real_escape_string($_POST['status']);
   
    //print_r($status);
   
    echo $Sql = " UPDATE `product_tbl` SET cate_id`= '$cate_id',`product_name`= '$prouct_name',`product_price`= '$product_price',`selling_price`= '$selling_price',`quantity`= '$quantity',`file`= '$file',`short_disc`= '$short_disc',`discrip`= '$discrip',`meta_title`= '$meta_title',`meta_discrip`= '$meta_discrip',`meta_key`= '$meta_key',`status`= '$status' WHERE `product_id` = '$product_id'";
        $exSql = $conn->query($Sql);
        if($exSql){
           // echo "updated";
            header("location:indexCategory.inc.php");
            die;
        }else{
            echo "data not get";
        }   
    }else{
       echo "id not get"; 
    }

?>