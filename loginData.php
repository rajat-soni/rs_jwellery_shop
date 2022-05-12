<?php 
	 require 'admin/configDb/config.php';
    
     	if(isset($_POST['email'])){
			$email = $conn->real_escape_string($_POST['email']);
			$password = $conn->real_escape_string($_POST['password']);
            $data = array();
			$cate_sql = " SELECT * FROM `user_registration_tbl` WHERE `email` = '$email' and `password` = '$password' ";
			$mysql = $conn->query($cate_sql) or die("Sql not executed");
			$result = $mysql->num_rows;
			$loop = $mysql->fetch_assoc();
			$row[] = $loop;
			print($row);
			echo "inserted";
		}else{
      echo "email not found";
}

			