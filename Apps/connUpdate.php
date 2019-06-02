<?php
error_reporting(E_ALL);
include('../Connections/connect.php');


if (isset($_POST['sess'])!='') {
	
if(isset($localhost2,$_POST['ID'])){
	$ID=$_POST['ID'];
	$username =htmlspecialchars(mysqli_escape_string($localhost2,$_POST['Username'])); 
	$email = htmlspecialchars(mysqli_escape_string($localhost2,$_POST['email'])); 
	$firstname = htmlspecialchars(mysqli_escape_string($localhost2,$_POST['firstname'])); 
	$lastname =htmlspecialchars(mysqli_escape_string($localhost2,$_POST['lastname'])) ;
	$const=htmlspecialchars(mysqli_escape_string($localhost2,$_POST['Constituency']));
	$dept=htmlspecialchars(mysqli_escape_string($localhost2,$_POST['Department']));
	$user_r=htmlspecialchars(mysqli_escape_string($localhost2,$_POST['UserRole']));

	
$update=$localhost2->query("UPDATE users SET username = '$username', Email = '$email', firstname = '$firstname', 
	lastname = '$lastname', Department= ' $dept', Constituency= '$const', user_role= '$user_r' where Adm_id = '$ID' ");

echo '<script>alert("Profile Has been updated successfully")
var newLocation = "../AdminAccess/AdminFiles/userM.php"
window.location = newLocation;</script>';





}

else
	echo '<script>alert("Error Updating YOur Profile Please Try Again!!")
var newLocation = "../AdminAccess/AdminFiles/userM.php"
window.location = newLocation;</script>';
}


else
	echo '<script>alert("You are not logged in please login to proceed")
var newLocation = "../AdminAccess/AdminFiles/userM.php"
window.location = newLocation;</script>';
?>