<?php 
	include 'configDb/config.php'; // connection //
    include 'function.inc/function.inc.php'; // mailer file //
    

		if(isset($_POST['admin_email'])){

            $adminEmail = $_POST['admin_email'];
            
            $sql = "SELECT * FROM `admin_users_tbl` WHERE `user_email` = '$adminEmail' ";
            $runQry = $conn->query($sql) or die("query not executed");

            if($check = $runQry->num_rows > 0){
                 $data[] = array();
                $result = $runQry->fetch_assoc();
                $data= $result['password']; // get password //
                $mail = "Your Recovery Password is: <strong>$data</strong>";
                
                include 'PHPMailerAutoload.php';
                $mail = new PHPMailer; 
                // echo '<pre>';
                // $mail->SMTPDebug = 3;  
                                          
                $mail->isSMTP();                                    
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;                            
                $mail->Username = 'ra.rjt446soni@gmail.com'; 
                $mail->Password = 'peyrbbcwcppawtar';           
                $mail->SMTPSecure = 'tls';                        
                $mail->Port = 587;                         
                $mail->setFrom('ra.rjt446soni@gmail.com', 'Rajat');
                $mail->addAddress($_POST['admin_email']);   
                $mail->addReplyTo('ra.rjt446soni@gmail.com');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
                // $mail->addAttachment('/var/tmp/file.tar.gz');     
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg')
                $mail->isHTML(true);                                 
                $mail->Subject = 'Recovering The Password';
                $mail->Body    = ' <h3>Your Password is : <strog>'.$data.'</strong> </h3>';
                $mail->AltBody = 'Hello Rajat This Mail is for your recovering password';
                
                if(!$mail->send()) {
                    echo "email is not send";
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo "Your recovery password is send on your registered email";
                }
            }else{
                echo "email is not verfied";
            }

        }
?>         

