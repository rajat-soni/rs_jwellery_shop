<?php 
	include '../configDb/config.php';
    include '../function.inc/function.inc.php';
	
    //    print_r($_POST);
    //    die;
		if(isset($_POST['cate_name'])){
            $msg_erro = '';
			$catename = $conn->real_escape_string($_POST['cate_name']);
			$status = $conn->real_escape_string($_POST['status']);
            
			$sqlQry = "select * from `category_tbl` where `cate_name` = '$cate_name'";
    		$runQry = $conn->query($sqlQry);
     		$check = $runQry->num_rows > 0;
        	if($cehck){
            	$msg_erro =  "Category already exist";
        	}else{
				if($catename != '' && $status != ''){

			    $cate_sql = " INSERT INTO `category_tbl`(`cate_name`, `status`)VALUES('$catename','$status') ";
				$mysql = $conn->query($cate_sql) or die("Sql not executed");
				if($mysql){
                        
					echo 1;
					}else{
					echo  0;
				}
			}
		}
		}



?>