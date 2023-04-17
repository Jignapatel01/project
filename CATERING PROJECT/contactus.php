<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    
    if(isset($_POST["addcontact"]))
    {
        require_once("PHPMailer\PHPMailer.php");
        require_once("PHPMailer\SMTP.php");
        require_once("PHPMailer\Exception.php");

        $nm=$_POST["name"];
        $email=$_POST["email"];
        $phn=$_POST["phone"];
        $msg=$_POST["message"];

    $mail = new PHPMailer(true);

    try {
   

        //Server settings
        $mail->SMTPDebug = false;                                     //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'jigna434@gmail.com';                     //SMTP username
        $mail->Password   = 'odvqpijyhvjgxlga';                               //SMTP password
        $mail->SMTPSecure = 'TLS';                                //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($_POST["email"], 'Mail sending');
        $mail->addAddress('jigna434@gmail.com', 'Contact us mail sending');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact with us email sending data';
        $mail->Body    = " <img src='https://i.pinimg.com/originals/af/10/b0/af10b0661568f8aa2f98a43f7298224e.gif' width='30%' height='150px'"."<br><br>".
                        "Customer name is :".$nm."<br>"."Email address is:".$email."<br>"."Phone no is :".$phn."<br>"."Message is :".$msg."<br>";

        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();

        echo "<script> 
               alert('Thank you for contact with us')  
               window.loaction='login.php';
        </script>";

        // echo "Thank you for contact with us";
        // header("refresh:2,login.php");
        
        
    } 
    catch (Exception $e) 
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

?>



<!-- contact us start here -->

<section id="contc" >
  <div class="container">
    <div class="row">
        <b align="center" style="color: brown; font-size: 30px; font-family:monospace; margin-top:5% ;"> Contact With Us </b><br>
    
  <div class="row">
    <div class="col-md-6 ">
        <form method="post">
            <h3 class="login-heading  ms-3 mt-5">Write Us</h3>
            <hr class="border border-1 border-dark w-50">
            <div class="form-group col-md-12 mt-3 p-1">
                <input type="text" name="name" placeholder="Name *" required class="form-control">
            </div>

            <div class="form-group col-md-12 mt-3 p-1">
                <input type="text" name="email" placeholder="Email *" required class="form-control">
            </div>
   
            <div class="form-group col-md-12 mt-3 p-1">
                <input type="number" name="phone" placeholder="Phone *" required class="form-control">
            </div>
    
    
            <div class="form-group col-md-12 mt-3 p-1">
                <textarea name="message" placeholder="Message *" rows="6" required class="form-control"></textarea>
            </div>
    
            <div class="form-group col-md-12 mt-3 p-1">
                <input type="submit" name="addcontact" class="btn btn-lg btn-outline-success text-dark border border-dark w-25 " value="Send" style="margin-left: 35%;">


            </div>
        </form>
        </div>
        <div class="col-md-5 ms-5 mt-5 ">
          <h3 class="login-heading  ms-3 ">Visit Us</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.0319060691886!2d72.51173361428313!3d23.059291820742708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9cab3aba1883%3A0x779827bd35ecc8b9!2sShree%20Maruti%20Nandan%20Kathiyawadi%20Restaurant!5e0!3m2!1sen!2sin!4v1676971574264!5m2!1sen!2sin" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
          <div class="row">
          <div class="col-md-4 mt-3 ms-5"> <b style="font-size: 18px;">Our Address</b>
          <p>Lorem ipsum dolor sitamet  consectetur </p>
          </div>
            <div class="col-md-4 mt-3 ms-5"> <b style="font-size: 18px;" align="center">Contact</b>
            <p> +91(9785451223)</p>
</div>
</div>  
        </div>
     </div>
  </div>
</section>
