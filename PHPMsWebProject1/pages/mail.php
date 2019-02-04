<?php
//$to = "janpil44@gmail.com";
//$subject = "HTML email";

//$message = "
//<html>
//<head>
//<title>HTML email</title>
//</head>
//<body>
//<p>This email contains HTML Tags!</p>
//<table>
//<tr>
//<th>Firstname</th>
//<th>Lastname</th>
//</tr>
//<tr>
//<td>John</td>
//<td>Doe</td>
//</tr>
//</table>
//</body>
//</html>
//";


////$name = $_POST['name'];
////$email = $_POST['email'];
////$message = $_POST['message'];
////$from = 'From: yoursite.com';
////$to = 'contact@yoursite.com';
////$subject = 'Customer Inquiry';
////$message = "From: $name\n E-Mail: $email\n Message:\n $message";


//// Always set content-type when sending HTML email
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
////$headers .= "X-Priority: 1\r\n";

//// More headers
//$headers .= "From: japisoft@hotmail.com" . "\r\n";
////$headers .= "Cc: myboss@example.com" . "\r\n";
////$headers .= "Bcc: myboss@example.com" . "\r\n";
//$headers .= "Reply-To: japisoft@hotmail.com" . "\r\n";
////$headers .= "X-Mailer: PHP/" . phpversion();
//$headers .= "X-Mailer: PHP/" . PHP_VERSION;

////mail($to,$subject,$message,$headers);
////$emailSent = true;
////if($emailSent == true)  echo "OK";

////$headers = array("From: from@example.com",
////    "Reply-To: replyto@example.com",
////    "X-Mailer: PHP/" . PHP_VERSION
////);
////$headers = implode("\r\n", $headers);

////ini_set("SMTP","tls://smtp.gmail.com");
////ini_set("smtp_port", "587");
//ini_set("SMTP","ssl://smtp.gmail.com");
//ini_set("smtp_port", "465");
//ini_set("auth_username", "janpil44@gmail.com");
//ini_set("smtp_password", "japisoft");

////ini_set('sendmail_from', 'janpil44@gmail.com');
//if (mail ($to, $subject, $message, $headers)) {
//    echo '<p>Your message has been sent!</p>';
//} else {
//    echo '<p>Something went wrong, go back and try again!</p>';
//    echo error_get_last()['message'];
//}

use PHPMailer\PHPMailer\PHPMailer;
function send_mail($email, $recipient_name, $message='')
{
    //require("PHPMailer\PHPMailer\PHPMailer");

    $mail = new PHPMailer();

    $mail->CharSet="utf-8";
    $mail->IsSMTP();                                      // set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";  // specify main and backup server
    $mail->SMTPAuth = true;     // turn on SMTP authentication
    $mail->Username = "janpil44@gmail.com";  // SMTP username
    $mail->Password = "japisoft"; // SMTP password

    $mail->From = "japisoft@hotmail.com";
    $mail->FromName = "System-Ad";
    $mail->AddAddress($email, $recipient_name);

    $mail->WordWrap = 50;                                 // set word wrap to 50 characters
    $mail->IsHTML(true);                                  // set email format to HTML (true) or plain text (false)

    $mail->Subject = "This is a Sampleenter code here Email";
    $mail->Body    = $message;
    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
    $mail->AddEmbeddedImage('images/logo.png', 'logo', 'logo.png');
	//$mail->addAttachment('files/file.xlsx');

    if(!$mail->Send())
    {
        echo "Message could not be sent. <p>";
        echo "Mailer Error: " . $mail->ErrorInfo;
        exit;
    }

    echo "Message has been sent";
}


?>