<?php 
// print_r($_POST);
// die;
include '../configDb/config.php';
$msg_erro = "";
if(isset($_POST['cate_id'])){  // update record //
    $cate_name = $conn->real_escape_string($_POST['cate_name']);
    $cate_id = $conn->real_escape_string($_POST['cate_id']);
    $status = $conn->real_escape_string($_POST['status']);

    $sqlQry = "select * from `category_tbl` where `cate_name` = '$cate_name'";
    $runQry = $conn->query($sqlQry);
     $check = $runQry->num_rows > 0;
        if($cehck){
            $msg_erro =  "Category already exist";
        }else{
     
             $Sql = "UPDATE `category_tbl` SET `cate_name`= '$cate_name', `status`= '$status' WHERE `cate_id`= '$cate_id'";
            $exSql = $conn->query($Sql);
            if($exSql){
               // echo "updated";
                header("location:category.inc.php");
                die;
            }else{
                echo "data not get";
            }
        }   
    }else{
        echo "id not get"; 
    }
    