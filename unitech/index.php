<?php
error_reporting(0); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $brand = $_POST['brand'];
        $business = $_POST['business'];
        $message = $_POST['message'];
        $file = $_FILES['file']['name'];
      
}
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// Load Composer's autoloader
//require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = "smtp.gmail.com";                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "oladayoahmod112@gmail.com";                     // SMTP username
    $mail->Password   = 'rojeqrlsgragxipe';                             // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email,'client');
    $mail->addAddress('oladayoahmod112@gmail.com', 'Unitech software development company');     // Add a recipient
               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');//

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'About my website';
    $mail->Body = "From ". $name . "Whose business name of the enterprise is" . $business . ", the phone number of the client is" . $number ."<br>". "The brand name of the client is" . $brand . "while the message goes thus <br>" . $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("location:index.html");
}
// if this doesnt work after connecting it to the internet , i am gonna check the credenecials firstly then i am gonna check the send function limiting it to just one to avoid a fatal error being thrown at me by php mailer #noted: scroll spy in jquery// SEO/DIGITAL MARKWTING CONTENT
if ($mail->send()) {
    $autorespond = new PHPMailer();
    $autorespond->isSMTP();
    $autorespond->CharSet = 'UTF-8';
    $autorespond->SMTPDebug = 0;
    $autorespond->SMTPSecure = 'ssl';
    $autorespond->Port = 465;
    $autorespond->SMTPAuth   = true;
    $autorespond->Username = 'oladayoahmod112@gmail.com';
    $autorespond->Password = 'rojeqrlsgragxipe';
    $autorespond->Host = 'smtp.gmail.com';
    $autorespond->setFrom('oladayoahmod112@gmail.com','Unitech software development company');
    $autorespond->addAddress($email);
    $autorespond->isHTML(true);
    $autorespond->Subject = 'Dear ' .$name.'! : Thanks for messaging us!';
    $autorespond->Body = 
    '<html>
<head>
</head>
<body>
    <div style="width: 94%;background-color: #f3f4f6;border-style:red; margin-left: 3%;margin-right: 3%; padding-top: 20px;padding-bottom: 20px; font-size: 14px;">
        <div style="background-color: white; border-radius: 10px;padding-left: 15px;padding-right: 15px;margin: 0 auto; width:90%;">
    <h2 style="text-align: center; padding-top:20px;"><span style="color: red;">Uni</span><span style="color: dodgerblue;">tech</span></h2>
    <h3 style="text-align: center;">We have recieved your message about your project, we shall get back to you sooner. Before then, you may give us direct call on <i>+2347085007467</i> or directly contact on Whatsapp via<a style="color: red;" href="https://api.whatsapp.com/send?phone=2347085007467"> this link.</a></h3><br>
    <h3>Below are your project details submitted to us :</h3>
    <p>Brand: Olami foods</p>
    <p>Number: 09036152448</p>
    <p>Bussiness type: Restaurant</p>
    <p>Project details: i want a website that looks like this site which will be very awesome than it. My regards Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
    <p>Thanks for contacting us.We are glad to work with you!</p><br>
</div><br>
    <footer style="margin: 0 3% 0 4%; width: 92%;height: 50px;border-radius:15px;box-shadow: -20px -20px 20px rgba(255,255,255,0.5),
                20px 20px 20px rgba(0,0,0,0.05);background-color:white;padding: 10px;">
                <p style="text-align: center;font-size: 14px;">Copyright &copy; 2020 <span><a style="text-decoration-color:salmon;color: red;" href="www.unitech.com">Unitech </a></span>All rights reserved</p>
    </footer>
</div>
</body>
</html>';
    $autorespond->send();
    header("location:index.html");
}
