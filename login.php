<?php 
   
    use PHPMailer\PHPMailer\PHPMailer;    //provide links the the files.
    use PHPMailer\PHPMailer\Exception;   // both the links are important

   
    require 'vendor/autoload.php';  //this also important.
    
    require "db.php";   //provide your DataBase LINK here

           
    if(isset($_POST['submit']))
{
   
       
    $username=$_POST['username'];      //Fetch data from the form
    $email=$_POST['email'];
    $password=$_POST['pswd'];
    $cpassword=$_POST['cpswd'];

    if($password==$cpassword)            // checking passworrd and confirm password
    {
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  //checking email is valid or not.
            $msg= "Invalid email"; 
        }
        else{
            
            $ucode=md5(uniqid());  //generating unique id for the user.

            $query="insert into userdetails (username,email,password,ucode) values('$username','$email','$password','$ucode')";
            $dbquery=mysqli_query($conn,$query);    //inserting data into the database.
            
            if($dbquery=="true")
            {
                // MAIL SENDING
               
                $mail = new PHPMailer(true);                            
                    try {
                       
                                              
                        $mail->isSMTP();                                 
                        $mail->Host = 'smtp.gmail.com';  
                        $mail->SMTPAuth = true;                              
                        $mail->Username = 'roshie776@gmail.com';     //Host Email          
                        $mail->Password = 'Apsrkpuram2';             //Host Email Password         
                        $mail->SMTPSecure = 'tls';                         
                        $mail->Port = 587;                                  

                        
                        $mail->setFrom('roshie776@gmail.com', 'Roshan Saini'); //provide Host Email and Password.
                        $mail->addAddress($email,$username);                   //provide Guest Email and Username.
                  

                      //THIS IS YOUR EMAIL BODY 

                        $mail->isHTML(true);                                  
                        $mail->Subject = 'Welcome to LoginFrom';   //provide subject
                        $mail->Body    = "<br>Hello.$username.<br>
                                            <br>
                                            <p>We are very grateful to have you.</p>
                                            <p>Thank you for choosing us.</p>

                                            <P>Please click on the link to Activate your Loginfrom Account.</p><br>
                                            <br><a class='btn btn-primary' href='http://localhost/Login%20form%20with%20email%20confirmation/activate.php?code=$ucode'>Click Me</a><br>
                                            <br>With Regards<br>
                                            Roshan Saini<br>";  //mention Host name here.
                        
                        //NOW WE ARE SENDING THE MAIL.

                        $mail->send();
                        echo "<script>alert('Email has been sent')</script>";
                        echo "<script>location.href='index.php'</script>";
                    } catch (Exception $e) {
                        echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
                    }
            }
        }

    }else{
        echo"<script>window.alert('Password and confirm password must be same.')</script>";
        echo "<script>location.href='index.php'</script>";
    }
}
?>