<?php 
include '../configDb/config.php';
include '../function.inc/function.inc.php';



    if(isset($_POST['email'])){

        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $mobile = $conn->real_escape_string($_POST['mobile']);
        $query = $conn->real_escape_string($_POST['query']);
        $msg = '';
        if($name != '' && $email != '' && $mobile != '' && $query != ''){

             $sql = " INSERT INTO `contact_tbl`(`name`, `email`, `mobile`, `query`) VALUES ('$name','$email','$mobile','$query')" or die("error in sql");
            $mysql = $conn->query($sql);
            // $count = $mysql->num_rows > 0;
            if($mysql){       
               echo 1;
            }else{
                echo  0;
            }
        }else{
            echo "data not get";
        }
        
    }



?>