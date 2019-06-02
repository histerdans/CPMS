<?php
error_reporting(E_ALL);
include('../Connections/connect.php');


if (isset($_POST['sess'])!='') {
	
if(isset($_POST['ID'])){
	$ID=htmlspecialchars($_POST['ID']);
	$stat = htmlspecialchars(mysqli_escape_string($localhost2,$_POST['own'])); 
	$cont = htmlspecialchars(mysqli_escape_string($localhost2,$_POST['content'])); 
	
$update=$localhost2->query("UPDATE feedbacks SET status = '$stat', Reply = '$cont' where fid = '$ID' ");

echo '<script>alert("Feedbacks Replied successfully")
var newLocation = "../AdminAccess/AdminFiles/Feedbacks.php"
window.location = newLocation;</script>';

}

else
	echo '<script>alert("Error Replying Feedbacks Please Try Again!!")
var newLocation = "../AdminAccess/AdminFiles/Feedbacks.php"
window.location = newLocation;</script>';
}


else
	echo '<script>alert("You are not logged in please login to proceed")
var newLocation = "../AdminAccess/login.php"
window.location = newLocation;</script>';
?>