<?php 
	include '../configDb/config.php';
    include '../function.inc/function.inc.php';
	

		if(isset($_POST['username'])){

			$username = $conn->real_escape_string($_POST['username']);
			$password = $conn->real_escape_string($_POST['password']);
            $msg = '';
			if($username != '' && $password != ''){

			     $sql = " SELECT * FROM `admin_users_tbl` WHERE `user_name` = '$username' and `password` = '$password' ";
				$mysql = $conn->query($sql);
				$count = $mysql->num_rows > 0;
				if($count == 1){
				    	
					    $row[] = array();
						$result = $mysql->fetch_assoc();
						$row = $result;
						
                        $session_id = session_id();
                        $_SESSION['auth_id'] = $session_id;
                        $_SESSION['user_id'] = $row['admin_id'];
                        $_SESSION['ADMIN_USER'] = $row['user_name'];
						$_SESSION['ADMIN_LOGIN'] = 'yes';
                        
						echo 1;
					}else{
					echo  0;
				}
			}
		}



?>