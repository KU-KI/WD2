<?php
$to = "japisoft@hotmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";


//$name = $_POST['name'];
//$email = $_POST['email'];
//$message = $_POST['message'];
//$from = 'From: yoursite.com';
//$to = 'contact@yoursite.com';
//$subject = 'Customer Inquiry';
//$message = "From: $name\n E-Mail: $email\n Message:\n $message";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "X-Priority: 1\r\n";

// More headers
$headers .= 'From: japisoft@hotmail.com' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
//$headers .= 'Bcc: myboss@example.com' . "\r\n";
$headers .= 'Reply-To: japisoft@hotmail.com' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

//mail($to,$subject,$message,$headers);
//$emailSent = true;
//if($emailSent == true)  echo "OK";

//$headers = array("From: from@example.com",
//    "Reply-To: replyto@example.com",
//    "X-Mailer: PHP/" . PHP_VERSION
//);
//$headers = implode("\r\n", $headers);

if (mail ($to, $subject, $message, $headers)) {
	echo '<p>Your message has been sent!</p>';
} else {
	echo '<p>Something went wrong, go back and try again!</p>';
}

?>