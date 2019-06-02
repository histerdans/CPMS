<?php
error_reporting(E_ALL);
include('../Connections/connect.php');


if (isset($localhost2,$_POST['sess'])!='') {
	

	$username = htmlspecialchars($_POST['Username']); 
	$email = htmlspecialchars($_POST['email']); 
	$firstname = htmlspecialchars($_POST['firstname']); 
	$lastname = htmlspecialchars($_POST['lastname']);
	$const=htmlspecialchars($_POST['Constituency']);
	$dept=htmlspecialchars($_POST['Department']);
	$user_r=htmlspecialchars($_POST['UserRole']);

	
if ($insert=$localhost2->query("INSERT INTO users(username ,Email,firstname, 
	lastname,Department,Constituency,user_role) 
		VALUES('$username','$email','$firstname','$lastname',' $dept','$const','$user_r')")) {
		echo '<script>alert("New User Added")
var newLocation ="../AdminAccess/AdminFiles/newUser.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured Please refresh page and try again")
var newLocation = "../AdminAccess/AdminFiles/newUser.php";
window.location = newLocation;</script>';
}

}else
	echo '<script>alert("Sorry an error occured Please refresh page and try again")
var newLocation = "../AdminAccess/AdminFiles/newUser.php";
window.location = newLocation;</script>';

?>