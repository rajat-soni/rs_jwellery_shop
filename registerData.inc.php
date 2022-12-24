<?php 
	require 'admin/configDb/config.php';
    
		if(isset($_POST['email'])){

			$name = $conn->real_escape_string($_POST['name']);
			$email = $conn->real_escape_string($_POST['email']);
            $mobile = $conn->real_escape_string($_POST['mobile']);
            $password= $conn->real_escape_string($_POST['password']);
			$sql = " SELECT * FROM `user_registration_tbl` WHERE `email` = '$email' ";
			$result = $conn->query($sql)or die("error in sql");
			$check_user = $result->num_rows;
				if($check_user > 0 ) {
				 echo 'email exist';
				}else{

					$cate_sql = " INSERT INTO `user_registration_tbl`(`name`, `email`, `mobile`, `password`) VALUES ('$name', '$email', '$mobile', '$password')";
					$mysql = $conn->query($cate_sql) or die("Sql not executed");
					echo "inserted";
				}
		}
	?>		
		