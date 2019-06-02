<?php
error_reporting(E_ALL);
include('../Connections/connect.php');


if (isset($_POST['sess'])!='') {
	
if(isset($_POST['ID'])){
	$ID=htmlspecialchars($_POST['ID']);
	$pT = htmlspecialchars(mysqli_escape_string($localhost2,$_POST['pTitle'])); 
	$cont = htmlspecialchars(mysqli_escape_string($localhost2,$_POST['content'])); 
	
$update=$localhost2->query("UPDATE articles SET Post = '$pT', Content = '$cont' where ID = '$ID' ");

echo '<script>alert("Post updated successfully")
var newLocation = "../AdminAccess/AdminFiles/PostM.php"
window.location = newLocation;</script>';





}

else
	echo '<script>alert("Error Updating YOur Profile Please Try Again!!")
var newLocation = "../AdminAccess/AdminFiles/PostM.php"
window.location = newLocation;</script>';
}


else
	echo '<script>alert("You are not logged in please login to proceed")
var newLocation = "../AdminAccess/AdminFiles/PostM.php"
window.location = newLocation;</script>';
?>