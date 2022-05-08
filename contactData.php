<?php 
	 require 'admin/configDb/config.php';
    
    print_r($_POST);
		if(isset($_POST['email'])){

			$name = $conn->real_escape_string($_POST['name']);
			$email = $conn->real_escape_string($_POST['email']);
            $mobile = $conn->real_escape_string($_POST['mobile']);
            
            $msg = $conn->real_escape_string($_POST['query']);
            
			if($name != '' && $email != ''){

			    $cate_sql = " INSERT INTO `contact_tbl`(`name`, `email`, `mobile`, `query`)VALUES ('$name', '$email', '$mobile', '$msg') ";
				$mysql = $conn->query($cate_sql) or die("Sql not executed");
                // echo $cate_sql;
				if($mysql){
                        
					echo 1;
					}else{
					echo  0;
				}
			}
		}