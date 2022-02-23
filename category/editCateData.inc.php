<?php 
// print_r($_POST);
// die;
include '../configDb/config.php';
if(isset($_POST['cate_id'])){  // update record //
        
        $cate_id = $conn->real_escape_string($_POST['cate_id']);
        //print_r($cate_id);
        $cate_name = $conn->real_escape_string($_POST['cate_name']);
       // print_r($cate_name);
        $status = $conn->real_escape_string($_POST['status']);
        //print_r($status);
             $Sql = "UPDATE `category_tbl` SET `cate_name`= '$cate_name', `status`= '$status' WHERE `cate_id`= '$cate_id'";
            $exSql = $conn->query($Sql);
            if($exSql){
               // echo "updated";
                header("location:category.inc.php");
                die;
            }else{
                echo "data not get";
            }   
        }else{
           echo "id not get"; 
        }