<?php 
include '../configDb/config.php';
include '../function.inc/function.inc.php';

//prx($_POST);

    if(isset($_POST['email'])){

        $name = $_POST['user_name'];
        print_r($name);
        $mobile = $_POST['mobile'];
        print_r($mobile);
        $email = $_POST['email'];
        print_r($email);
        $add_on = $_POST['add_on'];
        print_r($add_on);
        
        $msg = '';
        if($name != '' && $mobile != '' && $email != ''){

         echo $sql =  "INSERT INTO `user_tbl`(`user_name`, `mobile`, `email`,`add_on`) VALUES ('$name','$mobile','$email' , 'add_on')";
            $mysql = $conn->query($sql);
            // $count = $mysql->num_rows > 0;
            if($mysql){       
                header("location:showUser.inc.php");
            }else{
                echo  0;
            }
        }else{
            echo "data not get";
        }
        
    }



?>