
  <?php
    session_start();
   
    $_SESSION['submission_success'] = true;

    $invalid=0;
    include '../connect.php';
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

   

    if(isset($_POST['submit'])){
    
    
     
        $c_id=$_POST['client_id'];
        $lawyer_id=$_POST['lawyer_id'];
        $app_date = $_POST['date'];
        $app_tim = $_POST['time'];
        $app_time = date('H:i:s', strtotime($app_tim));

    
        $service = $_POST['service'];
        
        $sql="SELECT * from client_t where c_id='$c_id'";
        $result=mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];

        $sql = "SELECT * from lawyer_t where id='$lawyer_id'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($res);
        $lawyer_email = $row['email'];
        
        if(mysqli_num_rows($res) >0){
            $sql = "INSERT INTO appointment (app_lyid,app_c_id,app_date,app_time)
                  VALUES ($lawyer_id,$c_id,'$app_date','$app_time')";
            $res = mysqli_query($con,$sql);
    
            
         }
     
    
        else{
            $invalid=1;
        }
        
        require '../src/Exception.php';
        require '../src/PHPMailer.php';
        require '../src/SMTP.php';
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'bangladeshlawconsultation@gmail.com';                     //SMTP username
            $mail->Password   = 'ohxlngkiyaqunqrk';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('bangladeshlawconsultation@gmail.com', 'BLCS');
            $mail->addAddress($lawyer_email, 'Joe User');     //Add a recipient
          

            // //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Requesting for the appointment';
            $mail->Body    = 'Our clients, '.$name.' wants to have your appointment on the time '.$app_date.' ' .$app_time.'.If you you accept request, confirm in your profile </b>';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }





   }
   header("Location:appointment.php");
    exit;
    

    
   
?>