<?php 
	include 'configDb/config.php';
      session_start();
		if(isset($_POST['user_email'])){

			$user_email = $conn->real_escape_string($_POST['user_email']);
			$password = $conn->real_escape_string($_POST['password']);
            $msg = '';
			if($user_email != '' && $password != ''){

			     $sql = " SELECT * FROM `admin_users_tbl` WHERE `user_email` = '$user_email' and `password` = '$password' ";
				$mysql = $conn->query($sql);
				$count = $mysql->num_rows > 0;
				if($count == 1){
				    	
					    $row[] = array();
						$result = $mysql->fetch_assoc();
						$row = $result;
						
                        $session_id = session_id();
                        $_SESSION['auth_id'] = $session_id;
                        $_SESSION['ADMIN_ID'] = $row['admin_id'];
                        $_SESSION['ADMIN_EMAIL'] = $row['user_email'];
						$_SESSION['ADMIN_LOGIN'] = 'yes';
                        
						echo 1;
					}else{
					echo  0;
				}
			}
		}



?>