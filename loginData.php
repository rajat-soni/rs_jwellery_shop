<?php 
	 require 'admin/configDb/config.php';
    
    print_r($_POST);
		if(isset($_POST['email'])){

			
			$email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['password']);
            
            
			if($name != '' && $email != ''){

			    $cate_sql = " SELECT * FROM `user_login_tbl` WHERE `email` = '$email' and `password` = '$password' ";
				$mysql = $conn->query($cate_sql) or die("Sql not executed");
                // echo $cate_sql;
				if($mysql){
                        
					echo 1;
					}else{
					echo  0;
				}
			}
		}