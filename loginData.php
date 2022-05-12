<?php 
	 require 'admin/configDb/config.php';
	
     	if(isset($_POST['email'])){
			$email = $_POST['email'];
			$password = $_POST['password'];
            $data = array();
		 $cate_sql = " SELECT * FROM `user_registration_tbl` WHERE `email` = '$email' and `password` = '$password' ";
			$mysql = $conn->query($cate_sql) or die("Sql not executed");
			$check_user = $mysql->num_rows;
			if($check_user > 0){
			$loop = $mysql->fetch_assoc();
			$data[] = $loop;
			$_SESSION['USER_LOGIN'] = 'yes';
			$_SESSION['USER_ID'] = $data['reg_id'];
			$_SESSION['USER_NAME'] =  $data['name'];
			
			
			echo 'inserted';
			}else{
				echo 'not exist';


			}
		}else{
			 echo 'data not get';
		}


			