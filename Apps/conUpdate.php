<?php
error_reporting(E_ALL);
include('../Connections/connect.php');


if (isset($_POST['sess'])!='') {
	
if(isset($localhost2,$_POST['ID'])){
	$ID=htmlspecialchars (mysqli_escape_string($localhost2,$_POST['ID']));
	$pname =htmlspecialchars (mysqli_escape_string($localhost2,$_POST['Pname'])); 
	$pdesc =htmlspecialchars (mysqli_escape_string($localhost2,$_POST['Pdescr'])); 
	$firstname = htmlspecialchars (mysqli_escape_string($localhost2,$_POST['FName'])); 
	$lastname =htmlspecialchars (mysqli_escape_string($localhost2,$_POST['LName']));
	$const=htmlspecialchars (mysqli_escape_string($localhost2,$_POST['Constituency']));
	$dept=htmlspecialchars (mysqli_escape_string($localhost2,$_POST['Ministry']));
	$ltd=htmlspecialchars (mysqli_escape_string($localhost2,$_POST['Company']));

	
$update=$localhost2->query("UPDATE activity SET Project_Name= '$pname',Project_Description='$pdesc', FNsup ='$firstname', 
	LNsup = '$lastname', Ministry= '$dept',Constituency='$const', Csup='$ltd' where Project_ID = '$ID' ");

echo '<script>alert("Profile Has been updated successfully")
var newLocation = "../AdminAccess/AdminFiles/QAtlb.php"
window.location = newLocation;</script>';





}

else
	echo '<script>alert("Error Updating YOur Profile Please Try Again!!")
var newLocation = "../AdminAccess/AdminFiles/QAtlb.php"
window.location = newLocation;</script>';
}


else
	echo '<script>alert("You are not logged in please login to proceed")
var newLocation = "../AdminAccess/AdminFiles/QAtlb.php"
window.location = newLocation;</script>';
?>