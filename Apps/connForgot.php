<?php
include('../Connections/connect.php');
if (isset($_POST['Submit'])) {
	$email=$_POST['Email'];

	$header= array(
		'print_r($email);',
		'Content-Type:text/html'
		);

	$body='<h2>Password Recovery</h2> 
	print_r($email)';
	;

$to = 'recipients@email-address.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: your@email-address.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}







	

	mail('info@kerichocountyportal.co.ke','Recover Password',$body,implode("\r\n", $header));

echo '<script>alert("Request Sent Successfully")
	var newLocation = "../AdminAccess/login.php";
	window.location = newLocation;</script>';
}






?>