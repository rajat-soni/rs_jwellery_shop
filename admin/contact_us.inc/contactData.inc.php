<?php 
include '../configDb/config.php';
include '../function.inc/function.inc.php';
include '../PHPMailerAutoload.php'; 


    if(isset($_POST['submit'])){
        $mail = new PHPMailer;
        
        // echo '<pre>';
        // $mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'ra.rjt446soni@gmail.com';                 // SMTP username
        $mail->Password = 'peyrbbcwcppawtar';                           // SMTP password
        $mail->SMTPSecure = 'tls';                        // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                // TCP port to connect to

        $mail->setFrom('ra.rjt446soni@gmail.com', 'Rajat');
        $mail->addAddress($_POST['email']);      // Name is optional
        $mail->addReplyTo('ra.rjt446soni@gmail.com');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'For iforming new Project';
        $mail->Body    = ' <h3> Hey Rajat!</h3>';
        $mail->AltBody = 'Hello Rajat this mail for you to know all thing happen';
        
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }

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
                 header('loaction:indexContact.inc.php');
            }else{
                echo  0;
            }
        }else{
            echo "data not get";
        }
        
    



?>