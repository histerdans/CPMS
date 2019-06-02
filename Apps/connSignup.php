<?php
include('../Connections/connect.php');

$inputUser=mysqli_real_escape_string($localhost2,$_POST['NUsername']);
$inputPass=mysqli_real_escape_string($localhost2,$_POST['Password']);
$inputEmail=mysqli_real_escape_string($localhost2,$_POST['Email']);

if ($insert=$localhost2->query("INSERT INTO notifications(Username, Password, Email) VALUES('$inputUser','$inputPass','$inputEmail')")) {
	echo '<script>alert("Request Sent Successfully")
var newLocation = "../AdminAccess/login.php";
window.location = newLocation;</script>';
}


?>