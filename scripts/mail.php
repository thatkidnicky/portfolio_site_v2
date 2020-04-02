<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function contactMail($name, $email, $subject, $msg){
    

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPSecure='ssl';
    $mail->Port = 465;
    $mail->SMTPAuth=true;

    $mail->Username=''; // gmail (same gmail)
    $mail->Password=''; // gmail password

    $mail->addAddress($email);
    $mail->setFrom(''); //gmail (same gmail)
    

    $mail->isHTML(true);
    $mail->Subject="$subject - Message From Portfolio Site"; 
    $mail->Body="
    Sent by $name .<br>
    $subject <br><br>
    $msg <br>
    <br><br><br>";

    if(!$mail->send()){
        $message = $mail->ErrorInfo;
    }else{
        $message = 'Thank you for the message!';
        header('Location: submit.php');
    }
}