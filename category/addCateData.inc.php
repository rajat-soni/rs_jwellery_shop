<?php 
	include '../configDb/config.php';
    include '../function.inc/function.inc.php';
	
    //    print_r($_POST);
    //    die;
		if(isset($_POST['cate_name'])){

			$catename = $conn->real_escape_string($_POST['cate_name']);
			$status = $conn->real_escape_string($_POST['status']);
            $msg = '';
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



?>